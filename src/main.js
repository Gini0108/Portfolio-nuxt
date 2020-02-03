import Vue from 'vue'
import App from './App.vue'
import VueWow from 'vue-wow';

Vue.use(VueWow)

Vue.config.productionTip = false

new Vue({
  render: h => h(App),
}).$mount('#app')
