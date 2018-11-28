<?php
use PayPal\Api\Payer;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Details;
use PayPal\Api\Amount;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Payment;

require 'app/start.php';

    /*if(!isset($_POST['tbProduct'], $_POST['tbPrice']))
    {
        die();
    }
*/
    
    $name       = $_POST['name'];
    $email      = $_POST['email'];
    $phone      = $_POST['phone'];
    $price      = $_POST['tbPrice']; //ovde moze kastovanje u float
    $product    = $_POST['service'];
    $message    = $_POST['message'];
    $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    

    /*slanje maila*/

    require_once('../geoplugin.class.php');
    $geoplugin = new geoPlugin();
    
    $mail_to = 'office@swissmedica.info';
    
    $subject = 'PAYPAL '.$email.' PAYPAL form';
    
    $geoplugin->locate();
    
    $body_message .= 'From: '.$name."\n";
    $body_message .= 'Email:'.$email."\n";
    $body_message .= 'Korisnik: '.$name."\n";
    $body_message .= 'Avans:'.$product."\n";
    $body_message .= 'Iznos:'.$price."EUR"."\n";
    $body_message .= 'Poruka:'.$message."\n";
    $body_message .= "Country: {$geoplugin->countryName}\n";
    $body_message .= 'url:'.$actual_link."\n";
    //$body_message .= "IP: $ip\n";
    
    
    $headers = "From:  <contact@cellulestaminali-clinica.com> \r\n";
    $headers .= 'Reply-To: '.$email."\r\n";
            
    // $mail_status = mail($mail_to, $subject, $body_message, $headers);
            
    @mail($mail_to, $subject, $body_message, $headers);
    /*kraj slanja*/
    
    $payer = new Payer();
    $payer->setPaymentMethod("paypal");

    $item = new Item();
    $item->setName($product)
        ->setCurrency('EUR')
        ->setQuantity(1)
        ->setPrice($price);

    $itemList = new ItemList();
    $itemList->setItems([$item]); //moze i vise itema

    $details = new Details();
    $details->setSubtotal($price);
    // /$details->set

    $amount = new Amount();
    $amount->setCurrency('EUR')
        ->setTotal($price)
        ->setDetails($details);

    $transaction = new Transaction();
    $transaction->setAmount($amount)
        ->setItemList($itemList)
        ->setDescription('Confirm your reservation');
      //  ->setInvoiceNumber(uniqid());//ovo proveri sta je
      
   $redirectUrls = new RedirectUrls();
   /*$redirectUrls->setReturnUrl(SITE_URL .'/pay.php?success=true')
        ->setCancelUrl(SITE_URL . '/pay.php?success=false');*/

        $redirectUrls->setReturnUrl(SITE_URL .'/index.html')
        ->setCancelUrl(SITE_URL . '/pay.php?success=false');

   $payment = new Payment();
   $payment->setIntent('sale')
        ->setPayer($payer)
        ->setRedirectUrls($redirectUrls)
        ->setTransactions([$transaction]);

   try{
        $payment->create($paypal);
    }
     catch(Exception $e){
        die($e);
    }

   $approvalUrl = $payment->getApprovalLink();


   header("Location:{$approvalUrl}");
?>