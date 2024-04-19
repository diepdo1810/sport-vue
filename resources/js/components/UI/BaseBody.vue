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
            selectedBody: 'base-high-light',
            routes: [
                '/',
                '/fixtures',
            ],
        }
    },
    mounted() {
        this.showComponent();
    },
    methods: {
        showComponent() {
            // get route path
            const path = window.location.pathname;
            // if path = route fixtures
            if (this.routes.indexOf('/fixtures') !== -1 && path === '/fixtures') {
                console.log('fixtures');
                this.selectedBody = '';
            } else {
                console.log('home');
                this.selectedBody = 'base-high-light';
            }
        },
    },
};
</script>
