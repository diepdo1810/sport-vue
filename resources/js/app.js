import "./bootstrap";

import { createApp } from "vue";
import App from "./App.vue";
import axios from "axios";
import router from "./router";
import TheHeader from "./components/layouts/TheHeader.vue";
import TheFooter from "./components/layouts/TheFooter.vue";

const app = createApp(App);
app.config.globalProperties.axios = axios;
app.use(router);

// layouts
app.component("the-header", TheHeader);
app.component("the-footer", TheFooter);

app.mount("#app");
