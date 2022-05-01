<?php

include("dbcon.php");

$user_id = $_POST['user_id'];
$parentname = $_POST['pn'];
$email = $_POST['e'];
$relationship = $_POST['r'];
$phone = $_POST['p'];
$studentsname = $_POST['sn'];
$studentsdob = $_POST['dob'];
$address = $_POST['a'];
$class = $_POST['c'];

$data = "insert into admission(user_id,parentname,email,relationship,phone,studentname,studentdob,address,class)value('$user_id','$parentname','$email','$relationship','$phone','$studentsname','$studentsdob','$address','$class')";
mysqli_query($con,$data);

if ($data) {
	header('location: admission_display_profile.php');
}

?>