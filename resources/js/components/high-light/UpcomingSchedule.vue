<template>
    <div class="highlight-container lg-mb-32px mb-4" v-if="fixtures.count !== 0">
        <div class="highlight-header">
            <span class="trending-text">Upcoming Schedule</span>
        </div>
        <div class="d-flex flex-column gap-1">
            <a
                class="d-flex match-header list-matches w-100"
                href="/live-active"
                v-for="fixture in fixtures" :key="fixture.id"
            >
                <div>
                    <div class="d-flex align-items-center gap-4">
                        <div class="status-matches">
                            <span class="text-white">{{ fixture.status }}</span>
                        </div>
                        <div
                            class="td-fix-width d-flex position-relative gap-4"
                        >
                            <div class="d-flex times-matches flex-wrap">
                                <div class="date-time fs-16">{{ fixture.date }}</div>
                                <div class="league fs-14">{{ fixture.league }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center td-info">
                    <div class="d-block xl- text-center">
                        <div class="date-time fs-12 lg-fs-14">
                            {{ fixture.date }}
                        </div>
                        <div class="league fs-12 lg-fs-14">
                            {{ fixture.league }}
                        </div>
                    </div>
                    <div class="mx-auto xl:grow">
                        <div
                            class="align-items-center teams-info grid text-white"
                        >
                            <div
                                class="d-flex align-items-center justify-content-end name-team text-center"
                            >
                                <img
                                    :alt="fixture.teams.home"
                                    :src="fixture.teams.logo_home"
                                    class="logo order-1"
                                />
                                <span class="name home-team d-inline-block"
                                    >{{ fixture.teams.home }}</span
                                >
                            </div>
                            <div
                                class="justify-content-center align-items-center d-flex"
                            >
                                <span class="">vs</span>
                            </div>
                            <div
                                class="d-flex align-items-center justify-content-start name-team text-center"
                            >
                                <img
                                    :alt="fixture.teams.away"
                                    :src="fixture.teams.logo_away"
                                    class="logo"
                                />
                                <span class="name away-team d-inline-block"
                                    >{{ fixture.teams.away }}</span
                                >
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div
                        class="button-view td-fix-width d-flex justify-content-end"
                    >
                        <button
                            class="view-button btn btn-primary"
                            href="/live-active"
                        >
                            View
                        </button>
                    </div>
                </div>
            </a>
        </div>
    </div>
</template>

<script>
export default {
    name: "ListMatches",
    data() {
        return {
            fixtures: [],
        }
    },
    mounted() {
        this.getFixtures();
    },
    methods: {
        getFixtures() {
            axios.get("/api/v1/fixtures", {
                params: {
                    status: "NS-PST",
                },
            })
                .then((response) => {
                this.fixtures = response.data.data;
                console.log(this.fixtures.count);
            });
        },
    },
}
</script>
