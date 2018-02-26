require('./bootstrap');
import router from './routes';


Vue.component('navbar', require('./components/User/Navbar').default);
Vue.component('message', require('./components/User/Objave/Message').default);



const app = new Vue({
    el: '#root',
    data: {
        respNavActive: false
    },
    router,
    methods: {
        changeMenu() {
            this.respNavActive = !this.respNavActive;
        },
    }


});