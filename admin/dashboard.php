<?php include("../header2.php") ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
 
<div class="container-fluid" style="margin-top: 200px;">
	<div class="row">
		<h1 class="text-center bg-dark text-white">MY PROFILE</h1>
		<div class="col-md-12">
			<table class="table">
        <thead>
          <tr class="text-center">
            <th>S No.</th>
            <th>Student Name</th>
            <!-- <th>Parent Name</th> -->
            <th>Email</th>
            <!-- <th>Relationship</th> -->
            <th>Phone</th>
            <th>Student DOB</th>
            <th>Address</th>
            <th>Class</th>
            <th>Status</th>
            <th>Comment</th>
            <th>Decision</th>
            <th>Operations</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
          $user_id = $_SESSION['id'];
          include("../dbcon.php");
          $data = "select * from admission";
          $result = mysqli_query($con,$data); // returns a object
          //echo "<pre>";
          //print_r($result);

          while($d = mysqli_fetch_array($result)){
            //echo "<pre>";
            //print_r($d);
          ?>
          <tr class="text-center">
            <td><?php echo $i++ ?></td>
            <td><?php echo $d['studentname'] ?></td>
            <!-- <td><?php //echo $d['parentname'] ?></td> -->
            <td><?php echo $d['email'] ?></td>
            <!-- <td><?php //echo $d['relationship'] ?></td> -->
            <td><?php echo $d['phone'] ?></td>
            <td><?php echo $d['studentdob'] ?></td>
            <td><?php echo $d['address'] ?></td>
            <td><?php echo $d['class'] ?></td>
            <td><?php echo $d['status'] ?></td>
            <td>
            	<?php if($d['status'] == 'Pending'){ ?>
            	<form method="post" action="status_update.php">
            		<textarea name="comment"></textarea>
            	<?php }else{ echo $d['comment']; }?>
            </td>
            <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
            <td>    
            	<?php if($d['status'] == 'Pending'){ ?>
            	    <button type="submit" name="approved" class="btn btn-success">Approve</button>
            	    <button type="submit" name="rejected" class="btn btn-danger">Reject</button>
                </form>
                <?php } ?>
            </td>
            <td>
              <a href="admission_view.php?id=<?php echo $d['id'] ?>" class="btn btn-primary">View</a>
              <a href="admission_edit.php?id=<?php echo $d['id'] ?>" class="btn btn-info">Edit</a>
              <a href="admission_delete.php?id=<?php echo $d['id'] ?>" class="btn btn-warning">Delete</a>
            </td>
          </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
		</div>
	</div>
</div>

</body>
</html>