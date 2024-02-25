import './bootstrap';
import '../css/app.css';

import '../src/js/vendor/modernizr-3.5.0.min.js';
import '../src/js/vendor/jquery-1.12.4.min.js';

// import '../src/js/popper.min.js'

import '../src/js//bootstrap.min.js';
import '../src/js/owl.carousel.min.js';
import '../src/js/slick.min.js';
import '../src/js/jquery.slicknav.min.js';

// import '../src/js/wow.min.js'

import '../src/js/jquery.magnific-popup.js';
import '../src/js/jquery.nice-select.min.js';
import '../src/js/jquery.counterup.min.js';

// import '../src/js/waypoints.min.js'

import '../src/js/gijgo.min.js';
import '../src/js/contact.js';
import '../src/js/jquery.form.js';
import '../src/js/jquery.validate.min.js';
import '../src/js/mail-script.js';
import '../src/js/jquery.ajaxchimp.min.js';

import '../src/js/plugins.js';
// import '../src/js/main.js'

import 'https://www.googletagmanager.com/gtag/js?id=UA-23581568-13';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});

