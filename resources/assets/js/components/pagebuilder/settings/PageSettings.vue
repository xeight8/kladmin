<template>
	<div class="pagebuilder-settings pagebuilder-page-settings fixed">
		<div class="form-group">
			<label>Background image</label>
			<input 
				type="text" 
				class="form-control" 
				placeholder="Page background color"
				v-model="pageStyles.backgroundImage"
			>
		</div>

		<div class="form-group">
			<label>Background repeat</label>

			<input 
				type="text" 
				class="form-control" 
				placeholder="Page background color"
				v-model="pageStyles.backgroundRepeat"
			>
		</div>

		<div class="form-group">
			<label>Background color</label>
			<input 
				type="text" 
				class="form-control" 
				placeholder="Page background color"
				v-model="pageStyles.background"
			>
		</div>
	</div>
</template>


<script>
	export default {
    	data: function() {
    		return {
    			pageStyles: {}
       		}
    	},
    	watch: {
    		pageStyles: {
	    		handler() {
	    			this.$emit('pageStylesChanged', this.pageStyles);
	    		},
	    		deep: true
    		}
    	}
    }
</script>

<style scoped>
</style>