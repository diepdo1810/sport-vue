<template>
    <the-header></the-header>
    <base-banner></base-banner>
    <base-side-bar></base-side-bar>
    <the-footer></the-footer>
</template>

<script>
import BaseBanner from "./components/UI/BaseBanner.vue";
import BaseSideBar from "./components/UI/BaseSideBar.vue";
export default {
    name: "App",
    components: {
        BaseSideBar,
        BaseBanner,
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
