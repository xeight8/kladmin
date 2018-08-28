<template>
	<div class="pagebuilder-page">

		<div class="sections">
			<component
				v-for="section in sections" 
				v-bind:is="section.type"
				v-bind:id="'section-'+section.index"
				>
			</component>
		</div>

	    <div class="pagebuilder-page-toolbar fixed">
	    	<a class="pagebuilder-add-section" v-on:click="addSection('pagebuilder-section')">Add section</a>
	    	<a class="pagebuilder-add-fullwidth-section" v-on:click="addSection('pagebuilder-fullwidth-section')">Add fullwidth section</a>
	        <a href="#">Save</a>
	    </div>    
	</div>
</template>

<script>
    export default {
    	data: function() {
    		return {
    			sections: []
       		}
    	},
    	methods: {
    		addSection(sectionType) {
    			let index = this.sections.length + 1;

    			this.sections.push({index: index, type: sectionType});
    		}
    	}
    }
</script>

<style type="text/css">
.pagebuilder-page-toolbar {
	bottom: 20px;
	left: 50%;
	transform: translate(-50%, 0);
}
</style>