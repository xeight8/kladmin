<template>
	<div class="pagebuilder-section-toolbar absolute">
    	<a class="pagebuilder-add-section" v-on:click="addRow('pagebuilder-row')">Add row</a>
    </div>
</template>

<script>
	export default {
    	methods: {
    		addRow(rowType) {
    			let section = this.$parent;
    			
    			section.rows.push({type: rowType});
    		}
    	}
    }
</script>

<style scoped>
.pagebuilder-section-toolbar {
	top: 0;
	right: 0;
}
</style>