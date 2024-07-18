<?php

function usefetch($apiendpoint, $method = 'GET', $headers = [], $body = null)
{
    $resp = [
        "status" => true,
        "http_code" => null,
        "data" => null,
        "msg" => null
    ];
    $ch = curl_init($apiendpoint);

    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);

    if ($body !== null) {
        if (is_array($body) || is_object($body)) {
            $body = json_encode($body);
            $headers[] = 'Content-Type: application/json';
        }
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
    }

    if (!empty($headers)) {
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    }

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); 

    $response = curl_exec($ch);

    if ($response === false) {
        $error_msg = curl_error($ch);
        curl_close($ch);
        $resp['msg'] = $error_msg;
        $resp['status'] = false;
    }

    $resp['http_code'] = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    $resp['data'] = json_decode($response, true);

    return $resp;
}


// print_r(usefetch("https://api.seosblog.com","POST",['Api-secret: justboogie'],["phone" => '0743981331', "amount" => 2]));