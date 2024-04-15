import "./bootstrap";

import { createApp } from "vue";
import App from "./App.vue";
import TheHeader from "./components/layouts/TheHeader.vue";
import TheFooter from "./components/layouts/TheFooter.vue";
import BaseSideBar from "./components/UI/BaseSideBar.vue";

const app = createApp(App);
app.component("app", App);
app.component("the-header", TheHeader);
app.component("the-footer", TheFooter);
app.component("base-side-bar", BaseSideBar);
app.mount("#app");
