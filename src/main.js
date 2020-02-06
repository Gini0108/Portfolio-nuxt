import Vue from 'vue'
import App from './App.vue'

import VueWow from 'vue-wow';
import VueTyperPlugin from 'vue-typer'

Vue.use(VueWow);
Vue.use(VueTyperPlugin);

Vue.config.productionTip = false

new Vue({
  render: h => h(App),
}).$mount('#app')
