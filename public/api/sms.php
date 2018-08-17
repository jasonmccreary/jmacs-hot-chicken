<?php
require '../../vendor/autoload.php';


$sid = 'AC6e775c59223976174bb27ffb371fcfd5';
$token = 'your_auth_token';
$client = new \Twilio\Rest\Client($sid, $token);

$client->messages->create(
    '+15558675309',
    array(
        'from' => '+16152587109',
        'body' => 'Aww yeah, we got your order. But our chicken\'s not that hot… Come in with $17 and we\'ll give you the bird.'
    )
);
