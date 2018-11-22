Nova.booting((Vue, router) => {
    router.addRoutes([
        {
            name: 'nova-questionable',
            path: '/nova-questionable',
            component: require('./components/Tool'),
        },
    ])
})
