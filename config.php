<?php

require('stripe-php-master/init.php');

$publishable_key = "pk_test_51KHjnXLFnwqQ9rKKHWy7te9qTt3XPil4IhqzXcndMpcWh9MLbPf0Bo8vFp6KCXL2acHHkRuTAUQNtYI8KTrY8g1O00jxWNAioy";
$secret_key = "sk_test_51KHjnXLFnwqQ9rKKaanuv15jH1Q3ODFA7Tsy4WIU01g6S2UrE0OdwIngyTCqvlb8ltwrsCX9UKvCgowl0TrqdrRf00YC8F9MrF";

\Stripe\Stripe::setApiKey($secret_key);

?>