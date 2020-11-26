<?php

use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;

require __DIR__ . '/vendor/autoload.php';

//API

$api = new ApiContext(
    new OAuthTokenCredential(
        'Aa6Ep1z4it--rVPxzK4tNia8ea99H27jKQ776I_DFaWOYByF3FkQHmeLCdwyqdewBPgOJmJbrrrWOYWD',
        'EEHj5V8Poc6EQpeOq_0HEqnaJG-j126NAFMbO6Y9V040lLGBw8EnvYzC4z-bdPPuvc3-zZ08JFVR9cIe'
    )
);

$api->setConfig([
    'mode' => 'sandbox',
    'http.ConnectionTimeOut' => 30,
    'log.LogEnabled' => false,
    'log.FileName' => '',
    'log.LogLevel' => 'Fine',
    'validation.level' => 'log'
]);


?>