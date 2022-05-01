<?php 

// mysqli_connect('hostname','username','password','databasename');

$con = mysqli_connect('localhost','root','','admissionform');

if($con){
	// echo 'Connected';
}
else{
	// echo 'Not Connected';
}

?>