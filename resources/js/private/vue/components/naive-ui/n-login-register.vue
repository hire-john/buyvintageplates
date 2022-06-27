<template>
<n-card>
    <n-tabs default-value="signin" size="large">
      <n-tab-pane name="signin" tab="Sign in">
        <n-form>
          <n-form-item-row label="Username">
            <n-input />
          </n-form-item-row>
          <n-form-item-row label="Password">
            <n-input />
          </n-form-item-row>
        </n-form>
        <n-button type="primary" block>Sign In</n-button>
      </n-tab-pane>
      <n-tab-pane name="signup" tab="Sign Up">
        <n-form>
          <n-form-item-row label="Username">
            <n-input />
          </n-form-item-row>
          <n-form-item-row label="Password">
            <n-input />
          </n-form-item-row>
          <n-form-item-row label="Reenter Password">
            <n-input />
          </n-form-item-row>
        </n-form>
        <n-button type="primary" block>Sign Up</n-button>
      </n-tab-pane>
    </n-tabs>
  </n-card>
  </template>

  <script>
import { defineComponent, ref } from 'vue'
import { useMessage } from 'naive-ui'

export default defineComponent({
  name:'NLoginRegisterForm',
  components:{
    NCalendar,
    useMessage,
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