<?php

require "config.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

include 'vendor/autoload.php';

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

function jDecode() {

    $json = file_get_contents("php://input");
    $inputs = json_decode($json, true);

    return $inputs;
}

function sendmail($uname, $uemail, $msg, $subject, $attachmentPath = null, $attachmentName = null, $calendarEvent = null)
{

    $admin = [
        "name" => "CEO Nyacorya",
        "email" => "admin@earn-empire.com",
        "company" => "EARN EMPIRE CONNECTIONS",
        "website" => "https://earn-empire.com"
     ];

    
    $emails = getemails();
    
    $thost = $emails['thost'];
    $tuser = $emails['tuser'];
    $tpass = $emails['tpass'];
    $tfrom = $emails['tuser'];
    
    $attachmentPath = !empty($attachmentPath) ? $attachmentPath : null;
    $attachmentName = !empty($attachmentName) ? $attachmentName : null;
    
    $mail = new PHPMailer(true);
    
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = $thost;
    $mail->Port = 587;

    $mail->Username = $tuser;
    $mail->Password = $tpass;
    
    $mail->setFrom($tfrom, $admin['company']);
    $mail->addAddress($uemail, $uname);
    // $mail->addReplyTo($admin['email'], $admin['company']);

    $mail->Subject = $subject;
    $mail->isHTML(true);
    $mail->Body = emailtemp($msg);
    
    // Check if an attachment is provided
    if ($attachmentPath !== null) {
        $mail->addAttachment($attachmentPath, $attachmentName);
    }
    
    // Add Google Calendar event attachment
    if ($calendarEvent !== null) {
        $mail->addStringAttachment($calendarEvent, 'event.ics', 'base64', 'text/calendar');
    }
    
    try {
        $mail->send();
    } catch (Exception $e) {

        error_log("Mailer Error: " . $mail->ErrorInfo);

        echo $errorMessage = "Mailer Error: " . $mail;
    }
    return true;
}

function emailtemp($msg){
    return $msg;
}

function getemails(){
$pass = "#@info2030"; 
$host = "mail.earn-empire.com"; 
$array = [];

for ($i = 1; $i <= 30; $i++) {
    $array[$i] = [
        "thost" => $host,
        "tuser" => "info$i@earn-empire.com",
        "tpass" => $pass,
    ];
}


shuffle($array);
$array = reset($array);
    return $array;
}
