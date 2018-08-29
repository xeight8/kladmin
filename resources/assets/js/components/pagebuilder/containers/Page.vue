<template>
	<div class="pagebuilder-page">

		<div class="sections">
			<component
				v-for="(section, index) in sections" 
				v-bind:key="index+1"
				v-bind:is="section.type"
				v-bind:id="'section-'+(index+1)"
				>
			</component>
		</div>

		<pagebuilder-page-toolbar></pagebuilder-page-toolbar>
	</div>
</template>

<script>
    export default {
    	data: function() {
    		return {
    			sections: []
       		}
    	}
    }
</script>

<style scoped>
</style>