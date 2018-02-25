import VueRouter from 'vue-router';

let routes = [{
        path: '/',
        component: require('./components/Main').default
    },
    {
        path: '/placanja',
        component: require('./components/Placanja').default
    }, {
        path: '/dugovanja',
        component: require('./components/Dugovanja').default
    },
    {
        path: '/plan',
        component: require('./components/Plan').default
    },
    {
        path: '/stanari',
        component: require('./components/Stanari').default
    }, {
        path: '/gazda',
        component: require('./components/Gazda').default
    }, {
        path: '/ostalo',
        component: require('./components/Ostalo').default
    }
]
export default new VueRouter({
    routes,
    linkActiveClass: 'is-active'
});