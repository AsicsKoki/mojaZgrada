require('./bootstrap');
import router from './routes';



Vue.component('placanja', require('./components/Placanja'));
Vue.component('dugovanja', require('./components/Dugovanja'));
Vue.component('plan', require('./components/Plan'));

const app = new Vue({
    el: '#root',
    router
});