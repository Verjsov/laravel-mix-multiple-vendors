import Vue from 'vue'

Vue.component('hello-world', require('./HelloWorld.vue'));

const app = new Vue({
  el: '#app'
});
