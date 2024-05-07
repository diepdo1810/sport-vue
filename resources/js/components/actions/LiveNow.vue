<template>
    <Carousel :wrap-around="true" :autoplay="2000">
        <Slide v-for="slide in 10" :key="slide">
            <div class="col-4 col-xxl-3 mb-3" v-for="fixture in fixtures" :key="fixture.id">
                <div class="card live-container">
                    <div class="card-body row justify-content-between" >
                        <div class="live-left col-8">
                            <div class="fs-14 mb-2">
                                {{ fixture.league }}
                            </div>
                            <div class="live-team">
                                <div class="fs-14 mb-2">
                                    <img :src="fixture.teams.logo_home" alt="icon" class="me-2" width="16">
                                    {{ fixture.teams.home }}
                                </div>
                                <div class="fs-14">
                                    <img :src="fixture.teams.logo_away" alt="icon" class="me-2" width="16">
                                    {{ fixture.teams.away }}
                                </div>
                            </div>
                        </div>
                        <div class="live-right col-4">
                            <div class="fs-14 mb-2">
                                {{ fixture.time }}
                            </div>
                            <div class="fs-14 mb-2">
                                {{ fixture.status.short }}
                            </div>
                            <div class="opcity-0 mb-2">hidden</div>
                            <div class="opcity-0 mb-2">hidden</div>
                            <button href="/live-active" class="btn btn-primary watch-button">Watch</button>
                        </div>
                    </div>
                </div>
            </div>
        </Slide>
    </Carousel>
</template>

<script>
import { defineComponent } from 'vue'
import { Carousel, Pagination, Slide } from 'vue3-carousel'

import 'vue3-carousel/dist/carousel.css'

export default defineComponent({
    name: 'Autoplay',
    components: {
        Carousel,
        Slide,
        Pagination,
    },
    data() {
        return {
            fixtures: [],
        }
    },
    mounted() {
        this.getFixtures()
    },
    methods: {
        getFixtures() {
            axios.get('/api/v1/fixtures')
                .then(response => {
                    this.fixtures = response.data.data.fixtures
                    console.log(this.fixtures)
                })
                .catch(error => {
                    console.log(error)
                })
        },
    },
})
</script>

<style scoped>
.carousel__slide {
    width: 100% !important;
}
</style>

