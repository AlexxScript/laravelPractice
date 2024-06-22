import './bootstrap';
import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import Layout from './layouts/Layout.vue';

createInertiaApp({
  resolve: name => {
    // const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    // let page = pages[`./Pages/${name}.vue`]
    // page.default.layout = page.default.layout || Layout
    // return page
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    return pages[`./Pages/${name}.vue`]
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .mount(el)
  },
})