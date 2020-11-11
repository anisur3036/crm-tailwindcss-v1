import { App, plugin } from '@inertiajs/inertia-vue'
import Vue from 'vue'
import PortalVue from 'portal-vue';

import './bootstrap'


Vue.use(plugin)
Vue.use(PortalVue);

const app = document.getElementById('app');

new Vue({
    render: (h) =>
        h(App, {
            props: {
                initialPage: JSON.parse(app.dataset.page),
                resolveComponent: (name) => require(`./Pages/${name}`).default,
            },
        }),
}).$mount(app);

