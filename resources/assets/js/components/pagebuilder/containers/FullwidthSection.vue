<template>
	<section class="pagebuilder-section">
		<div class="container-fluid">
			<pagebuilder-row 
				v-for="(row, index) in rows"
				v-bind:key="index+1"
				>
			</pagebuilder-row>
		</div>

		<pagebuilder-section-toolbar></pagebuilder-section-toolbar>
	</section>
</template>

<script>
    export default {
    	data: function() {
    		return {
    			rows: []
    		}
    	}
    }
</script>

<style scoped>
</style>