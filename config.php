<?php

require('stripe-php-master/init.php');

$publishable_key = "PUBLISAHBLE-KEY";
$secret_key = "SECRET-KEY";

\Stripe\Stripe::setApiKey($secret_key);

?>
