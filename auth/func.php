<?php

function usefetch($apiendpoint, $method = 'GET', $headers = [], $body = null)
{
    $ch = curl_init($apiendpoint);

    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);

    // Handle the request body
    if ($body !== null) {
        if (is_array($body) || is_object($body)) {
            $body = json_encode($body);
            $headers[] = 'Content-Type: application/json';
        }
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
    }

    // Set headers
    if (!empty($headers)) {
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    }

    // Set other cURL options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // Follow redirects

    // Execute the request
    $response = curl_exec($ch);

    // Check for cURL errors
    if ($response === false) {
        $error_msg = curl_error($ch);
        curl_close($ch);
        throw new Exception('cURL Error: ' . $error_msg);
    }

    // Get HTTP status code
    $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    // Close cURL resource
    curl_close($ch);

    // Decode the response
    $response_data = json_decode($response, true);

    // Handle non-JSON response
    if (json_last_error() !== JSON_ERROR_NONE) {
        return $response; // Return raw response if it's not JSON
    }

    // Check for HTTP errors
    if ($http_status < 200 || $http_status >= 300) {
        throw new Exception('HTTP Error: ' . $http_status . ' - ' . $response);
    }

    return $response_data;
}
