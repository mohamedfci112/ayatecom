<?php

use PayPal\Api\Payer;
use PayPal\Api\Details;
use PayPal\Api\Amount;
use PayPal\Api\Transaction;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Exception\PPConnectionException;


require '../src/start.php';
include('../../database/config.php');

$payer = new Payer();
$details = new Details();
$amount = new Amount();
$transaction = new Transaction();
$payment = new Payment();
$redirectUrls = new RedirectUrls();

//payer
$payer->setPaymentMethod('paypal');

//details
$details->setShipping('60.00')
    ->setTax('0.00')
    ->setSubtotal('20.00');

//amount
$amount->setCurrency('GBP')
    ->setTotal('80.00')
    ->setDetails($details);

//transactions
$transaction->setAmount($amount)
    ->setDescription('Membership');

$payment->setIntent('sale')
    ->setPayer($payer)
    ->setTransactions([$transaction]);

//redirect urls
$redirectUrls->setReturnUrl('https://ayatecom.000webhostapp.com/pages/consultat_register.php?approved=true')
    ->setCancelUrl('https://ayatecom.000webhostapp.com/pages/consultat.php?approved=false');

$payment->setRedirectUrls($redirectUrls);

try{

$payment->create($api);

// generate and store hash
$payment_id = $payment->getId();
$hash = md5($payment->getId());
$_SESSION['paypal_hash'] = $hash;

$store = "insert into transactions_paypal (payment_id,hash,complete) values ('$payment_id','$hash','0')";
mysqli_query($con,$store);
}
catch (PPConnectionException $e){
    header('Location:../error.php');

}

foreach($payment->getLinks() as $link){
    if($link->getRel() == 'approval_url'){
        $redirectUrl = $link->getHref();
    }
}

header('Location: ' . $redirectUrl);


