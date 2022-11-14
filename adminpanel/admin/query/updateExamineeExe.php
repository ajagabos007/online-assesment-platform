<?php
 include("../../../conn.php");
 extract($_POST);


if(!empty($exPass)){
    $exPass = password_hash($exPass, PASSWORD_BCRYPT);
    $updCourse = $conn->query("UPDATE examinee_tbl SET exmne_fullname='$exFullname', exmne_course='$exCourse', exmne_gender='$exGender', exmne_birthdate='$exBdate', exmne_year_level='$exYrlvl', exmne_phone_number='$exPhone_number', exmne_email='$exEmail', exmne_password='$exPass' WHERE exmne_id='$exmne_id' ");
}
else
    $updCourse = $conn->query("UPDATE examinee_tbl SET exmne_fullname='$exFullname', exmne_course='$exCourse', exmne_gender='$exGender', exmne_birthdate='$exBdate', exmne_year_level='$exYrlvl', exmne_phone_number='$exPhone_number', exmne_email='$exEmail' WHERE exmne_id='$exmne_id' ");

if($updCourse)
{
	   $res = array("res" => "success", "exFullname" => $exFullname);
}
else
{
	   $res = array("res" => "failed");
}



 echo json_encode($res);	
?>