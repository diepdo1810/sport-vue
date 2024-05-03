<template>
    <div class="sidebar-section">
        <h2>Teams</h2>
        <div class="sidebar-item" v-for="team in teams" :key="team.id">
            <img
                :src="team.team.logo"
                alt="icon"
                class="me-2"
            />
            <a href="/team-detail">{{ team.team.name }} </a>
        </div>
    </div>
</template>

<script>
export default {
    name: "TopTeams",
    data() {
        return {
            teams: []
        };
    },
    mounted() {
        // if local storage is empty, fetch teams
        const teams = localStorage.getItem('teams');
        if (!teams) {
            this.fetchTeams();
        }
    },
    computed: {
        // get teams from cache
        teams() {
            return JSON.parse(localStorage.getItem('teams')) || [];
        }
    },
    methods: {
        fetchTeams() {
            // get api from backend
            axios.get('/api/v1/teams')
                .then(response => {
                    this.teams = response.data.data.teams;
                    // save cache
                    localStorage.setItem('teams', JSON.stringify(this.teams));
                    console.log(this.teams);
                }).catch(error => {
                    console.log(error);
                });
        }
    }
};
</script>
