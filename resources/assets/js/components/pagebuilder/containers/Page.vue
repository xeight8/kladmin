<template>
	<div class="pagebuilder-page" v-bind:style="styles">

		<pagebuilder-page-toolbar></pagebuilder-page-toolbar>

		<div class="sections">
			<component
				v-for="(section, index) in sections" 
				v-bind:key="index+1"
				v-bind:is="section.type"
				v-bind:id="'section-'+(index+1)"
				>
			</component>
		</div>

		<div class="pagebuilder-settings-container">
			<pagebuilder-page-settings 
				v-show="visibleSettings == 'page'"
				v-on:pageStylesChanged="applyPageStyles"
				>
			</pagebuilder-page-settings>
		</div>
	</div>
</template>

<script>
    export default {
    	data: function() {
    		return {
    			sections: [],
    			styles: [],
    			visibleSettings: false
       		}
    	},
    	methods: {
    		applyPageStyles(styles) {
    			this.styles = styles;
      		}
    	}
    }
</script>

<style scoped>
</style>