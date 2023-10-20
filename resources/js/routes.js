import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)

export default new Router({
    routes: [
        //rutas admin
        { 
            path: '/dashboard', 
            component: require('./components/modules/admin/Dashboard/IndexComponent').default 
        },
        { 
            path: '/requisiciones', 
            component: require('./components/modules/admin/Requisitions/IndexComponent').default 
        },
        { 
            path: '/requisicion', 
            component: require('./components/modules/admin/Requisitions/StoreComponent').default 
        },
        { 
            path: '/entrevistas', 
            component: require('./components/modules/admin/Interviews/IndexComponent').default 
        },
        { 
            name:'entrevista',
            path: '/entrevistas/:id', 
            component: require('./components/modules/admin/Interviews/ShowComponent').default 
        },
        { 
            name:'usuarios', 
            path: '/usuarios', component: require('./components/modules/admin/Users/IndexComponent').default 
        },
        { 
            name:'usuario',
            path: '/usuario/:id', 
            component: require('./components/modules/admin/Users/EditComponent').default 
        },
        { 
            name:'requisicion',
            path: '/requisiciones/:area/:id', 
            component: require('./components/modules/admin/Requisitions/ShowComponent').default 
        },
        //rutas jefe
        { 
            path: '/boss/requisiciones', 
            component: require('./components/modules/user/Requisitions/IndexComponent').default 
        },
        { 
            path: '/boss/crear-requisicion', 
            component: require('./components/modules/user/Requisitions/StoreComponent').default 
        },
        { 
            name:'bossrequisicion',
            path: '/boss/requisicion/:id', 
            component: require('./components/modules/user/Requisitions/ShowComponent').default 
        },
        //rutas director
        { 
            path: '/director/requisiciones', 
            component: require('./components/modules/director/Requisitions/IndexComponent').default 
        },
        { 
            path: '/director/crear-requisicion', 
            component: require('./components/modules/director/Requisitions/StoreComponent').default 
        },
        { 
            name:'directorrequisicion',
            path: '/director/requisicion/:id', 
            component: require('./components/modules/director/Requisitions/ShowComponent').default 
        },
        { 
            path: '/director/requisiciones-regional', 
            component: require('./components/modules/director/Requisitions/ShowAllComponent').default 
        },
        //rutas recruiter
        { 
            path: '/recruiter/dashboard', 
            component: require('./components/modules/recruiter/Dashboard/IndexComponent').default 
        },
        { 
            path: '/recruiter/requisiciones', 
            component: require('./components/modules/recruiter/Requisitions/IndexComponent').default 
        },
        { 
            path: '/recruiter/requisicion', 
            component: require('./components/modules/recruiter/Requisitions/StoreComponent').default 
        },
        { 
            path: '/recruiter/entrevistas', 
            component: require('./components/modules/recruiter/Interviews/IndexComponent').default 
        },
        { 
            name:'/recruiter/entrevista',
            path: '/recruiter/entrevistas/:id', 
            component: require('./components/modules/recruiter/Interviews/ShowComponent').default 
        },
        { 
            name:'/recruiter/requisicion',
            path: '/recruiter/requisiciones/:area/:id', 
            component: require('./components/modules/recruiter/Requisitions/ShowComponent').default 
        },
        //rutas generalist
        { 
            path: '/generalist/dashboard', 
            component: require('./components/modules/generalist/Dashboard/IndexComponent').default 
        },
        { 
            path: '/generalist/requisiciones', 
            component: require('./components/modules/generalist/Requisitions/IndexComponent').default 
        },
        { 
            path: '/generalist/requisicion', 
            component: require('./components/modules/generalist/Requisitions/StoreComponent').default 
        },
        { 
            path: '/generalist/entrevistas', 
            component: require('./components/modules/generalist/Interviews/IndexComponent').default 
        },
        { 
            name:'/generalist/entrevista',
            path: '/generalist/entrevistas/:id', 
            component: require('./components/modules/generalist/Interviews/ShowComponent').default 
        },
        { 
            name:'/generalist/requisicion',
            path: '/generalist/requisiciones/:area/:id', 
            component: require('./components/modules/generalist/Requisitions/ShowComponent').default 
        },

    ],
    mode:'history',
    linkActiveClass:'active-link',
    // linkExactActiveClass: "exact-active",
})