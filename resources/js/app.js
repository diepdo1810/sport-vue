import "./bootstrap";

import { createApp } from "vue";
import App from "./App.vue";
import TheHeader from "./components/layouts/TheHeader.vue";
import TheFooter from "./components/layouts/TheFooter.vue";
import BaseSideBar from "./components/UI/BaseSideBar.vue";
import BaseBanner from "./components/UI/BaseBanner.vue";
import BaseBody from "./components/UI/BaseBody.vue";
import BaseHighLight from "./components/UI/BaseHighLight.vue";
import BaseSubHead from "./components/UI/BaseSubHead.vue";
import BaseFixture from "./components/UI/BaseFixture.vue";
import BaseLiveMatch from "./components/UI/BaseLiveMatch.vue";
import BaseHighLightMatch from "./components/UI/BaseHighLightMatch.vue";
import TheSpace from "./components/layouts/TheSpace.vue";
import BasePayment from "./components/UI/BasePayment.vue";

const app = createApp(App);
app.component("app", App);

// layouts
app.component("the-header", TheHeader);
app.component("the-footer", TheFooter);
app.component("the-space", TheSpace);
// UI
app.component("base-side-bar", BaseSideBar);
app.component("base-banner", BaseBanner);
app.component("base-body", BaseBody);
app.component("base-high-light", BaseHighLight);
app.component("base-sub-head", BaseSubHead);
app.component("base-fixture", BaseFixture);
app.component("base-live-match", BaseLiveMatch);
app.component("base-high-light-match", BaseHighLightMatch);
app.component("base-payment", BasePayment);

app.mount("#app");
