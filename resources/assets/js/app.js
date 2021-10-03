import vue from 'vue';

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

vue.component(
  'mail',
  require('./components/Mail.vue').default
);

vue.component(
  'theme',
  require('./components/Theme.vue').default
);

vue.component(
  'color',
  require('./components/Color.vue').default
);

const app = new vue({
  el: '#app',

  data: {}
});
