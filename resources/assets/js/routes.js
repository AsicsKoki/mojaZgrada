import VueRouter from 'vue-router';

let routes = [{
        path: '/',
        redirect: '/objave'
    },
    {
        path: '/objave',
        component: require('./components/User/Objave/Objave').default,
    },
    {
        path: '/racuni',
        component: require('./components/User/Racuni/Racuni').default
    },
    {
        path: '/plan',
        component: require('./components/User/Plan/Plan').default
    },
    {
        path: '/info',
        component: require('./components/User/Info/Info').default
    },
    {
        path: '/izvestaji',
        component: require('./components/User/Izvestaji/Izvestaji').default
    },
    {
        path: '/podesavanja',
        component: require('./components/User/Podesavanja/Podesavanja').default
    },
    {
        path: '*',
        component: require('./components/NotFound').default
    }
]
export default new VueRouter({
    routes,
    linkActiveClass: 'is-active'
});