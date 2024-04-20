<template>
    <div class="step-2">
        <div class="step-2-left col-7">
            <div class="heading mb-3 gap-3">
                <span class="step-indicator step-2-indicator">2</span>
                <span class="">Choose your method of payment</span>
            </div>
            <div class="sercure mr-70px-nagtiave">
                <span class="secure-text line-height-18 fw-normal">
                    <img
                        src="http://127.0.0.1:8080/assets/images/icon/security.png"
                        alt="security"
                        class="ms-2"
                        width="19"
                    />
                    Secure checkout
                </span>
                |
                <span class="line-height-18 fw-normal">
                    your payment information is protected
                </span>
            </div>
            <div
                class="mr-70px-nagtiave select-payment chosse-payment d-flex justify-content-between mt-3"
            >
                <div class="checkbox checkbox-danger">
                    <input
                        type="radio"
                        name="radio4"
                        id="radio7"
                        value="option3"
                        checked=""
                    />
                    <label for="radio7">
                        <span>Paypal</span>
                    </label>
                </div>
                <div class="images">
                    <img
                        src="assets/images/icon/ico-paypal-text.png"
                        alt="paypal"
                    />
                </div>
            </div>
            <div
                class="mr-70px-nagtiave select-payment d-flex justify-content-between mt-3"
            >
                <div class="checkbox checkbox-danger">
                    <input
                        type="radio"
                        name="radio4"
                        id="radio8"
                        value="option3"
                    />
                    <label for="radio8">
                        <span>Credit Card</span>
                    </label>
                </div>
                <div class="images">
                    <img
                        src="assets/images/icon/ico-mastercard-square.png"
                        alt="mastercard"
                    />
                    <img
                        src="assets/images/icon/ico-visal-square.png"
                        alt="visal"
                    />
                    <img
                        src="assets/images/icon/ico-jcb-square.png"
                        alt="jcb"
                    />
                </div>
            </div>
            <div
                class="mr-70px-nagtiave select-payment d-flex justify-content-between mt-3"
            >
                <div class="checkbox checkbox-danger">
                    <input
                        type="radio"
                        name="radio4"
                        id="radio9"
                        value="option3"
                    />
                    <label for="radio9">
                        <span>Digital Coins</span>
                    </label>
                </div>
                <div class="images">
                    <img
                        src="assets/images/icon/ico-coin-light.png"
                        alt="coin"
                    />
                    <img
                        src="assets/images/icon/ico-btc-circle.png"
                        alt="btc"
                    />
                    <img src="assets/images/icon/ico-eth.png" alt="ico-eth" />
                </div>
            </div>
            <form class="mr-70px-nagtiave card-form d-none mt-3">
                <div class="card-info mb-4">
                    <div class="mb-3">
                        <label for="nameOnCard" class="form-label text-primary"
                            >Name on card:</label
                        >
                        <div class="input-group">
                            <input
                                type="text"
                                class="form-control text-primary-input"
                                id="nameOnCard"
                                placeholder="Esther Howard"
                                aria-label="Esther Howard"
                                aria-describedby="nameOnCardIcon"
                                style="
                                    background-image: url('assets/images/icon/profile-tick.png');
                                "
                            />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="cardNumber" class="form-label text-primary"
                            >Card number:</label
                        >
                        <div class="input-group">
                            <input
                                type="text"
                                class="form-control text-primary-input"
                                id="cardNumber"
                                placeholder="123-456-789-"
                                aria-label="123-456-789-"
                                aria-describedby="cardNumberIcon"
                                style="
                                    background-image: url('assets/images/icon/card.png');
                                "
                            />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label
                                for="expiryDate"
                                class="form-label text-primary"
                                >Expiry date:</label
                            >
                            <div class="input-group">
                                <input
                                    type="text"
                                    class="form-control text-primary-input"
                                    id="expiryDate"
                                    placeholder="MM / YY"
                                    aria-label="MM / YY"
                                    aria-describedby="expiryDateIcon"
                                    style="
                                        background-image: url('assets/images/icon/calendar-tick.png');
                                    "
                                />
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="ccv" class="form-label">CCV:</label>
                            <div class="input-group">
                                <input
                                    type="password"
                                    class="form-control text-primary-input"
                                    id="ccv"
                                    placeholder="•••"
                                    aria-label="CCV"
                                    aria-describedby="ccvIcon"
                                />
                                <div class="input-group-text" id="ccvIcon">
                                    <span class="hide-password">
                                        <i class="fa fa-eye-slash me-2"></i>
                                    </span>
                                    <span class="show-password d-none">
                                        <i class="fa fa-eye me-2"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <form class="mr-70px-nagtiave card-form currency-form d-none">
                <div class="d-flex me-4 mt-3">
                    <div class="col-7 select-currency-text">
                        Digital currency payment :
                    </div>
                    <div class="col-5 select-currency-right">
                        <div class="dropdown form-currency">
                            <a
                                class="btn btn-secondary dropdown-toggle select-currency"
                                href="#"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                <img
                                    src="http://127.0.0.1:8080/assets/images/icon/bit-coin.png"
                                    alt="bit-coin"
                                    class="me-2"
                                />Bitcoin (BTC)
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item"
                                        ><img
                                            src="http://127.0.0.1:8080/assets/images/icon/bit-coin.png"
                                            alt="bit-coin"
                                            class="me-2"
                                        />Bitcoin (BTC)</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item"
                                        ><img
                                            src="http://127.0.0.1:8080/assets/images/icon/bit-coin.png"
                                            alt="bit-coin"
                                            class="me-2"
                                        />Bitcoin (BTC)</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item"
                                        ><img
                                            src="http://127.0.0.1:8080/assets/images/icon/bit-coin.png"
                                            alt="bit-coin"
                                            class="me-2"
                                        />Bitcoin (BTC)</a
                                    >
                                </li>
                            </ul>
                            <ul class="dropdown-menu"></ul>
                        </div>
                    </div>
                </div>
                <hr class="border-bottom-currency" />
                <div class="d-flex me-4">
                    <div class="col-7 select-currency-text">
                        Amount : 0.0002249
                    </div>
                    <div class="col-5">
                        <div class="input-group justify-content-end fs-18 ms-4">
                            $6.50
                        </div>
                    </div>
                </div>
                <hr class="border-bottom-currency" />
                <div class="d-flex me-4">
                    <div class="col-11 select-currency-text">
                        Send To Address : XisfsJ3ysd97ssvoijoi
                    </div>
                    <div class="col-1 copy-address ms-4" id="copy">
                        <img
                            src="http://127.0.0.1:8080/assets/images/icon/copy.png"
                            alt="copy"
                            class="ms-3"
                        />
                    </div>
                </div>
                <hr class="border-bottom-currency" />
            </form>
            <div class="mr-70px-nagtiave payment-infomation mt-3">
                <div class="card-body payment-infomation-pc">
                    <div class="payment-info-left col-6">
                        <div
                            class="payment-hr d-flex justify-content-between my-2"
                        >
                            <span>3 month</span>
                            <span>US $72</span>
                        </div>
                        <div
                            class="payment-hr d-flex justify-content-between my-3"
                        >
                            <span>Promotion 30%</span>
                            <span class="text-promotion">-US $22</span>
                        </div>
                        <div
                            class="payment-hr d-flex justify-content-between my-3"
                        >
                            <span>Total</span>
                            <span class="text-primary fw-600">US $50</span>
                        </div>
                        <div class="input-group voucher-payment mb-3">
                            <div
                                class="voucher-text line-height-24 me-3 font-normal"
                            >
                                Voucher:
                            </div>
                            <input
                                type="text"
                                class="form-control voucher-input me-3"
                                placeholder="Enter your voucher"
                            />
                            <button
                                class="voucher-apply btn btn-outline-secondary"
                                type="button"
                            >
                                Apply
                            </button>
                        </div>
                    </div>
                    <div class="payment-info-right col-4">
                        <button class="btn btn-payment">Payment now</button>
                        <div class="terms">
                            By proceeding, you agree to our
                            <a href="#" class="terms-link" target="__blank"
                                >Terms of Service</a
                            >
                            and
                            <a href="#" class="terms-link" target="__blank"
                                >Privacy Policy</a
                            >.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="step-2-right col-4">
            <div class="vip-benefits">
                <h6>VIP BENEFITS</h6>
                <ul class="vip-benefits-menu">
                    <li>1. Cancel your account any time</li>
                    <li>2. 100% safe and secure</li>
                    <li>3. The membership renew automatically</li>
                    <li>4. Unlimited time</li>
                    <li>5. No ads/popups</li>
                    <li>6. Up to Full HD, 4k quality</li>
                    <li>7. English commentary</li>
                    <li>8. 20+ live sports channels</li>
                    <li>9. Global CDN for fastest live streaming</li>
                </ul>
            </div>
        </div>
    </div>
</template>
