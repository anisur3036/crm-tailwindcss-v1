import { App, plugin } from '@inertiajs/inertia-vue'
import { InertiaProgress } from '@inertiajs/progress/src'
import Vue from 'vue'
import PortalVue from 'portal-vue';
import VueMeta from 'vue-meta'

import './bootstrap'

InertiaProgress.init();
Vue.use(plugin);
Vue.use(VueMeta);
Vue.use(PortalVue);
Vue.prototype.$route = (...args) => route(...args).url();

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

