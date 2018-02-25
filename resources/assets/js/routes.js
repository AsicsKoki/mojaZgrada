import VueRouter from 'vue-router';

let routes = [{
        path: '/placanja',
        component: require('./components/Placanja').default
    }, {
        path: '/dugovanja',
        component: require('./components/Dugovanja').default
    },
    {
        path: '/plan',
        component: require('./components/Plan').default
    }
]
export default new VueRouter({
    routes,
    linkActiveClass: 'is-active'
});