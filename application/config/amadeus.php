<?php
defined('BASEPATH') or exit('No direct script access allowed');

$config['client_id'] = "1ltPeI2gjpVlKuyu4bCni4C2dPR73l31";
$config['client_secret'] = "eaJXOg87kgSrjvGn";
$config['test_url']   =   "https://test.api.amadeus.com/v1/";
$config['test_url2']   =   "https://test.api.amadeus.com/";
$config['auth-url']   =   $config['test_url'] . "security/oauth2/token";
/**POST */
$config['result-url'] =   $config['test_url2'] . "v2/shopping/flight-offers";  /*GET URL*/
$config['flight-dates'] =   $config['test_url'] . "shopping/flight-dates";  /*GET URL*/
$config['booking-ticket'] =   $config['test_url'] . "booking/flight-orders";  /*GET URL*/
    