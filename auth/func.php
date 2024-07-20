<?php
require "config.php";

function usefetch($apiendpoint, $method = 'GET', $headers = [], $body = null)
{

    $ch = curl_init($apiendpoint);

    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);

    if ($body !== null) {
        if (is_array($body) || is_object($body)) {
            $body = json_encode($body);
            $headers[] = 'Content-Type: application/json';
        }
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
    }

    $cookie_value = isset($_COOKIE['access_token']) ? $_COOKIE['access_token'] : null;
    $headers[] = 'Cookie: access_token=' . $cookie_value;

    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); 

    $response = curl_exec($ch);

    curl_close($ch);

    $resp = json_decode($response, true);


    return $resp;
}

// print_r(usefetch("https://api.seosblog.com","POST",['Api-secret: justboogie'],["phone" => '0743981331', "amount" => 2]));
// $url = usefetch("http://localhost/officialsystem/test1.php");
// print_r($url);
// echo "wd";


$apiendpoint = $admin['backend']."/?action=auth";

$fetchresp = usefetch($apiendpoint);

// // print_r($apiendpoint);
// print_r($fetchresp['data']['1']['access_token']);


// echo "<pre>";
// print_r($fetchresp);
// echo "</pre>";

// if(isset($fetchresp['resultcode']) && $fetchresp['resultcode'] == true){

// echo "am in";
// }