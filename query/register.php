<?php 
 include("../conn.php");


extract($_POST);

$selExamineeFullname = $conn->query("SELECT * FROM examinee_tbl WHERE exmne_fullname='$fullname' ");
$selExamineeEmail = $conn->query("SELECT * FROM examinee_tbl WHERE exmne_email='$email' ");
$password = password_hash($password, PASSWORD_BCRYPT);

$selExamineePhone_Number = $conn->query("SELECT * FROM examinee_tbl WHERE exmne_phone_number='$phone_number' ");


if($gender == "0")
{
	$res = array("res" => "noGender");
}
else if($course == "0")
{
	$res = array("res" => "noCourse");
}
else if($year_level == "0")
{
	$res = array("res" => "noLevel");
}
else if($selExamineeFullname->rowCount() > 0)
{
	$res = array("res" => "fullnameExist", "msg" => $fullname);
}
else if($selExamineeEmail->rowCount() > 0)
{
	$res = array("res" => "emailExist", "msg" => $email);
}
else if($selExamineePhone_Number->rowCount() > 0)
{
	$res = array("res" => "phoneNumberExist", "msg" => $phone_number);
}
else
{
	try {
		$insData = $conn->query("INSERT INTO examinee_tbl(exmne_fullname,exmne_course,exmne_gender,exmne_birthdate,exmne_year_level,exmne_email,exmne_phone_number,exmne_password) VALUES('$fullname','$course','$gender','$bdate','$year_level','$email','$phone_number','$password')  ");
		if($insData)
		{
			$res = array("res" => "success", "msg" => $email);
		}
		else
		{
			$res = array("res" => "failed");
		}
	} catch (Exception $e) {
		$res = array("res" => "failed", 'msg'=>$e->getMessage());
	}
	
}
echo json_encode($res);
 ?>