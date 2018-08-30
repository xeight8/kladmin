
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

window.Vue = require('vue');

/*
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// containers
Vue.component('pagebuilder-page', require('./components/pagebuilder/containers/Page.vue'));
Vue.component('pagebuilder-section', require('./components/pagebuilder/containers/Section.vue'));
Vue.component('pagebuilder-fullwidth-section', require('./components/pagebuilder/containers/FullwidthSection.vue'));
Vue.component('pagebuilder-row', require('./components/pagebuilder/containers/Row.vue'));

// toolbars
Vue.component('pagebuilder-page-toolbar', require('./components/pagebuilder/toolbars/PageToolbar.vue'));
Vue.component('pagebuilder-section-toolbar', require('./components/pagebuilder/toolbars/SectionToolbar.vue'));

// settings
Vue.component('pagebuilder-page-settings', require('./components/pagebuilder/settings/PageSettings.vue'))

const app = new Vue({
    el: '#page-builder',
});
