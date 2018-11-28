<?php
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;

require 'app/start.php';

if(!isset($_GET['success'], $_GET['paymentId'], $_GET['PayerID']))
{
    die();
    //REDIRECT NA NEKU STRANU GDE SE NAVODI DA NIJE USPELA TRANSKACIJA
    //NPR SOMETHING GONE WRONG
}
if((bool)$_GET['success']===false)
{
    die();  
  /*  header("Location:http://localhost/PayPal2/index.php");*/
}

$paymentId=$_GET['paymentId'];
$payerId=$_GET['PayerID'];

$payment= Payment::get($paymentId, $paypal);

$execute = new PaymentExecution();
$execute->setPayerId($payerId);

try {
    $result= $payment->execute($execute, $paypal);
}
catch(Exception $e){
    $data=json_decode($e->getData());
    var_dump($data);
    die();
}

echo"Success!"//redirect
?>