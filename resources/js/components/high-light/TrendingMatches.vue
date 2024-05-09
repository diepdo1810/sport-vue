<template>
    <div class="highlight-container lg-mb-32px mb-4">
        <div
            class="highlight-header d-flex justify-content-between align-items-center"
        >
            <div class="trending-text d-flex align-items-center gap-2">
                <div>
                    <span class="home-trending">Hot Trending</span> Matches
                </div>
            </div>
        </div>
        <div class="d-flex flex-column gap-1" v-for="fixture in fixtures" :key="fixture.id">
            <a
                class="d-flex match-header list-matches w-100"
                href="/live-active"
            >
                <div class="d-none xl-d-block">
                    <div class="td-fix-width d-flex position-relative gap-4">
                        <div class="d-flex times-matches flex-wrap">
                            <div class="date-time fs-16">{{ fixture.date }}<div>
                            <div class="league fs-14">{{ fixture.league }}</div>
                        </div>
                    </div>
                </div>
                    </div>
                    <div class="d-flex align-items-center td-info">
                        <div class="d-block xl-d-none text-center">
                        <div class="date-time fs-12 lg-fs-14">
                            {{ fixture.date }}
                        </div>
                        <div class="league fs-12 lg-fs-14">
                            {{ fixture.league }}
                        </div>
                    </div>
                        <div class="mx-auto xl:grow">
                        <div
                            class="align-items-center teams-info matches-hot grid"
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
                                <span class="">{{ fixture.goals.home }} - {{ fixture.goals.away }}</span>
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
                                    >{{ fixture.teams.away }}
                                </span>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="d-none xl-d-block">
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
    name: 'TrendingMatches',
    data() {
        return {
            fixtures: [],
        }
    },
    mounted() {
        // get fixtures
        if (localStorage.getItem('fixtures')) {
            this.fixtures = JSON.parse(localStorage.getItem('fixtures'))
        } else {
            this.fetchFixtures()
        }
    },
    methods: {
        fetchFixtures() {
            // get api from backend
            axios
                .get('/api/v1/fixtures')
                .then((response) => {
                    this.fixtures = response.data.data.fixtures
                    // save cache
                    localStorage.setItem('fixtures', JSON.stringify(this.fixtures))
                    console.log(this.fixtures)
                })
                .catch((error) => {
                    console.log(error)
                })
        },
    },
}

</script>
