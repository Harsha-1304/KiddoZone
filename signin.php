<?php

session_start();
include("dbcon.php");

$a = $_POST['e'];
$b = $_POST['p'];
// echo $a,$b;

$check = "select * from user where email='$a' and password='$b'"; 
$result = mysqli_query($con,$check);
// echo "<pre>";
// print_r($result);

$total = mysqli_num_rows($result);
// echo $total;

$d = mysqli_fetch_array($result);
echo "<pre>";
print_r($d);

if($total==1){
	// $_SESSION['n'] = 'Harsha Sharma';
	$_SESSION['n'] = $d['name'];
	$_SESSION['e'] = $d['email'];
	$_SESSION['id'] = $d['id'];

    $role = $d['role'];
    // echo $role;
    if($role == 1)
    {
        $_SESSION['identity'] = 'user';
    	header("location:dashboard.php");
    }
    else if($role == 0)
    {
        $_SESSION['identity'] = 'admin';
        header("location:admin/dashboard.php");
    }
    else if($role == 2)
    {
    	header("location:hr/dashboard.php");
    }
}
else{
	header("location:index.php");
}

?>
