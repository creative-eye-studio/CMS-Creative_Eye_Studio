/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.scss';

// start the Stimulus application
import './bootstrap';

import Vue from 'vue'
import VueRouter from 'vue-router'
import vuetify from './plugins/vuetify'

import Home from './components/Home'

const routes = [
    { path: '/', component: Home, name: 'home' }
]

const router = new VueRouter({
    mode: 'history',
    base: '/app/',
    routes
})

Vue.use(VueRouter)

new Vue({
    router,
    vuetify
}).$mount('#app')


// ScrollBar
import Scrollbar from 'smooth-scrollbar';
Scrollbar.init(
    document.querySelector('#my-scrollbar'), 
    options
);

// Parallax
import simpleParallax from 'simple-parallax-js';
var image = document.getElementsByClassName('parallax');
new simpleParallax(image);