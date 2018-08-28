<template>
	<section class="pagebuilder-section">
		<div class="container-fluid">
			<pagebuilder-row 
				v-for="row in rows"
				
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