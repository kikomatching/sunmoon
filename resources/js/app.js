/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

let VM = {};

if (document.querySelectorAll('[data-page="logs"]').length) {
    VM = require('./logs/index').Logs;
}

if (VM == 'undefined') {
    VM = require ('@core/default');
}

VM.$mount('#app');