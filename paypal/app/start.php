<?php
    require 'vendor/autoload.php';

    define('SITE_URL', 'http://cellulestaminali-clinica.com/');
/*LIVE ACOUNT*/
    $paypal = new \PayPal\Rest\ApiContext(
        new \PayPal\Auth\OAuthTokenCredential(
            'AaR2XzEww_kTtBrweeKk3Lca0n9t25l3YXVf7CcorwSZNY-Dvc_SDfSodLpEPUlGOrIvYzfnAh2QvJnj',
            'EFYNl08VFkvLJwPhC3V-oFoNPjFnfwvd7rylLFQCFkrpOlEcAv6jlPBdmyNm7S_BcSUinvbaG8lCuig8'
            )
    );
/*SANDBOX ACOUNT*/
   /* $paypal = new \PayPal\Rest\ApiContext(
        new \PayPal\Auth\OAuthTokenCredential(
            'Ae7lBTqqBOTpAMUQLLvEJG5jTacBrqCQu4xK9nGaIj81R6t07qr-D5pFxBB4tiAPmAjgYBx22bSUoZpY',
            'EAk4Sz2DmsliFQjtPpN6vPy9riCmyQ1boamyD2v9Ais6C9-wP8jEp7YVOIStMK0jG0u5-5U2IB1NZjvO'
            )
    );*/
    
    $paypal->setConfig( array( 'mode' => 'live' ) ); 
    return $paypal;
?>