Nova.booting((Vue, router) => {
    router.addRoutes([
        {
            name: 'nova-changelog',
            path: '/nova-changelog',
            component: require('./components/Tool'),
        },
    ])
})
