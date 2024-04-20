<template>
    <video-match></video-match>
    <channel-match></channel-match>
</template>

<script>
import ChannelMatch from "../live-tv/ChannelMatch.vue";
import VideoMatch from "../live-tv/VideoMatch.vue";

export default {
    name: "BaseLiveMatch",
    components: {
        ChannelMatch,
        VideoMatch,
    },
    data() {
        return {};
    },
};
</script>
