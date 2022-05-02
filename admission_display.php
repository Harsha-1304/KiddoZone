<?php include('header2.php'); ?>
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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>


<div class="container">
  <div class="row">
    <div class="col-md-6 text-center aos-init aos-animate" data-aos="fade-right" data-aos-delay="200"><img src="images/copy.png" style="max-width: 100%;"></div>
    <div class="col-md-6">
      <h1>My Details</h1>
      <?php
          $i = 1;
          $user_id = $_SESSION['id'];
          include("dbcon.php");
          $data = "select * from admission where user_id = $user_id and class = '$class' ";
          $result = mysqli_query($con,$data); // returns a object
          //echo "<pre>";
          //print_r($result);

          while($d = mysqli_fetch_array($result)){
            //echo "<pre>";
            //print_r($d);
      ?>
      <div>
        <p>S No. - <?php echo $i++ ?></p>
        <p>Parent Name - <?php echo $d['parentname'] ?></p>
        <p>Email - <?php echo $d['email'] ?></p>
      </div>
      <?php
        }
      ?>
    </div>
  </div>
</div>
 



<div class="container-fluid" style="margin-top: 200px;">
	<div class="row">
		<h1 class="text-center bg-dark text-white">MY DETAILS</h1>
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<table class="table">
        <thead>
          <tr>
            <th>S No.</th>
            <th>Parent Name</th>
            <th>Email</th>
            <th>Relationship</th>
            <th>Phone</th>
            <th>Student Name</th>
            <th>Student DOB</th>
            <th>Address</th>
            <th>Class</th>
            <th>Status</th>
            <th>Comment</th>
            <th>Operations</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
          $user_id = $_SESSION['id'];
          include("dbcon.php");
          $data = "select * from admission where user_id = $user_id and class = '$class' ";
          $result = mysqli_query($con,$data); // returns a object
          //echo "<pre>";
          //print_r($result);

          while($d = mysqli_fetch_array($result)){
            //echo "<pre>";
            //print_r($d);
          ?>
          <tr>
            <td><?php echo $i++ ?></td>
            <td><?php echo $d['parentname'] ?></td>
            <td><?php echo $d['email'] ?></td>
            <td><?php echo $d['relationship'] ?></td>
            <td><?php echo $d['phone'] ?></td>
            <td><?php echo $d['studentname'] ?></td>
            <td><?php echo $d['studentdob'] ?></td>
            <td><?php echo $d['address'] ?></td>
            <td><?php echo $d['class'] ?></td>
            <td><?php echo $d['status'] ?></td>
            <td><?php echo $d['comment'] ?></td>
            <td>
              <a href="admission_view.php?id=<?php echo $d['id'] ?>" class="btn btn-primary">View</a>
              <a href="admission_edit.php?id=<?php echo $d['id'] ?>" class="btn btn-info">Edit</a>
            </td>
          </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
		</div>
		<div class="col-md-1"></div>
	</div>
</div>

</body>
</html>