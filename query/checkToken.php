<?php 
 
require __DIR__ ."/../TwoFactorAuth/Twilio/Verification.php";
use TwoFactorAuth\Twilio\Verification;
session_start();

extract($_POST);

if(Verification::verifyToken($token)){
    $res = array("status" => "approved", "token"=>md5($token));
    $_SESSION['examineeSession']['examineeSessionToken'] = md5($token);
}else{
    $res = array("status" => "not_approved", 'token'=>$token);
}
 echo json_encode($res);
 ?>