<?php 
session_start();
// session_destroy();
require __DIR__ ."/TwoFactorAuth/Twilio/Verification.php";
use TwoFactorAuth\Twilio\Verification;


if(isset($_SESSION['examineeSession']['examineenakalogin']) && isset($_SESSION['examineeSession']['exmne_phone_number']) && !isset($_SESSION['examineeSession']['examineeSessionToken']) ) {
  header("location:home.php");
}
// else if(isset($_SESSION['examineeSession']['examineenakalogin']) && isset($_SESSION['examineeSession']['exmne_phone_number']) && !isset($_SESSION['examineeSession']['examineeSessionToken'])){
  // if(Verification::sendToken($_SESSION['examineeSession']['exmne_phone_number']))
  //   include("login-ui/checkTokenForm.php");
  // else{  
  //   $_SESSION['error'] = "Token send failed. Please check your number, internet connectivity and try again. If this persist contact the ADMIN";
  //   }

// }
else{
  include("conn.php");

  include("login-ui/index.php");
}
 ?>

<!-- AYO pgd 07040002404 -->

