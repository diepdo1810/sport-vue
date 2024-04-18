<template>
    <div class="col-lg-3 sidebar-section-container">
        <TopLeagues></TopLeagues>
        <TopTeams></TopTeams>
    </div>
</template>
<script>
import TopLeagues from "../sidebar/TopLeagues.vue";
import TopTeams from "../sidebar/TopTeams.vue";
export default {
    name: "BaseSideBar",
    components: {
        TopLeagues,
        TopTeams,
    },
};
</script>
