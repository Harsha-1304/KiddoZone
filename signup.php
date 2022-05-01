<?php

include("dbcon.php");

$a = $_POST['n'];
$b = $_POST['e'];
$c = $_POST['p'];
// echo $a,$b,$c;

$emailcheck = mysqli_query($con,"select * from user where email='$b'");
if(mysqli_num_rows($emailcheck)>0)
{
	echo "<h1>email already exists</h1>";
}
else{
    $data = "insert into user(name,email,password)value('$a','$b','$c')";
    $result = mysqli_query($con,$data);
    if($result){
	    header("location:index.php");
    }
}

?>