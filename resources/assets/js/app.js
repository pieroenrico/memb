
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window.$ = window.jQuery = require('jquery');

import axios from 'axios';
import TextSelectorComponent from './components/TextSelectorComponent.vue';

const app = new Vue({
    el: '#app',
    components: {
        'memb-text-selector': TextSelectorComponent,
    }
});

