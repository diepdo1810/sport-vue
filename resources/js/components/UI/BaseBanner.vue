<template>
    <div
        id="carouselExampleInterval"
        class="carousel slide banner mb-3"
        data-bs-ride="carousel"
    >
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img :src="image" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img :src="image" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
                <img :src="image" class="d-block w-100" alt="..." />
            </div>
        </div>
        <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev"
        >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleInterval"
            data-bs-slide="next"
        >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</template>

<script>
export default {
    name: "BaseBanner",
    data() {
        return {
            image: "https://res.cloudinary.com/dclj4svib/image/upload/v1715237415/sport-vue/Logo-V1.png",
        };
    },
};
</script>
