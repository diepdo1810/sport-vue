import { createWebHistory, createRouter } from "vue-router";
import App from "../App.vue";
// import Fixtures from "../pages/Fixtures.vue";
// import Highlights from "../pages/Highlights.vue";
// import LiveTv from "../pages/LiveTv.vue";
// import Pricing from "../pages/Pricing.vue";

export const routes = [
    {
        path: "/",
        name: "home",
        component: App,
    },
    /** Routes ....
    {
        path: "/fixtures",
        name: "fixtures",
        component: Fixtures,
    },
    {
        path: "/highlights",
        name: "highlights",
        component: Highlights,
    },
    {
        path: "/live-tv",
        name: "live-tv",
        component: LiveTv,
    },
    {
        path: "/pricing",
        name: "pricing",
        component: Pricing,
    }, **/
];

const router = createRouter({
    history: createWebHistory(),
    routes: routes,
});

export default router;
