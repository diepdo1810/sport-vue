<template>
    <section class="pb-3 pt-3">
        <div class="container">
            <div class="row d-flex justify-content-end">
                <div class="live-search">
                    <div class="row lg-mb-32px mb-3">
                        <div class="col-2 col-xl-6">
                            <a href="/live-now" class="icon-live">
                                <div class="position-relative pe-3 ps-2">
                                    <div class="circle"></div>
                                </div>
                                <div class="text-wrapper">Live</div>
                            </a>
                        </div>
                        <div class="col-10 col-xl-6 pr-0">
                            <div class="col-11 col-xl-8 float-end">
                                <div class="input-group">
                                    <input
                                        class="form-control border-end-0 border"
                                        type="search"
                                        value="Type to search..."
                                        id="search-input"
                                    />
                                    <span
                                        class="input-group-append"
                                        id="icon-search"
                                    >
                                        <button
                                            class="btn btn-outline-secondary border-start-0 border-bottom-0 ms-n5 btn-border-none border"
                                            type="button"
                                        >
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 live-now">
                    <div
                        class="live-header d-flex justify-content-between align-items-center"
                    >
                        <div class="trending-text">
                            <span class="home-trending">LIVE </span> NOW! (<span
                                class="home-trending"
                                >9</span
                            >)
                        </div>
                        <span
                            class="see-all fs-14 d-flex align-items-center gap-1"
                        >
                            <a
                                href="#"
                                class="fw-500 text-white"
                                target="_blank"
                                >See all</a
                            >
                            <img
                                src="http://127.0.0.1:8080/assets/images/icon/icon_arow_down.png"
                                alt="trending"
                                class="mb-1"
                        /></span>
                    </div>
                    <div class="arrow-left">
                        <a
                            class="mb-3"
                            href="#carouselExampleIndicators2"
                            role="button"
                            data-slide="next"
                        >
                            <img
                                src="http://127.0.0.1:8080/assets/images/icon/arrow.png"
                                alt="arrow"
                            />
                        </a>
                    </div>
                    <div
                        id="carouselExampleIndicators2"
                        class="carousel slide"
                        data-ride="carousel"
                    >
                        <div class="carousel-inner">
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-4 col-xxl-3 mb-3">
                                        <div class="card live-container">
                                            <div
                                                class="card-body row justify-content-between"
                                            >
                                                <div class="live-left col-8">
                                                    <div class="fs-14 mb-2">
                                                        ICC T20 WC | Cricket
                                                    </div>
                                                    <div class="live-team">
                                                        <div class="fs-14 mb-2">
                                                            <img
                                                                src="http://127.0.0.1:8080/assets/images/icon/tot.png"
                                                                alt="icon"
                                                                class="me-2"
                                                                width="16"
                                                            />
                                                            Tottenham Hotspur
                                                        </div>
                                                        <div class="fs-14">
                                                            <img
                                                                src="http://127.0.0.1:8080/assets/images/icon/mu_terms.png"
                                                                alt="icon"
                                                                class="me-2"
                                                                width="16"
                                                            />
                                                            Manchester United
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="live-right col-4">
                                                    <img
                                                        src="http://127.0.0.1:8080/assets/images/icon/live-streaming.png"
                                                        alt="live"
                                                        width="28"
                                                        class="text-align-end"
                                                    />
                                                    <div class="opcity-0 mb-2">
                                                        hidden
                                                    </div>
                                                    <div class="opcity-0 mb-2">
                                                        hidden
                                                    </div>
                                                    <button
                                                        href="/live-active"
                                                        class="btn btn-primary watch-button"
                                                    >
                                                        Watch
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 col-xxl-3 mb-3">
                                        <div class="card live-container">
                                            <div
                                                class="card-body row justify-content-between"
                                            >
                                                <div class="live-left col-8">
                                                    <div class="fs-14 mb-2">
                                                        ICC T20 WC | Cricket
                                                    </div>
                                                    <div class="live-team">
                                                        <div class="fs-14 mb-2">
                                                            <img
                                                                src="http://127.0.0.1:8080/assets/images/icon/tot.png"
                                                                alt="icon"
                                                                class="me-2"
                                                                width="16"
                                                            />
                                                            Tottenham Hotspur
                                                        </div>
                                                        <div class="fs-14">
                                                            <img
                                                                src="http://127.0.0.1:8080/assets/images/icon/mu_terms.png"
                                                                alt="icon"
                                                                class="me-2"
                                                                width="16"
                                                            />
                                                            Manchester United
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="live-right col-4">
                                                    <img
                                                        src="http://127.0.0.1:8080/assets/images/icon/live-streaming.png"
                                                        alt="live"
                                                        width="28"
                                                        class="text-align-end"
                                                    />
                                                    <div class="opcity-0 mb-2">
                                                        hidden
                                                    </div>
                                                    <div class="opcity-0 mb-2">
                                                        hidden
                                                    </div>
                                                    <button
                                                        href="/live-active"
                                                        class="btn btn-primary watch-button"
                                                    >
                                                        Watch
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 col-xxl-3 mb-3">
                                        <div class="card live-container">
                                            <div
                                                class="card-body row justify-content-between"
                                            >
                                                <div class="live-left col-8">
                                                    <div class="fs-14 mb-2">
                                                        ICC T20 WC | Cricket
                                                    </div>
                                                    <div class="live-team">
                                                        <div class="fs-14 mb-2">
                                                            <img
                                                                src="http://127.0.0.1:8080/assets/images/icon/tot.png"
                                                                alt="icon"
                                                                class="me-2"
                                                                width="16"
                                                            />
                                                            Tottenham Hotspur
                                                        </div>
                                                        <div class="fs-14">
                                                            <img
                                                                src="http://127.0.0.1:8080/assets/images/icon/mu_terms.png"
                                                                alt="icon"
                                                                class="me-2"
                                                                width="16"
                                                            />
                                                            Manchester United
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="live-right col-4">
                                                    <img
                                                        src="http://127.0.0.1:8080/assets/images/icon/live-streaming.png"
                                                        alt="live"
                                                        width="28"
                                                        class="text-align-end"
                                                    />
                                                    <div class="opcity-0 mb-2">
                                                        hidden
                                                    </div>
                                                    <div class="opcity-0 mb-2">
                                                        hidden
                                                    </div>
                                                    <button
                                                        href="/live-active"
                                                        class="btn btn-primary watch-button"
                                                    >
                                                        Watch
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 col-xxl-3 last mb-3">
                                        <div class="card live-container">
                                            <div
                                                class="card-body row justify-content-between"
                                            >
                                                <div class="live-left col-8">
                                                    <div class="fs-14 mb-2">
                                                        ICC T20 WC | Cricket
                                                    </div>
                                                    <div class="live-team">
                                                        <div class="fs-14 mb-2">
                                                            <img
                                                                src="http://127.0.0.1:8080/assets/images/icon/tot.png"
                                                                alt="icon"
                                                                class="me-2"
                                                                width="16"
                                                            />
                                                            Tottenham Hotspur
                                                        </div>
                                                        <div class="fs-14">
                                                            <img
                                                                src="http://127.0.0.1:8080/assets/images/icon/mu_terms.png"
                                                                alt="icon"
                                                                class="me-2"
                                                                width="16"
                                                            />
                                                            Manchester United
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="live-right col-4">
                                                    <img
                                                        src="http://127.0.0.1:8080/assets/images/icon/live-streaming.png"
                                                        alt="live"
                                                        width="28"
                                                        class="text-align-end"
                                                    />
                                                    <div class="opcity-0 mb-2">
                                                        hidden
                                                    </div>
                                                    <div class="mb-2 opacity-0">
                                                        hidden
                                                    </div>
                                                    <button
                                                        href="/live-active"
                                                        class="btn btn-primary watch-button"
                                                    >
                                                        Watch
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-4 col-xxl-3 mb-3">
                                        <div class="card live-container">
                                            <div
                                                class="card-body row justify-content-between"
                                            >
                                                <div class="live-left col-8">
                                                    <div class="fs-14 mb-2">
                                                        ICC T20 WC | Cricket
                                                    </div>
                                                    <div class="live-team">
                                                        <div class="fs-14 mb-2">
                                                            <img
                                                                src="http://127.0.0.1:8080/assets/images/icon/tot.png"
                                                                alt="icon"
                                                                class="me-2"
                                                                width="16"
                                                            />
                                                            Tottenham Hotspur
                                                        </div>
                                                        <div class="fs-14">
                                                            <img
                                                                src="http://127.0.0.1:8080/assets/images/icon/mu_terms.png"
                                                                alt="icon"
                                                                class="me-2"
                                                                width="16"
                                                            />
                                                            Manchester United
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="live-right col-4">
                                                    <img
                                                        src="http://127.0.0.1:8080/assets/images/icon/live-streaming.png"
                                                        alt="live"
                                                        width="28"
                                                        class="text-align-end"
                                                    />
                                                    <div class="opcity-0 mb-2">
                                                        hidden
                                                    </div>
                                                    <div class="opcity-0 mb-2">
                                                        hidden
                                                    </div>
                                                    <button
                                                        href="/live-active"
                                                        class="btn btn-primary watch-button"
                                                    >
                                                        Watch
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 col-xxl-3 mb-3">
                                        <div class="card live-container">
                                            <div
                                                class="card-body row justify-content-between"
                                            >
                                                <div class="live-left col-8">
                                                    <div class="fs-14 mb-2">
                                                        ICC T20 WC | Cricket
                                                    </div>
                                                    <div class="live-team">
                                                        <div class="fs-14 mb-2">
                                                            <img
                                                                src="http://127.0.0.1:8080/assets/images/icon/tot.png"
                                                                alt="icon"
                                                                class="me-2"
                                                                width="16"
                                                            />
                                                            Tottenham Hotspur
                                                        </div>
                                                        <div class="fs-14">
                                                            <img
                                                                src="http://127.0.0.1:8080/assets/images/icon/mu_terms.png"
                                                                alt="icon"
                                                                class="me-2"
                                                                width="16"
                                                            />
                                                            Manchester United
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="live-right col-4">
                                                    <img
                                                        src="http://127.0.0.1:8080/assets/images/icon/live-streaming.png"
                                                        alt="live"
                                                        width="28"
                                                        class="text-align-end"
                                                    />
                                                    <div class="opcity-0 mb-2">
                                                        hidden
                                                    </div>
                                                    <div class="opcity-0 mb-2">
                                                        hidden
                                                    </div>
                                                    <button
                                                        href="/live-active"
                                                        class="btn btn-primary watch-button"
                                                    >
                                                        Watch
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 col-xxl-3 mb-3">
                                        <div class="card live-container">
                                            <div
                                                class="card-body row justify-content-between"
                                            >
                                                <div class="live-left col-8">
                                                    <div class="fs-14 mb-2">
                                                        ICC T20 WC | Cricket
                                                    </div>
                                                    <div class="live-team">
                                                        <div class="fs-14 mb-2">
                                                            <img
                                                                src="http://127.0.0.1:8080/assets/images/icon/tot.png"
                                                                alt="icon"
                                                                class="me-2"
                                                                width="16"
                                                            />
                                                            Tottenham Hotspur
                                                        </div>
                                                        <div class="fs-14">
                                                            <img
                                                                src="http://127.0.0.1:8080/assets/images/icon/mu_terms.png"
                                                                alt="icon"
                                                                class="me-2"
                                                                width="16"
                                                            />
                                                            Manchester United
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="live-right col-4">
                                                    <img
                                                        src="http://127.0.0.1:8080/assets/images/icon/live-streaming.png"
                                                        alt="live"
                                                        width="28"
                                                        class="text-align-end"
                                                    />
                                                    <div class="opcity-0 mb-2">
                                                        hidden
                                                    </div>
                                                    <div class="opcity-0 mb-2">
                                                        hidden
                                                    </div>
                                                    <button
                                                        href="/live-active"
                                                        class="btn btn-primary watch-button"
                                                    >
                                                        Watch
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 col-xxl-3 last mb-3">
                                        <div class="card live-container">
                                            <div
                                                class="card-body row justify-content-between"
                                            >
                                                <div class="live-left col-8">
                                                    <div class="fs-14 mb-2">
                                                        ICC T20 WC | Cricket
                                                    </div>
                                                    <div class="live-team">
                                                        <div class="fs-14 mb-2">
                                                            <img
                                                                src="http://127.0.0.1:8080/assets/images/icon/tot.png"
                                                                alt="icon"
                                                                class="me-2"
                                                                width="16"
                                                            />
                                                            Tottenham Hotspur
                                                        </div>
                                                        <div class="fs-14">
                                                            <img
                                                                src="http://127.0.0.1:8080/assets/images/icon/mu_terms.png"
                                                                alt="icon"
                                                                class="me-2"
                                                                width="16"
                                                            />
                                                            Manchester United
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="live-right col-4">
                                                    <img
                                                        src="http://127.0.0.1:8080/assets/images/icon/live-streaming.png"
                                                        alt="live"
                                                        width="28"
                                                        class="text-align-end"
                                                    />
                                                    <div class="opcity-0 mb-2">
                                                        hidden
                                                    </div>
                                                    <div class="mb-2 opacity-0">
                                                        hidden
                                                    </div>
                                                    <button
                                                        href="/live-active"
                                                        class="btn btn-primary watch-button"
                                                    >
                                                        Watch
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-4 col-xxl-3 mb-3">
                                        <div class="card live-container">
                                            <div
                                                class="card-body row justify-content-between"
                                            >
                                                <div class="live-left col-8">
                                                    <div class="fs-14 mb-2">
                                                        ICC T20 WC | Cricket
                                                    </div>
                                                    <div class="live-team">
                                                        <div class="fs-14 mb-2">
                                                            <img
                                                                src="http://127.0.0.1:8080/assets/images/icon/tot.png"
                                                                alt="icon"
                                                                class="me-2"
                                                                width="16"
                                                            />
                                                            Tottenham Hotspur
                                                        </div>
                                                        <div class="fs-14">
                                                            <img
                                                                src="http://127.0.0.1:8080/assets/images/icon/mu_terms.png"
                                                                alt="icon"
                                                                class="me-2"
                                                                width="16"
                                                            />
                                                            Manchester United
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="live-right col-4">
                                                    <img
                                                        src="http://127.0.0.1:8080/assets/images/icon/live-streaming.png"
                                                        alt="live"
                                                        width="28"
                                                        class="text-align-end"
                                                    />
                                                    <div class="opcity-0 mb-2">
                                                        hidden
                                                    </div>
                                                    <div class="opcity-0 mb-2">
                                                        hidden
                                                    </div>
                                                    <button
                                                        href="/live-active"
                                                        class="btn btn-primary watch-button"
                                                    >
                                                        Watch
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 col-xxl-3 mb-3">
                                        <div class="card live-container">
                                            <div
                                                class="card-body row justify-content-between"
                                            >
                                                <div class="live-left col-8">
                                                    <div class="fs-14 mb-2">
                                                        ICC T20 WC | Cricket
                                                    </div>
                                                    <div class="live-team">
                                                        <div class="fs-14 mb-2">
                                                            <img
                                                                src="http://127.0.0.1:8080/assets/images/icon/tot.png"
                                                                alt="icon"
                                                                class="me-2"
                                                                width="16"
                                                            />
                                                            Tottenham Hotspur
                                                        </div>
                                                        <div class="fs-14">
                                                            <img
                                                                src="http://127.0.0.1:8080/assets/images/icon/mu_terms.png"
                                                                alt="icon"
                                                                class="me-2"
                                                                width="16"
                                                            />
                                                            Manchester United
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="live-right col-4">
                                                    <img
                                                        src="http://127.0.0.1:8080/assets/images/icon/live-streaming.png"
                                                        alt="live"
                                                        width="28"
                                                        class="text-align-end"
                                                    />
                                                    <div class="opcity-0 mb-2">
                                                        hidden
                                                    </div>
                                                    <div class="opcity-0 mb-2">
                                                        hidden
                                                    </div>
                                                    <button
                                                        href="/live-active"
                                                        class="btn btn-primary watch-button"
                                                    >
                                                        Watch
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 col-xxl-3 mb-3">
                                        <div class="card live-container">
                                            <div
                                                class="card-body row justify-content-between"
                                            >
                                                <div class="live-left col-8">
                                                    <div class="fs-14 mb-2">
                                                        ICC T20 WC | Cricket
                                                    </div>
                                                    <div class="live-team">
                                                        <div class="fs-14 mb-2">
                                                            <img
                                                                src="http://127.0.0.1:8080/assets/images/icon/tot.png"
                                                                alt="icon"
                                                                class="me-2"
                                                                width="16"
                                                            />
                                                            Tottenham Hotspur
                                                        </div>
                                                        <div class="fs-14">
                                                            <img
                                                                src="http://127.0.0.1:8080/assets/images/icon/mu_terms.png"
                                                                alt="icon"
                                                                class="me-2"
                                                                width="16"
                                                            />
                                                            Manchester United
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="live-right col-4">
                                                    <img
                                                        src="http://127.0.0.1:8080/assets/images/icon/live-streaming.png"
                                                        alt="live"
                                                        width="28"
                                                        class="text-align-end"
                                                    />
                                                    <div class="opcity-0 mb-2">
                                                        hidden
                                                    </div>
                                                    <div class="opcity-0 mb-2">
                                                        hidden
                                                    </div>
                                                    <button
                                                        href="/live-active"
                                                        class="btn btn-primary watch-button"
                                                    >
                                                        Watch
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 col-xxl-3 last mb-3">
                                        <div class="card live-container">
                                            <div
                                                class="card-body row justify-content-between"
                                            >
                                                <div class="live-left col-8">
                                                    <div class="fs-14 mb-2">
                                                        ICC T20 WC | Cricket
                                                    </div>
                                                    <div class="live-team">
                                                        <div class="fs-14 mb-2">
                                                            <img
                                                                src="http://127.0.0.1:8080/assets/images/icon/tot.png"
                                                                alt="icon"
                                                                class="me-2"
                                                                width="16"
                                                            />
                                                            Tottenham Hotspur
                                                        </div>
                                                        <div class="fs-14">
                                                            <img
                                                                src="http://127.0.0.1:8080/assets/images/icon/mu_terms.png"
                                                                alt="icon"
                                                                class="me-2"
                                                                width="16"
                                                            />
                                                            Manchester United
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="live-right col-4">
                                                    <img
                                                        src="http://127.0.0.1:8080/assets/images/icon/live-streaming.png"
                                                        alt="live"
                                                        width="28"
                                                        class="text-align-end"
                                                    />
                                                    <div class="opcity-0 mb-2">
                                                        hidden
                                                    </div>
                                                    <div class="mb-2 opacity-0">
                                                        hidden
                                                    </div>
                                                    <button
                                                        href="/live-active"
                                                        class="btn btn-primary watch-button"
                                                    >
                                                        Watch
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-4 col-xxl-3 mb-3">
                                        <div class="card live-container">
                                            <div
                                                class="card-body row justify-content-between"
                                            >
                                                <div class="live-left col-8">
                                                    <div class="fs-14 mb-2">
                                                        ICC T20 WC | Cricket
                                                    </div>
                                                    <div class="live-team">
                                                        <div class="fs-14 mb-2">
                                                            <img
                                                                src="http://127.0.0.1:8080/assets/images/icon/tot.png"
                                                                alt="icon"
                                                                class="me-2"
                                                                width="16"
                                                            />
                                                            Tottenham Hotspur
                                                        </div>
                                                        <div class="fs-14">
                                                            <img
                                                                src="http://127.0.0.1:8080/assets/images/icon/mu_terms.png"
                                                                alt="icon"
                                                                class="me-2"
                                                                width="16"
                                                            />
                                                            Manchester United
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="live-right col-4">
                                                    <img
                                                        src="http://127.0.0.1:8080/assets/images/icon/live-streaming.png"
                                                        alt="live"
                                                        width="28"
                                                        class="text-align-end"
                                                    />
                                                    <div class="opcity-0 mb-2">
                                                        hidden
                                                    </div>
                                                    <div class="opcity-0 mb-2">
                                                        hidden
                                                    </div>
                                                    <button
                                                        href="/live-active"
                                                        class="btn btn-primary watch-button"
                                                    >
                                                        Watch
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 col-xxl-3 mb-3">
                                        <div class="card live-container">
                                            <div
                                                class="card-body row justify-content-between"
                                            >
                                                <div class="live-left col-8">
                                                    <div class="fs-14 mb-2">
                                                        ICC T20 WC | Cricket
                                                    </div>
                                                    <div class="live-team">
                                                        <div class="fs-14 mb-2">
                                                            <img
                                                                src="http://127.0.0.1:8080/assets/images/icon/tot.png"
                                                                alt="icon"
                                                                class="me-2"
                                                                width="16"
                                                            />
                                                            Tottenham Hotspur
                                                        </div>
                                                        <div class="fs-14">
                                                            <img
                                                                src="http://127.0.0.1:8080/assets/images/icon/mu_terms.png"
                                                                alt="icon"
                                                                class="me-2"
                                                                width="16"
                                                            />
                                                            Manchester United
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="live-right col-4">
                                                    <img
                                                        src="http://127.0.0.1:8080/assets/images/icon/live-streaming.png"
                                                        alt="live"
                                                        width="28"
                                                        class="text-align-end"
                                                    />
                                                    <div class="opcity-0 mb-2">
                                                        hidden
                                                    </div>
                                                    <div class="opcity-0 mb-2">
                                                        hidden
                                                    </div>
                                                    <button
                                                        href="/live-active"
                                                        class="btn btn-primary watch-button"
                                                    >
                                                        Watch
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 col-xxl-3 mb-3">
                                        <div class="card live-container">
                                            <div
                                                class="card-body row justify-content-between"
                                            >
                                                <div class="live-left col-8">
                                                    <div class="fs-14 mb-2">
                                                        ICC T20 WC | Cricket
                                                    </div>
                                                    <div class="live-team">
                                                        <div class="fs-14 mb-2">
                                                            <img
                                                                src="http://127.0.0.1:8080/assets/images/icon/tot.png"
                                                                alt="icon"
                                                                class="me-2"
                                                                width="16"
                                                            />
                                                            Tottenham Hotspur
                                                        </div>
                                                        <div class="fs-14">
                                                            <img
                                                                src="http://127.0.0.1:8080/assets/images/icon/mu_terms.png"
                                                                alt="icon"
                                                                class="me-2"
                                                                width="16"
                                                            />
                                                            Manchester United
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="live-right col-4">
                                                    <img
                                                        src="http://127.0.0.1:8080/assets/images/icon/live-streaming.png"
                                                        alt="live"
                                                        width="28"
                                                        class="text-align-end"
                                                    />
                                                    <div class="opcity-0 mb-2">
                                                        hidden
                                                    </div>
                                                    <div class="opcity-0 mb-2">
                                                        hidden
                                                    </div>
                                                    <button
                                                        href="/live-active"
                                                        class="btn btn-primary watch-button"
                                                    >
                                                        Watch
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 col-xxl-3 last mb-3">
                                        <div class="card live-container">
                                            <div
                                                class="card-body row justify-content-between"
                                            >
                                                <div class="live-left col-8">
                                                    <div class="fs-14 mb-2">
                                                        ICC T20 WC | Cricket
                                                    </div>
                                                    <div class="live-team">
                                                        <div class="fs-14 mb-2">
                                                            <img
                                                                src="http://127.0.0.1:8080/assets/images/icon/tot.png"
                                                                alt="icon"
                                                                class="me-2"
                                                                width="16"
                                                            />
                                                            Tottenham Hotspur
                                                        </div>
                                                        <div class="fs-14">
                                                            <img
                                                                src="http://127.0.0.1:8080/assets/images/icon/mu_terms.png"
                                                                alt="icon"
                                                                class="me-2"
                                                                width="16"
                                                            />
                                                            Manchester United
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="live-right col-4">
                                                    <img
                                                        src="http://127.0.0.1:8080/assets/images/icon/live-streaming.png"
                                                        alt="live"
                                                        width="28"
                                                        class="text-align-end"
                                                    />
                                                    <div class="opcity-0 mb-2">
                                                        hidden
                                                    </div>
                                                    <div class="mb-2 opacity-0">
                                                        hidden
                                                    </div>
                                                    <button
                                                        href="/live-active"
                                                        class="btn btn-primary watch-button"
                                                    >
                                                        Watch
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
