import "./bootstrap";
import "../css/app.css";

import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/vue3";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
import { ZiggyVue } from "../../vendor/tightenco/ziggy/dist/vue.m";

/* import the fontawesome core */
import { library } from "@fortawesome/fontawesome-svg-core";

import {
    faUserPlus,
    faEnvelope,
    faTrashAlt,
    faMessage,
    faUserSecret,
    faArrowLeft,
    faEdit,
    faEye,
    faHeartPulse,
    faPlus,
    faList,
    faGraduationCap,
    faBriefcase,
    faBriefcaseClock,
    faLightbulb,
    faScrewdriver,
    faScrewdriverWrench,
} from "@fortawesome/free-solid-svg-icons";
import {
    faLinkedinIn,
    faTwitter,
    faGithub,
    faFacebook,
    faInstagram,
    faPhp,
    faPython,
    faJs,
    faJava,
    faBootstrap,
    faVuejs,
    faLaravel,
    faAngular,
    faGitAlt,
    faGitlab,
} from "@fortawesome/free-brands-svg-icons";
// import {} from @fortawesome/t
/* add icons to the library */
library.add(
    faEye,
    faEdit,
    faArrowLeft,
    faUserPlus,
    faUserSecret,
    faMessage,
    faTrashAlt,
    faTwitter,
    faLinkedinIn,
    faGithub,
    faEnvelope,
    faHeartPulse,
    faPlus,
    faList,
    faGraduationCap,
    faBriefcase,
    faBriefcaseClock,
    faLightbulb,
    faFacebook,
    faInstagram,
    faScrewdriver,
    faScrewdriverWrench,
    faPhp,
    faPython,
    faJs,
    faJava,
    faBootstrap,
    faVuejs,
    faLaravel,
    faAngular,
    faGitAlt,
    faGitlab
);

import { dom } from "@fortawesome/fontawesome-svg-core";

dom.watch();

const appName =
    window.document.getElementsByTagName("title")[0]?.innerText || "Laravel";

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob("./Pages/**/*.vue")
        ),
    setup({ el, App, props, plugin }) {
        return (
            createApp({ render: () => h(App, props) })
                // .config.globalProperties.$route(route)
                .use(plugin)
                .use(ZiggyVue, Ziggy)
                .mount(el)
        );
    },
    progress: {
        color: "#4B5563",
    },
});
