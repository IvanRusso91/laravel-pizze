
import Vue from "vue";

import VueRouter from "vue-router";

Vue.use(VueRouter);

import HomeComp from './pages/HomeComp';
import ContactComp from './pages/ContactComp';


const router =new VueRouter({
    mode: 'history',
    routes:[
        {
            path:'/',
            name:'home',
            component: HomeComp,

        },
        {
            path:'/contatti',
            name:'contacts',
            component: ContactComp,

        },
    ],



})
    export default router;
