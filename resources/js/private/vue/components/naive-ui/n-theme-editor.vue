<template>
  <n-theme-editor>
    <app />
  </n-theme-editor>
</template>

<script>
  import { defineComponent } from 'vue'
  import { NThemeEditor } from 'naive-ui'

  export default defineComponent({
    name: 'NThemeEditorCustom',
    components: {
      NThemeEditor
    }
  })
</script>