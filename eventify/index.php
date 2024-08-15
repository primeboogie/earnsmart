<?php

header('Access-Control-Allow-Origin: *');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    header('Access-Control-Allow-Headers: Content-Type, Authorization'); 
    http_response_code(204);
    exit;
}

include "func.php";

$inputs = jDecode();

$uname = isset($inputs['uname']) ? $inputs['uname'] : null;
$uemail = isset($inputs['uemail']) ? $inputs['uemail'] : null;
$msg = isset($inputs['msg']) ? $inputs['msg'] : null;
$subject = isset($inputs['subject']) ? $inputs['subject'] : null;

if($uname && $uemail && $msg && $subject){
    sendmail($uname,$uemail,$msg,$subject);
}