import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)

export default new Router({
    routes: [
        //rutas admin
        { 
            path: '/dashboard', 
            component: require('./components/modules/admin/Dashboard/DashboardComponent').default 
        },
        { 
            path: '/requisiciones', 
            component: require('./components/modules/admin/Requisitions/IndexComponent').default 
        },
        { 
            path: '/requisiciones/crear', 
            component: require('./components/modules/admin/Requisitions/StoreComponent').default 
        },
        { 
            path: '/requisiciones/reportes', 
            component: require('./components/modules/admin/Requisitions/ReportComponent').default 
        },
        { 
            path: '/entrevistas', 
            component: require('./components/modules/admin/Interviews/InterviewsComponent').default 
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
        //rutas jefe
        { 
            path: '/boss/requisiciones', 
            component: require('./components/modules/user/Requisitions/RequisitionsCompnent').default 
        },
        { 
            path: '/boss/crear-requisicion', 
            component: require('./components/modules/user/Requisitions/StoreComponent').default 
        },

    ],
    mode:'history',
    linkActiveClass:'active-link',
    // linkExactActiveClass: "exact-active",
})