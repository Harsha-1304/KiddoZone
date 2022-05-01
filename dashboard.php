<?php include('header2.php'); ?>
<?php include("dbcon.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin+Sketch&family=Exo+2&family=Londrina+Sketch&family=Oleo+Script:wght@700&family=Open+Sans&family=Playfair+Display&family=Roboto:wght@300&family=Rock+3D&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>

<style>
    body{
        font-family: 'Open Sans', sans-serif;
    }

    .first{
        background-image: url('images/g.png');
        height: 1100px;
        width: 100%;
        background-repeat: no-repeat;
        background-size: cover;
        /*background-position: center;*/
    }

    .animation{
        width: 650px; 
        margin-top: 310px;
        animation: mover 1000ms infinite alternate;
    }
    @keyframes mover{
        0% {
            transform: translateY(0);
        }
        100% {
            transform: translateY(-10px);
        }
    }
    
    .name{
        padding-left: 300px !important;
        padding-top: 170px;
        font-size: 64px;
        /*font-family: 'Cabin Sketch', cursive;*/
        font-family: 'Londrina Sketch', cursive;
    }

    .second{
        padding-left: 180px !important;
    }

</style>

<body>

<!-- <div style="margin-top: -490px;">
	<img src="images/img2.png" class="w-100" style="background: beige;">
</div> -->

<div class="container-fluid first">
    <div class="row">
        <div class="col-md-4">
            <img src="images/asian.png" class="animation">
        </div>
        <div class="col-md-8">
            <div class="name">Hi, <?php  echo $_SESSION['n']; ?></div>
            <div class="second">
                <!-- <h5 style="color: darkblue;">Welcome to a world of joy,</h5> -->
                <h5 style="color: purple; padding-left: 6px;">Welcome to a world of joy where little ones discover root and wings to fly</h5>
                <!-- <p>Kiddozone is delighted to welcome you to our world of joy where little learners feel safe, free, happy, and as cherished as they are at home. Nurtured by our trained, qualified, passionate team of teachers and caregivers. Surrounded by age-appropriate play way methodologies, hands-on explorations, theme-based activities, stories, clubs, camps and best-in-tution amenities. Here, we just kindle the spark of curiosity in the already bright child that yours is so that he/she sparkles forever in future.</p> -->
                <p><marquee style="color: red; font-size: 30px; font-family: 'Cabin Sketch', cursive;">ADMISSIONS ARE NOW OPEN FOR 2022-2023</marquee></p>
            </div> 
            <div class="second">
                <h3>Who we are?</h3>
                <ul>
                    <li>Kiddozone was established in the year 2022.</li>
                    <li>We are an open platform for every kid to grow, nurture and prosper in the cycle of life.</li>
                </ul>
                <h3>What we do?</h3>
                <ul>
                    <li>We just kindle the spark of curiosity in the already bright child that yours is so that he/she sparkles forever in future.</li>
                    <li>Qualified and trained teachers, a playful learning environment ensure a high-quality experience for children.</li>
                    <li>We provide developmentally enriching & fun learning space for students.</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<h1 class="text-center p-5">Dashboard/Apply For Admission</h1>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 ps-5">
            <img src="images/img5.png" width="600">	
		</div>
		<div class="col-md-6 row">
            <?php 
                $user_id = $_SESSION['id'];
                $data = "select * from admission where user_id = $user_id and class = 'lkg' ";
                $result = mysqli_query($con,$data);
                $num = mysqli_num_rows($result);
                // echo $num;
                if($num == 0) 
                {
            ?>
            <a href="admission.php?class=<?php echo "lkg" ?>" class="form-control mb-1 btn btn-outline-primary text-dark col">LKG</a>
            <?php
                }
                else
                {
            ?>
            <a href="admission_display.php?class=<?php echo "lkg" ?>" class="form-control mb-1 btn btn-outline-primary text-dark col-xs-3">LKG <span style="font-size: 12px;">(already filled, please click to see details)</span></a>
            <?php  
                }
            ?>

            <?php 
                $user_id = $_SESSION['id'];
                $data = "select * from admission where user_id = $user_id and class = 'ukg' ";
                $result = mysqli_query($con,$data);
                $num = mysqli_num_rows($result);
                // echo $num;
                if($num == 0) 
                {
            ?>
            <a href="admission.php?class=<?php echo "ukg" ?>" class="form-control mb-1 btn btn-outline-primary text-dark col">UKG</a>
            <?php
                }
                else
                {
            ?>
            <a href="admission_display.php?class=<?php echo "ukg" ?>" class="form-control mb-1 btn btn-outline-primary text-dark col-xs-3">UKG <span style="font-size: 12px;">(already filled, please click to see details)</span></a>
            <?php  
                }
            ?>

            <?php 
                $user_id = $_SESSION['id'];
                $data = "select * from admission where user_id = $user_id and class = '1st' ";
                $result = mysqli_query($con,$data);
                $num = mysqli_num_rows($result);
                // echo $num;
                if($num == 0) 
                {
            ?>
            <a href="admission.php?class=<?php echo "1st" ?>" class="form-control mb-1 btn btn-outline-primary text-dark col-xs-3">1st STANDARD</a>
            <?php
                }
                else
                {
            ?>
            <a href="admission_display.php?class=<?php echo "1st" ?>" class="form-control mb-1 btn btn-outline-primary text-dark col-xs-3">1st STANDARD <span style="font-size: 12px;">(already filled, please click to see details)</span></a>
            <?php  
                }
            ?>
            
            <?php 
                $user_id = $_SESSION['id'];
                $data = "select * from admission where user_id = $user_id and class = '2nd' ";
                $result = mysqli_query($con,$data);
                $num = mysqli_num_rows($result);
                // echo $num;
                if($num == 0) 
                {
            ?>
            <a href="admission.php?class=<?php echo "2nd" ?>" class="form-control mb-1 btn btn-outline-primary text-dark col-xs-3">2nd STANDARD</a>
            <?php
                }
                else
                {
            ?>
            <a href="admission_display.php?class=<?php echo "2nd" ?>" class="form-control mb-1 btn btn-outline-primary text-dark col-xs-3">2nd STANDARD <span style="font-size: 12px;">(already filled, please click to see details)</span></a>
            <?php  
                }
            ?>

            <?php 
                $user_id = $_SESSION['id'];
                $data = "select * from admission where user_id = $user_id and class = '3rd' ";
                $result = mysqli_query($con,$data);
                $num = mysqli_num_rows($result);
                // echo $num;
                if($num == 0) 
                {
            ?>
            <a href="admission.php?class=<?php echo "3rd" ?>" class="form-control mb-1 btn btn-outline-primary text-dark col-xs-3">3rd STANDARD</a>
            <?php
                }
                else
                {
            ?>
            <a href="admission_display.php?class=<?php echo "3rd" ?>" class="form-control mb-1 btn btn-outline-primary text-dark">3rd STANDARD <span style="font-size: 12px;">(already filled, please click to see details)</span></a>
            <?php  
                }
            ?>
            
            <?php 
                $user_id = $_SESSION['id'];
                $data = "select * from admission where user_id = $user_id and class = '4th' ";
                $result = mysqli_query($con,$data);
                $num = mysqli_num_rows($result);
                // echo $num;
                if($num == 0) 
                {
            ?>
            <a href="admission.php?class=<?php echo "4th" ?>" class="form-control mb-1 btn btn-outline-primary text-dark">4th STANDARD</a>
            <?php
                }
                else
                {
            ?>
            <a href="admission_display.php?class=<?php echo "4th" ?>" class="form-control mb-1 btn btn-outline-primary text-dark">4th STANDARD <span style="font-size: 12px;">(already filled, please click to see details)</span></a>
            <?php  
                }
            ?>

            <?php 
                $user_id = $_SESSION['id'];
                $data = "select * from admission where user_id = $user_id and class = '5th' ";
                $result = mysqli_query($con,$data);
                $num = mysqli_num_rows($result);
                // echo $num;
                if($num == 0) 
                {
            ?>
            <a href="admission.php?class=<?php echo "5th" ?>" class="form-control mb-1 btn btn-outline-primary text-dark">5th STANDARD</a>
            <?php
                }
                else
                {
            ?>
            <a href="admission_display.php?class=<?php echo "5th" ?>" class="form-control mb-1 btn btn-outline-primary text-dark">5th STANDARD <span style="font-size: 12px;">(already filled, please click to see details)</span></a>
            <?php  
                }
            ?>

            <?php 
                $user_id = $_SESSION['id'];
                $data = "select * from admission where user_id = $user_id and class = '6th' ";
                $result = mysqli_query($con,$data);
                $num = mysqli_num_rows($result);
                // echo $num;
                if($num == 0) 
                {
            ?>
            <a href="admission.php?class=<?php echo "6th" ?>" class="form-control mb-1 btn btn-outline-primary text-dark">6th STANDARD</a>
            <?php
                }
                else
                {
            ?>
            <a href="admission_display.php?class=<?php echo "6th" ?>" class="form-control mb-1 btn btn-outline-primary text-dark">6th STANDARD <span style="font-size: 12px;">(already filled, please click to see details)</span></a>
            <?php  
                }
            ?>

            <?php 
                $user_id = $_SESSION['id'];
                $data = "select * from admission where user_id = $user_id and class = '7th' ";
                $result = mysqli_query($con,$data);
                $num = mysqli_num_rows($result);
                // echo $num;
                if($num == 0) 
                {
            ?>
            <a href="admission.php?class=<?php echo "7th" ?>" class="form-control mb-1 btn btn-outline-primary text-dark">7th STANDARD</a>
            <?php
                }
                else
                {
            ?>
            <a href="admission_display.php?class=<?php echo "7th" ?>" class="form-control mb-1 btn btn-outline-primary text-dark">7th STANDARD <span style="font-size: 12px;">(already filled, please click to see details)</span></a>
            <?php  
                }
            ?>

            <?php 
                $user_id = $_SESSION['id'];
                $data = "select * from admission where user_id = $user_id and class = '8th' ";
                $result = mysqli_query($con,$data);
                $num = mysqli_num_rows($result);
                // echo $num;
                if($num == 0) 
                {
            ?>
            <a href="admission.php?class=<?php echo "8th" ?>" class="form-control mb-1 btn btn-outline-primary text-dark">8th STANDARD</a>
            <?php
                }
                else
                {
            ?>
            <a href="admission_display.php?class=<?php echo "8th" ?>" class="form-control mb-1 btn btn-outline-primary text-dark">8th STANDARD <span style="font-size: 12px;">(already filled, please click to see details)</span></a>
            <?php  
                }
            ?>
		</div>
	</div>
</div>

<?php include('footer.php'); ?>

</body>
</html>