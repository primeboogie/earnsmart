<?php

include "func.php";

$inputs = jDecode();

$uname = isset($inputs['uname']) ? $inputs['uname'] : null;
$uemail = isset($inputs['uemail']) ? $inputs['uemail'] : null;
$msg = isset($inputs['msg']) ? $inputs['msg'] : null;
$subject = isset($inputs['subject']) ? $inputs['subject'] : null;

if($uname && $uemail && $msg && $subject){
    sendmaileven($uname,$uemail,$msg,$subject);
}