<template>
    <div class="col-12 col-lg-9">
        <trending-matches></trending-matches>
        <upcoming-schedule></upcoming-schedule>
    </div>
</template>
<script>
import TrendingMatches from "../high-light/TrendingMatches.vue";
import UpcomingSchedule from "../high-light/UpcomingSchedule.vue";
export default {
    name: "BaseHighLight",
    components: {
        TrendingMatches,
        UpcomingSchedule,
    },
};
</script>
