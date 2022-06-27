<template>
	<n-space vertical>
		<n-select 
		:options="allConditions"
		@update:value="handleUpdateValue"/>
	</n-space>
</template>

<script>
	import { defineComponent, ref, reactive } from 'vue'
	import { mapState, mapAction, mapGetters } from 'vuex'
	import { useMessage } from 'naive-ui'
	import { NSelect } from 'naive-ui'

	export default defineComponent({
		name: 'CProductConditionsSelect',
		components:{
			NSelect
		},
		computed: {
			...mapGetters({
				allConditions: 'getProductConditions',
				getSelectedCondition: 'getSelectedCondition'
			})
		},
		methods: {

		},
		created() {
			this.$store.dispatch("loadProductConditions")
		},
		setup(){
			const message = useMessage()
			return {
				handleUpdateValue (value) {
					const selectedCondition = this.getSelectedCondition(value)
					message.info('description: ' + selectedCondition.description)
				}
			}
		}
	})
</script>

<style>
</style>