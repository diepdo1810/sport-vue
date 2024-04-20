<template>
    <the-header></the-header>
    <div v-if="isHome">
        <base-banner></base-banner>
        <base-sub-head></base-sub-head>
        <base-body></base-body>
    </div>
    <div v-else-if="isPayment">
        <base-payment></base-payment>
    </div>
    <div v-else>
        <base-live-match></base-live-match>
    </div>
    <the-footer></the-footer>
</template>

<script>
export default {
    data() {
        return {
            isLive: false,
            isPayment: false,
            isHome: false,
        };
    },
    mounted() {
        this.checkLive();
    },
    methods: {
        checkLive() {
            // check if the current route is live
            if (window.location.pathname === "/live-tv") {
                this.isLive = !this.isLive;
            } else if (window.location.pathname === "/payment") {
                this.isPayment = !this.isPayment;
            } else {
                this.isHome = !this.isHome;
            }

            console.log(this.isLive, this.isPayment);
        },
    },
};
</script>
