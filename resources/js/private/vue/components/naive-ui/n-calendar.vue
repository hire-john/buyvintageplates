<template>
<n-message-provider>
  <n-calendar
    @update:value="handleUpdateValue"
    #="{ year, month, date }"
    v-model:value="value"
    :is-date-disabled="isDateDisabled"
  >
    {{ year }}-{{ month }}-{{ date }}
  </n-calendar>
  </n-message-provider>
</template>

<script>
import { defineComponent, ref } from 'vue'
import { NCalendar } from 'naive-ui'
import { NMessageProvider } from 'naive-ui'
import { useMessage } from 'naive-ui'
import { isYesterday, addDays } from 'date-fns'

export default defineComponent({
  name:'NBasicCalendar',
  components:{
    NCalendar,
    NMessageProvider,
    useMessage,
    isYesterday,
    addDays
  },
  setup () {
    const message = useMessage()
    return {
      value: ref(addDays(Date.now(), 1).valueOf()),
      handleUpdateValue (_, { year, month, date }) {
        message.success(`${year}-${month}-${date}`)
      },
      isDateDisabled (timestamp) {
        if (isYesterday(timestamp)) {
          return true
        }
        return false
      }
    }
  }
})
</script>