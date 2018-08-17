<?php

require '../../vendor/autoload.php';

\Stripe\Stripe::setApiKey("sk_test_THMpu9EPjdOArTIALmnMgViD");

\Stripe\Charge::create([
    'amount' => 1700,
    'currency' => 'usd',
    'description' => 'whole bird - mothercluckin\' hot',
    'source' => $_POST['stripeToken'],
]);

header('Location: /thank-you');
exit();
