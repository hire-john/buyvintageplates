<template>
  <n-contact-form>
  <n-space vertical>
    <n-input v-model:value="value" type="text" placeholder="Basic Input" />
    <n-input v-model:value="value" type="textarea" placeholder="Basic Textarea" />
  </n-space>
</n-contact-form>
</template>

<script setup>
import { NInput } from 'naive-ui'
</script>