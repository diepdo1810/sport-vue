<template>
    <nav class="navbar-pc d-none lg-d-block navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img :src="logo" alt="logo" />
            </a>
            <div class="navbar-collapse collapse" id="navbarNav">
                <ul class="navbar-nav mb-lg-0 mb-2 ms-auto">
                    <li class="nav-item">
                        <a class="nav-link hot-matches-color" href="/">
                            Hot Matches
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/fixtures"> Fixtures </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/live-tv"> Live TV </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/highlights"> Highlights </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/payment"> Pricing </a>
                    </li>
                </ul>
                <button
                    class="btn btn-unset btn-linear fs-14 ms-5"
                    type="submit"
                >
                    Go Premium
                </button>
                <button
                    class="module-border-wrap ms-3"
                    data-bs-toggle="modal"
                    data-bs-target="#modalSignin"
                >
                    <div class="module">
                        <div class="nav-link fs-14">Login</div>
                    </div>
                </button>
            </div>
        </div>
    </nav>

    <nav class="navbar-mb d-block lg-d-none navbar navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img :src="logo" alt="logo" />
            </a>
            <div class="login-mb d-flex">
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div
                class="navbar-collapse collapse px-3"
                id="navbarSupportedContent"
            >
                <ul class="navbar-nav mb-lg-0 mb-2 me-auto">
                    <li class="nav-item">
                        <a
                            class="nav-link active fs-14"
                            aria-current="page"
                            href="#"
                            >Hot Matches</a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-14" href="/fixtures">Fixtures</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-14" href="/live-tv">Live TV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-14" href="/highlights"
                            >Highlights</a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-14" href="/payment">Pricing</a>
                    </li>
                </ul>
                <hr class="hr-custom" />

                <form class="d-none" role="search">
                    <input
                        class="form-control me-2"
                        type="search"
                        placeholder="Search"
                        aria-label="Search"
                    />
                    <button class="btn btn-outline-success" type="submit">
                        Search
                    </button>
                </form>
            </div>
        </div>
    </nav>
</template>
<script>
export default {
    name: "TheHeader",
    data() {
        return {
            isLogin: false,
            logo: "https://res.cloudinary.com/dclj4svib/image/upload/v1714548958/sport-vue/logo_yb60no.png",
        };
    },
};
</script>
