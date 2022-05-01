<?php

include("../dbcon.php");
// echo $_POST['approved'];
// echo $_POST['rejected'];

if(isset($_POST['approved']))
{
	// echo 'approved';
	$status = "Approved";
	$comment = $_POST['comment'];
	$id = $_POST['id'];

    $data = "update admission set status='$status',comment='$comment' where id = $id";
    $result = mysqli_query($con,$data);
    if($result)
    {
    	header('location:dashboard.php');
    }

}

if(isset($_POST['rejected']))
{
	// echo 'rejected';
	$status = "Rejected";
	$comment = $_POST['comment'];
	$id = $_POST['id'];

    $data = "update admission set status='$status',comment='$comment' where id = $id";
    $result = mysqli_query($con,$data);
    if($result)
    {
    	header('location:dashboard.php');
    }

}

?>