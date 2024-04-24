import './bootstrap';

import { createApp } from 'vue'
import App from './App.vue';
import routes from './util/routes';
import './assets/style.css';
import store from './util';
import HighchartsVue from 'highcharts-vue';

const app = createApp(App);
app.use(store);
app.use(HighchartsVue);
app.use(routes);


app.mount('#app')

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

