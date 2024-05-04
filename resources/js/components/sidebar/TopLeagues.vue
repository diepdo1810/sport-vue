<template>
    <div class="sidebar-section" v-if="leagues">
        <h2>Top leagues</h2>
        <div class="sidebar-item" v-for="league in leagues" :key="league.id">
            <img
                :src="league.flag"
                alt="country flag"
                class="me-2"
            />

            <a href="/league-detail">
                {{ league.name }}
            </a>
            <img
                :src="league.logo"
                alt="league logo"
                class="me-2 show-logo">
        </div>
    </div>
</template>

<style scoped>
.sidebar-section {
    overflow-y: scroll;
    margin-bottom: 20px;
    height: calc(100vh - 100px);
}
.show-logo {
    display: none;
}
.sidebar-item:hover .show-logo {
    display: block;
    margin-left: 10px;
    width: 100%;
    height: 100%;
}
</style>

<script>
export default {
    name: "TopLeagues",
    data() {
        return {
            leagues: [],
            showLogo: false,
        };
    },
    mounted() {
        // if local storage is empty, fetch leagues
        const leagues = localStorage.getItem("leagues");
        if (!leagues) {
            this.fetchLeagues();
        } else {
            this.leagues = JSON.parse(leagues);
        }
    },
    methods: {
        fetchLeagues() {
            axios.get("/api/v1/leagues").then((response) => {
                this.leagues = response.data.data.leagues;
                // save cache
                localStorage.setItem("leagues", JSON.stringify(this.leagues));
            }).catch((error) => {
                console.log(error);
            });
        },
        // hover effect show league logo
        showLeagueLogo(league) {
            this.showLogo = true;
            this.league = league;
        },
    }
};
</script>


