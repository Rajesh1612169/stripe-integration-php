<?php require "config.php"; ?>
<style>
    .StripeElement {
        box-sizing: border-box;

        padding: 12px 14px;

        height: 50px;

        border: 1px solid transparent;
        background-color: white;
        border-radius: 4px;


        box-shadow: 0 2px 6px 0 #e6ebf1;
        -webkit-transition: box-shadow 150ms ease;
        transition: box-shadow 160ms;
    }

    .StripeElement--focus {
        box-shadow: 0 2px 4px 0 #cff7df;
    }

    .StripeElement--invalid {
        border-color: #fa755a;
    }

    .StripeElement--webkit-autofill {
        background-color: #fefde5 !important;
    }
</style>
<!--<form action="submit.php" method="post">-->

<!--   -->
<!---->
<!--    <script src="https://checkout.stripe.com/checkout.js"-->
<!--            data-key = "--><?//= $publishable_key ?><!--"-->
<!--            data-amount = "5000"-->
<!--            data-name = "Rajesh Kumar"-->
<!--            data-description = "Programming with Rajesh"-->
<!--            data-image = ""-->
<!--            data-currency = "inr"-->
<!--    >-->
<!---->
<!--    </script>-->

    <script src="https://js.stripe.com/v3/"></script>
    <form action="submit.php" method="post" id="payment-form">
        <div class="form-row">
            <input type="text" name="amount" placeholder="Enter Amount">
            <label for="card-element">
                Credit or debit card
            </label>
            <div id="card-element">
                <!-- A Stripe Element will be inserted here. -->
            </div>

            <!-- Used to display form errors. -->
            <div id="card-errors" role="alert"></div>
        </div>
        <button>Submit Payment</button>
    </form>
    <script src="card.js"></script>
<!--</form>-->

