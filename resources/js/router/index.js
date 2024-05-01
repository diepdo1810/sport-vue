import { createWebHistory, createRouter } from "vue-router";
import App from "../App.vue";

export const routes = [
    {
        path: "/",
        name: "home",
        component: App,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes: routes,
});

export default router;
