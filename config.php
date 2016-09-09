<?php
    require_once('stripe-php/init.php');

    $stripe = array(
            "secret_key"      => "sk_test_XXYYZZ",
            "publishable_key" => "pk_test_XXYYZZ"
    );

    \Stripe\Stripe::setApiKey($stripe['secret_key']);
?>

    
