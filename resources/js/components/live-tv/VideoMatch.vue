<template>
    <div class="live-tv mb-4 lg-mb-32px">
        <div class="group">
            <div class="d-flex align-items-center mb-3 gap-3">
                <div class="icon-live">
                    <div class="position-relative pe-3 ps-2">
                        <div class="circle"></div>
                    </div>
                    <div class="text-wrapper">Live</div>
                </div>
                <img class="union" src="assets/images/live/union.png" />
            </div>
            <div class="mb-3">
                <div class="fs-18 md-fs-24 lg-fs-32 fw-600 mb-2">
                    Manchester City vs Manchester United
                </div>
                <div class="fs-14 md-fs-16">
                    The FA Cup final at Wembley Stadium | 13:00 GMT+
                </div>
            </div>
        </div>
        <div class="overlap-group-wrapper">
            <div class="overlap-group">
                <video
                    width="100%"
                    height="auto"
                    controls
                    style="aspect-ratio: 16 / 8"
                >
                    <source
                        src="assets/images/live/video-demo.mp4"
                        type="video/mp4"
                    />
                </video>
            </div>
        </div>
    </div>
</template>
