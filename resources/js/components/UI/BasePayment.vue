<template>
    <div class="container">
        <div class="card-container price-payment">
            <step-payment1></step-payment1>
            <step-payment2></step-payment2>
        </div>
    </div>
</template>

<script>
import StepPayment1 from "../payment/StepPayment1.vue";
import StepPayment2 from "../payment/StepPayment2.vue";

export default {
    name: "BasePayment",
    components: {
        StepPayment1,
        StepPayment2,
    },
};
</script>
