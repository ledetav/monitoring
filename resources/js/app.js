require('./bootstrap');
require('./dashboard');

import Vue from 'vue';
import VueRouter from 'vue-router';
import {
    library
} from '@fortawesome/fontawesome-svg-core';
import {
    fas
} from '@fortawesome/free-solid-svg-icons';
import {
    FontAwesomeIcon
} from '@fortawesome/vue-fontawesome';

import Vuelidate from 'vuelidate';

import RulesComponent from './Components/AdminDashboard/RulesComponents/RulesComponent.vue';
import RegisterUser from './Components/AdminDashboard/RulesComponents/RegisterUserComponent.vue';
import RegisterStation from './Components/AdminDashboard/RulesComponents/RegisterStationComponent.vue';
import UpdateUser from './Components/AdminDashboard/RulesComponents/UpdateUserComponent.vue';
import StationsComponent from './Components/Other/StationsComponent.vue';
import Uploading from './Components/Other/UploadingDataComponent.vue';
import AdminContent from './Components/AdminDashboard/AdminContent.vue';
import Data from './Components/Other/StationDataComponent.vue';
import MonDay from './Components/Other/DayDataComponent.vue';
import MonWeek from './Components/Other/WeekDataComponent.vue'

import UserContent from './Components/UserDashboard/UserContent.vue';

library.add(fas);

Vue.config.productionTip = false;

Vue.component('admin-dashboard', require('./Components/AdminDashboard/AdminDashboard.vue').default);
Vue.component('admin-sidebar', require('./Components/AdminDAshboard/AdminSidebarComponent.vue').default);
Vue.component('admin-content', require('./Components/AdminDashboard/AdminContent.vue').default);

Vue.component('user-dashboard', require('./Components/UserDashboard/UserDashboard.vue').default);
Vue.component('user-sidebar', require('./Components/UserDAshboard/UserSidebarComponent.vue').default);
Vue.component('user-content', require('./Components/UserDashboard/UserContent.vue').default);

Vue.component('font-awesome-icon', FontAwesomeIcon);

Vue.component('dash-data', require('./Components/Other/StationDataComponent.vue').default);
Vue.component('dash-uploading', require('./Components/Other/UploadingDataComponent.vue').default)
Vue.component('mon-week', require('./Components/Other/WeekDataComponent.vue').default);
Vue.component('mon-day', require('./Components/Other/DayDataComponent.vue').default)

Vue.component('rules-update', require('./Components/AdminDashboard/RulesComponents/UpdateUserComponent.vue').default);
Vue.component('rules-station', require('./Components/AdminDashboard/RulesComponents/RegisterStationComponent.vue').default);
Vue.component('rules-user', require('./Components/AdminDashboard/RulesComponents/RegisterUserComponent.vue').default);

Vue.use(VueRouter);
Vue.use(Vuelidate);

window.Vue = require('vue');

const router = new VueRouter({
    mode: 'history',
    routes: [{
            path: '/admindashboard',
            component: AdminContent,
            children: [{
                    path: 'rules',
                    component: RulesComponent,
                    name: 'rules',
                    children: [{
                            path: '',
                            name: 'register-user',
                            component: RegisterUser,
                        },
                        {
                            path: 'register_station',
                            name: 'register-station',
                            component: RegisterStation,
                        },
                        {
                            path: 'update_user',
                            name: 'update-user',
                            component: UpdateUser,
                        }
                    ]
                },
                {
                    path: '',
                    component: StationsComponent,
                    name: 'stations',
                },
            ],
        },
        {
            path: '/userdashboard',
            component: UserContent,
            children: [{
                path: '',
                component: StationsComponent,
                name: 'stations',
            }, ] 
        }
    ]
});


const app = new Vue({
    el: '#app',
    router,
    components: {
        Data,
        Uploading,
        MonDay,
        MonWeek,
        UpdateUser,
        RegisterUser,
        RegisterStation,
    },
});
