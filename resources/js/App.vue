<template>
    <the-header></the-header>
    <base-banner></base-banner>
    <the-footer></the-footer>
</template>

<script>
import BaseBanner from "./components/UI/BaseBanner.vue";
export default {
    name: "App",
    components: {
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
