<?php
/** set your paypal credential **/

$config['client_id'] = 'Ae7lBTqqBOTpAMUQLLvEJG5jTacBrqCQu4xK9nGaIj81R6t07qr-D5pFxBB4tiAPmAjgYBx22bSUoZpY';
$config['secret'] = 'EAk4Sz2DmsliFQjtPpN6vPy9riCmyQ1boamyD2v9Ais6C9-wP8jEp7YVOIStMK0jG0u5-5U2IB1NZjvO';

/**
 * SDK configuration
 */
/**
 * Available option 'sandbox' or 'live'
 */
$config['settings'] = array(

    'mode' => 'sandbox',
    /**
     * Specify the max request time in seconds
     */
    'http.ConnectionTimeOut' => 1000,
    /**
     * Whether want to log to a file
     */
    'log.LogEnabled' => true,
    /**
     * Specify the file that want to write on
     */
    'log.FileName' => 'application/logs/paypal.log',/*ovo mozda pravi problem*/
    /**
     * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
     *
     * Logging is most verbose in the 'FINE' level and decreases as you
     * proceed towards ERROR
     */
    'log.LogLevel' => 'FINE'
);