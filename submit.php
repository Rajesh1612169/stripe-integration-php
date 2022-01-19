<?php

require("config.php");
require("mail.php");

if (isset($_POST['stripeToken']))
{

//    \Stripe\Stripe::setVerifySslCerts(false);

    $token = $_POST['stripeToken'];

    $data = \Stripe\Charge::create(array(
        "amount" => 10000,
        "currency" => "inr",
        "description" => "Programming with Rajesh",
        "source" => $token
    ));


    if ($data['status'] === 'succeeded')
    {
        send_mail();
    }
    else {
        echo "failed";
    }
//    echo '<pre>';
//    print_r(gettype($data['status']));

}

