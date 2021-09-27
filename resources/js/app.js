import Vue from 'vue'
import './bootstrap';
import Home from './Home.vue'

const app = new Vue({
    el: '#app',
    render: h => h(Home),
})

