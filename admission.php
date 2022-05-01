<?php include('header2.php'); ?>
<?php        //OR             ?>
<?php   //session_start();    ?>

<?php

include("dbcon.php");

$class = $_GET['class'];
// echo $class;

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
<style>
	label{
		font-weight: 600;
		font-size: 17px;
	}
	.row{
		width: 900px;
		margin: auto;
	}
</style>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-5"></div>
		<div class="col-md-7">
            <form method="post" action="admission_insert.php" style="margin-top: 200px;">

            <input type="hidden" name="user_id" value="<?php echo $_SESSION['id'] ?>">

            <input type="hidden" name="c" value="<?php echo $class ?>">

	        <div class="mb-3">
		        <label>Parent/Guardian Name:</label>
		        <input type="text" name="pn" placeholder="Parents Name" class="form-control" value="<?php echo $_SESSION['n'] ?>" required>
	        </div>
	        <div class="mb-3">
		        <label>Email:</label>
		        <input type="email" name="e" placeholder="Email" class="form-control" value="<?php echo $_SESSION['e'] ?>" required>	
	        </div>
	        <div class="mb-3">
		        <label>Your relationship with the child:</label>
		        <input type="radio" name="r" value="Father">Father
		        <input type="radio" name="r" value="Mother">Mother
	        </div>
	        <div class="mb-3">
		        <label>Phone:</label>
		        <input type="text" name="p" placeholder="10-digit phone number" class="form-control" required>
	        </div>
	        <div class="mb-3">
		        <label>Student's Name:</label>
		        <input type="text" name="sn" placeholder="Students Name" class="form-control" required>
	        </div>
	        <div class="mb-3">
		        <label>Student's dob:</label>
		        <input type="date" name="dob" class="form-control" required>
	        </div>
	        <div class="mb-3">
				<label>Current Address:</label>
				<textarea name="a" class="form-control"></textarea>
			</div>
	        <div class="mb-3 text-center">
	            <button type="submit" class="btn" style="color: white; background-color: purple;">Submit Application</button>
	        </div>
            </form> 
        </div>  
    </div>
</div>

</body>
</html>