<?php 
namespace TwoFactorAuth\Twilio;
require __DIR__ . "/Config.php";
require_once __DIR__ .'/../../vendor/autoload.php';
session_start();
use TwoFactorAuth\Twilio\Config;
use Twilio\Rest\Client;

class Verification{

    public static function sendToken($phone_number="+2347068973329"){

        $twilio = new Client(Config::$account_sid, Config::$auth_token);
        $verification = $twilio->verify->v2->services(Config::$service_sid)
                                   ->verifications
                                   ->create($phone_number, "sms");
        if($verification->status =='pending' || !$verification->valid)
            return true; // token sent succesfully 
        else return false; // token sent fail
    }

    public static function verifyToken($token){
        $twilio = new Client(Config::$account_sid, Config::$auth_token);
        $verification_check = $twilio->verify->v2->services(Config::$service_sid)
                                         ->verificationChecks
                                         ->create([
                                                      "to" => $_SESSION['examineeSession']['exmne_phone_number'],
                                                      "code" => $token,
                                                  ]
                                         );
        if($verification_check->status =='approved' && $verification_check->valid)
            return true; //token is valid
        else return false; // token is invalid
        return true;
    }
}
