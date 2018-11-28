<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

//require_once(APPPATH . 'libraries/paypal-php-sdk/paypal/rest-api-sdk-php/sample/bootstrap.php'); // require paypal files OVO NE POSTOJI
require_once(APPPATH . 'libraries/PayPal-PHP-SDK/autoload.php');

use PayPal\Api\ItemList;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\PaymentExecution;

class Paypal extends Frontend_Controller
{
    public $_api_context;

    function  __construct()
    {
        parent::__construct();
       // $this->load->model('paypal_model', 'paypal'); // napravi model
        // paypal credentials
        $this->config->load('paypal');
        $this->load->library('session');
        $this->load->helper('url');

        $this->_api_context = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                $this->config->item('client_id'), $this->config->item('secret')
            )
        );
    }

    function index(){
        $data = array();
        $baseUrl =  base_url();
        $data['linksPaypal'] = array(
            $data['link'] = "<link rel='stylesheet' type='text/css' href=' $baseUrl/css/paypal/fonts/iconic/css/material-design-iconic-font.min.css'>",
            $data['link'] = "<link rel='stylesheet' type='text/css' href=' $baseUrl/css/paypal/vendor/animate/animate.css'>",
            $data['link'] = "<link rel='stylesheet' type='text/css' href=' $baseUrl/css/paypal/vendor/css-hamburgers/hamburgers.min.css'>",
            $data['link'] = "<link rel='stylesheet' type='text/css' href=' $baseUrl/css/paypal/vendor/animsition/css/animsition.min.css'>",
            $data['link'] = "<link rel='stylesheet' type='text/css' href=' $baseUrl/css/paypal/vendor/select2/select2.min.css'>",
            $data['link'] = "<link rel='stylesheet' type='text/css' href=' $baseUrl/css/paypal/vendor/daterangepicker/daterangepicker.css>",
            $data['link'] = "<link rel='stylesheet' type='text/css' href=' $baseUrl/css/paypal/vendor/noui/nouislider.min.css>",
            $data['link'] = "<link rel='stylesheet' type='text/css' href=' $baseUrl/css/paypal/css/util.css'>",
            $data['link'] = "<link rel='stylesheet' type='text/css' href=' $baseUrl/css/paypal/css/main.css'>",
        );

        $data['scripts'] = array(
            
            $data['script'] = "<script src='$baseUrl/css/paypal/vendor/animsition/js/animsition.min.js'></script>",
            $data['script'] = "<script src='$baseUrl/css/paypal/js/popper.js'></script>",
            $data['script'] = "<script src='$baseUrl/css/paypal/vendor/select2/select2.min.js'></script>",
            $data['script'] = "<script src='$baseUrl/css/paypal/vendor/daterangepicker/moment.min.js'></script>",
            $data['script'] = "<script src='$baseUrl/css/paypal/vendor/daterangepicker/daterangepicker.js'></script>",
            $data['script'] = "<script src='$baseUrl/css/paypal/vendor/countdowntime/countdowntime.js'></script>",
            $data['script'] = "<script src='$baseUrl/css/paypal/vendor/noui/nouislider.min.js'></script>",
            $data['script'] = "<script src='$baseUrl/css/paypal/js/main.js'></script>",
            
            
        );
        //$data['links'] = 
        //$data['links'] = 

       
        $this->load_view('paypal/paypalForm', $data); // ovde ucitavas paypal formu
    }


    function create_payment_with_paypal()
    {

        // setup PayPal api context
        $this->_api_context->setConfig($this->config->item('settings'));


// ### Payer
// A resource representing a Payer that funds a payment
// For direct credit card payments, set payment method
// to 'credit_card' and add an array of funding instruments.

        $payer['payment_method'] = 'paypal';

// ### Itemized information
// (Optional) Lets you specify item wise
// information
        $item1["name"] = $this->input->post('service');
        //$item1["sku"] = $this->input->post('item_number');  // Similar to `item_number` in Classic API
        //$item1["description"] = $this->input->post('item_description');
        $item1["currency"] ="EUR";
        $item1["quantity"] =1;
        $item1["price"] = $this->input->post('tbPrice');

        $itemList = new ItemList();
        $itemList->setItems(array($item1));

// ### Additional payment details
// Use this optional field to set additional
// payment information such as tax, shipping
// charges etc.
      //  $details['tax'] = $this->input->post('details_tax'); /*****ne treba****/
      //  $details['subtotal'] = $this->input->post('details_subtotal'); /*****ne treba****/
// ### Amount
// Lets you specify a payment amount.
// You can also specify additional details
// such as shipping, tax.
        $amount['currency'] = "EUR";
        $amount['total'] = $item1["price"] = $this->input->post('tbPrice');

        //$amount['details'] = $details;
// ### Transaction
// A transaction defines the contract of a
// payment - what is the payment for and who
// is fulfilling it.
        $transaction['description'] ='Payment description';
        $transaction['amount'] = $amount;
        $transaction['invoice_number'] = uniqid();
        $transaction['item_list'] = $itemList;

        // ### Redirect urls
// Set the urls that the buyer must be redirected to after
// payment approval/ cancellation.
        $baseUrl = base_url();
        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl($baseUrl."Paypal/getPaymentStatus")
                     ->setCancelUrl($baseUrl."Paypal/getPaymentStatus");

// ### Payment
// A Payment Resource; create one using
// the above types and intent set to sale 'sale'
        $payment = new Payment();
        $payment->setIntent("sale")
            ->setPayer($payer)
            ->setRedirectUrls($redirectUrls)
            ->setTransactions(array($transaction));

        try {
            $payment->create($this->_api_context);
        } catch (Exception $ex) {
            // NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
          //  ResultPrinter::printError("Created Payment Using PayPal. Please visit the URL to Approve.", "Payment", null, $ex);
            exit(1);
        }
        foreach($payment->getLinks() as $link) {
            if($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }

        if(isset($redirect_url)) {
            /** redirect to paypal **/
            redirect($redirect_url);
        }

        $this->session->set_flashdata('success_msg','Unknown error occurred');
        redirect('Paypal/index');

    }


    public function getPaymentStatus()
    {

        // paypal credentials

        /** Get the payment ID before session clear **/
        $payment_id = $this->input->get("paymentId") ;
        $PayerID = $this->input->get("PayerID") ;
        $token = $this->input->get("token") ;
        /** clear the session payment ID **/

        if (empty($PayerID) || empty($token)) {
            $this->session->set_flashdata('cancel_msg','Payment failed');
            redirect('Paypal/cancel');
        }
 

        $payment = Payment::get($payment_id,$this->_api_context);


        /** PaymentExecution object includes information necessary **/
        /** to execute a PayPal account payment. **/
        /** The payer_id is added to the request query parameters **/
        /** when the user is redirected from paypal back to your site **/
        $execution = new PaymentExecution();
        $execution->setPayerId($this->input->get('PayerID'));

        /**Execute the payment **/
        $result = $payment->execute($execution,$this->_api_context);



        //  DEBUG RESULT, remove it later **/
        if ($result->getState() == 'approved') {
            $trans = $result->getTransactions();

            // item info
            $Subtotal = $trans[0]->getAmount()->getDetails()->getSubtotal();
            $Tax = $trans[0]->getAmount()->getDetails()->getTax();

            $payer = $result->getPayer();
            // payer info //
            $PaymentMethod =$payer->getPaymentMethod();
            $PayerStatus =$payer->getStatus();
            $PayerMail =$payer->getPayerInfo()->getEmail();

            $relatedResources = $trans[0]->getRelatedResources();
            $sale = $relatedResources[0]->getSale();
            // sale info //
            $saleId = $sale->getId();
            $CreateTime = $sale->getCreateTime();
            $UpdateTime = $sale->getUpdateTime();
            $State = $sale->getState();
            $Total = $sale->getAmount()->getTotal();

            /** it's all right **/
            /** Here Write your database logic like that insert record or value in database if you want **/
            //$this->paypal->create($Total,$Subtotal,$Tax,$PaymentMethod,$PayerStatus,$PayerMail,$saleId,$CreateTime,$UpdateTime,$State);
            $this->session->set_flashdata('success_msg','Payment success');
            redirect('Paypal/success');
        }
        else{
            $this->session->set_flashdata('cancel_msg','Payment failed');
            redirect('Paypal/cancel');
        }
    
            
        
        
    }
    function success(){
        $this->load_view("paypal/success");
    }
    function cancel(){
        //$this->paypal->create_payment();
        $this->load_view("paypal/cancel");
    }
}