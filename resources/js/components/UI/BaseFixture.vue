<template>
    <div class="col-12 col-lg-9">
        <fixture-match></fixture-match>
    </div>
</template>

<script>
import FixtureMatch from "../high-light/FixtureMatch.vue";
export default {
    name: "BaseFixture",
    components: {
        FixtureMatch,
    },
};
</script>
