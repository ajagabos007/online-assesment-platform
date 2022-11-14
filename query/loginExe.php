<?php 
session_start();
 include("../conn.php");
 
extract($_POST);
$selAcc = $conn->query("SELECT * FROM examinee_tbl WHERE exmne_email='$username'   ");
$selAccRow = $selAcc->fetch(PDO::FETCH_ASSOC);

if($selAcc->rowCount() > 0 && password_verify($pass, $selAccRow['exmne_password']) )
{
  if(!empty($selAccRow['exmne_phone_number'])){

    $_SESSION['examineeSession'] = array(
    	 'exmne_id' => $selAccRow['exmne_id'],
       'exmne_phone_number' => $selAccRow['exmne_phone_number'],
    	 'examineenakalogin' => true,
    );

    $res = array("res" => "success");
  }
  else{
    $_SESSION['error'] = $exmne_email." account does not have a phone number. Please contact the admin for account update";
      $res = array("res" => "no phone number");
  }
  

}
else
{
  $res = array("res" => "invalid");
}


 echo json_encode($res);
 ?>