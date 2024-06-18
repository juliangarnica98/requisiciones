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
        { 
            path: '/misrequisiciones', 
            component: require('./components/modules/admin/Requisitions/EditComponent2').default 
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
        { 
            path: '/boss/ver-tiendas', 
            component: require('./components/modules/user/Tiendas/IndexComponent').default 
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
        { 
            path: '/recruiter/misrequisiciones', 
            component: require('./components/modules/recruiter/Requisitions/EditComponent2').default 
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
            path: '/generalist/misrequisiciones', 
            component: require('./components/modules/generalist/Requisitions/EditComponent2').default 
        },
        { 
            path: '/generalist/charges', 
            component: require('./components/modules/generalist/Charges/IndexComponent').default 
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
        { 
            path:'/generalist/holidays',
            component: require('./components/modules/generalist/Holidays/IndexComponent').default 
        },
        { 
            path:'/generalist/tiendas',
            component: require('./components/modules/generalist/Tiendas/IndexComponent').default 
        },
        //rutas de especialista
         { 
            path: '/specialist/dashboard', 
            component: require('./components/modules/specialist/Dashboard/IndexComponent').default 
        },
        { 
            path: '/specialist/requisiciones', 
            component: require('./components/modules/specialist/Requisitions/IndexComponent').default 
        },
        { 
            path: '/specialist/requisicion', 
            component: require('./components/modules/specialist/Requisitions/StoreComponent').default 
        },
        { 
            path: '/specialist/entrevistas', 
            component: require('./components/modules/specialist/Interviews/IndexComponent').default 
        },
        { 
            path: '/specialist/misrequisiciones', 
            component: require('./components/modules/specialist/Requisitions/EditComponent2').default 
        },
        { 
            name:'/specialist/entrevista',
            path: '/specialist/entrevistas/:id', 
            component: require('./components/modules/specialist/Interviews/ShowComponent').default 
        },
        { 
            name:'/specialist/requisicion',
            path: '/specialist/requisiciones/:area/:id', 
            component: require('./components/modules/specialist/Requisitions/ShowComponent').default 
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
        { 
            path: '/recruiter/misrequisiciones', 
            component: require('./components/modules/recruiter/Requisitions/EditComponent2').default 
        },
        //rutas generalist comercial
        { 
            path: '/generalistcomercial/dashboard', 
            component: require('./components/modules/generalistcomercial/Dashboard/IndexComponent').default 
        },
        { 
            path: '/generalistcomercial/requisiciones', 
            component: require('./components/modules/generalistcomercial/Requisitions/IndexComponent').default 
        },
        { 
            path: '/generalistcomercial/requisicion', 
            component: require('./components/modules/generalistcomercial/Requisitions/StoreComponent').default 
        },
        { 
            path: '/generalistcomercial/entrevistas', 
            component: require('./components/modules/generalistcomercial/Interviews/IndexComponent').default 
        },
        { 
            path: '/generalistcomercial/misrequisiciones', 
            component: require('./components/modules/generalistcomercial/Requisitions/EditComponent2').default 
        },
        { 
            path: '/generalistcomercial/charges', 
            component: require('./components/modules/generalistcomercial/Charges/IndexComponent').default 
        },
        { 
            name:'/generalistcomercial/entrevista',
            path: '/generalistcomercial/entrevistas/:id', 
            component: require('./components/modules/generalistcomercial/Interviews/ShowComponent').default 
        },
        { 
            name:'/generalistcomercial/requisicion',
            path: '/generalist/requisiciones/:area/:id', 
            component: require('./components/modules/generalistcomercial/Requisitions/ShowComponent').default 
        },
        { 
            path:'/generalistcomercial/tiendas',
            component: require('./components/modules/generalistcomercial/Tiendas/IndexComponent').default 
        },

    ],
    mode:'history',
    linkActiveClass:'active-link',
})