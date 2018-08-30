<template>
    <div class="pagebuilder-page-toolbar fixed">
    	<a class="pagebuilder-add-section" v-on:click="addSection('pagebuilder-section')">Add section</a>
    	<a class="pagebuilder-add-fullwidth-section" v-on:click="addSection('pagebuilder-fullwidth-section')">Add fullwidth section</a>
        <a class="pagebuilder-show-page-settings" v-on:click="showSettings">Settings</a>
        <a href="#">Save</a>
    </div>
</template>

<script>
	export default {
    	methods: {
    		addSection(sectionType) {
    			let page = this.$parent;

    			page.sections.push({type: sectionType});
    		},
            showSettings() {
                let page = this.$parent;

                page.visibleSettings = 'page';
            }
    	}
    }
</script>

<style scoped>
.pagebuilder-page-toolbar {
	bottom: 20px;
	left: 50%;
	transform: translate(-50%, 0);
}
</style>