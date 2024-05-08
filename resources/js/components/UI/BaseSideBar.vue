<template>
    <div class="col-lg-3 sidebar-section-container">
        <TopTeams></TopTeams>
    </div>
</template>
<script>
import TopTeams from "../sidebar/TopTeams.vue";
export default {
    name: "BaseSideBar",
    components: {
        TopTeams,
    },
};
</script>
