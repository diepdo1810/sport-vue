<template>
    <the-header></the-header>
    <base-banner></base-banner>
    <live-now></live-now>
    <div class="row">
        <base-side-bar></base-side-bar>
        <base-high-light></base-high-light>
    </div>
    <the-footer></the-footer>
</template>

<script>
import BaseBanner from "./components/UI/BaseBanner.vue";
import BaseSideBar from "./components/UI/BaseSideBar.vue";
import LiveNow from "./components/actions/LiveNow.vue";
import BaseHighLight from "./components/UI/BaseHighLight.vue";
export default {
    name: "App",
    components: {
        BaseHighLight,
        BaseSideBar,
        BaseBanner,
        LiveNow,
    },
    data() {
        return {
            isLogin: false,
        };
    },
    methods: {
        checkLogin() {
            this.isLogin = localStorage.getItem("token") !== null;
        },
    },
    created() {
        this.checkLogin();
    },
};
</script>
