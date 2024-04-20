<template>
    <div class="row">
        <base-side-bar></base-side-bar>
        <component :is="selectedBody"></component>
    </div>
</template>

<script>
export default {
    name: "BaseBody",
    components: {},
    data() {
        return {
            selectedBody: "base-high-light",
            routes: ["/", "/fixtures", "/highlights"],
        };
    },
    mounted() {
        this.showComponent();
    },
    methods: {
        showComponent() {
            // get route path
            const path = window.location.pathname;
            // if path = route fixtures
            if (
                this.routes.indexOf("/fixtures") !== -1 &&
                path === "/fixtures"
            ) {
                this.selectedBody = "base-fixture";
            } else if (
                this.routes.indexOf("/highlights") !== -1 &&
                path === "/highlights"
            ) {
                this.selectedBody = "base-high-light-match";
            } else {
                this.selectedBody = "base-high-light";
            }
        },
    },
};
</script>
