import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)

export default new Router({
    routes: [

        { path: '/dashboard', component: require('./components/modules/admin/Dashboard/DashboardComponent').default },
        { path: '/requisiciones', component: require('./components/modules/admin/Requisitions/RequisitionsCompnent').default },
        { path: '/entrevistas', component: require('./components/modules/admin/Interviews/InterviewsComponent').default },
        { path: '/usuarios', component: require('./components/modules/admin/Users/UsersComponent').default },
        // { path: '/usuarios', component: require('./components/principal/examplecomponent2').default },
        // { path: '/', component: require('./components/auth/login').default },
        // { path: '/registrar-reconocimiento', component: require('./components/principal/index2').default },
        // { path: '/login', component: require('./components/auth/login').default },

        // { path: '/dashboard', component: require('./components/modulos/dashboard/index').default },
        // { path: '/colaboradores', component: require('./components/modulos/colaboradores/index').default },
        // { path: '/importar-colaboradores', component: require('./components/modulos/colaboradores/import').default },
        // { path: '/reconocimientos', component: require('./components/modulos/reconocimientos/index').default },
        // { path: '/reportes', component: require('./components/modulos/reportes/index').default },

        // { path: '/usuarios', component: require('./components/modulos/usuarios/index').default },
        // { path: '/usuarios/create', component: require('./components/modulos/usuarios/create').default },
    ],
    mode:'history',
    // linkActiveClass:'active'
})