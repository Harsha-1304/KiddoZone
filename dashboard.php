<?php include('header2.php'); ?>
<?php include("dbcon.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin+Sketch&family=Exo+2&family=Londrina+Sketch&family=Oleo+Script:wght@700&family=Open+Sans&family=Playfair+Display&family=Roboto:wght@300&family=Rock+3D&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>

<style>
    body{
        font-family: 'Open Sans', sans-serif;
    }
    .col-md-4 a{
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    .col-md-4{
        margin-bottom: 10px;
        transition: 0.4s;
    }
    .col-md-4:hover{
        transform: scale(1.05);
    }
    .col-md-4:hover a{
        color: white !important;
    }

    .first{
        background-image: url('images/g.png');
        height: 1100px;
        width: 100%;
        background-repeat: no-repeat;
        background-size: cover;
        /*background-position: center;*/
    }
    .admission-open{
        flex: 0 0 50%;
        flex-direction: row-reverse;
        align-items: center;
        height: 800px;
        margin: auto;
        padding: 3%;
        padding-top: 20%;
        width: 100%;
        background-image: url(images/e.png);
        background-size: cover;
        color: white;
    }
    .admission-open-img{
        width: 45%;
    }
    .admission-open-img img{
        width: 70%;
    }
    .admission-open-info{
        width: 55%;
        padding: 5%;
    }
    .first .animation{
        width: 650px; 
        margin-top: 310px;
        animation: mover 1000ms infinite alternate;
    }
    .admission-dashboard{
        position:relative;
    }
    .admission-dashboard .animation{
        height:100%;
    }
    .admission-dashboard .animation img{
        position:absolute;
        width:45px;
        animation: mover 1000ms infinite alternate;
        opacity:0.4;
    }
    @keyframes mover{
        0% {
            transform: translateY(0);
        }
        100% {
            transform: translateY(-10px);
        }
    }
    .admission-dashboard .animation img:nth-child(1){
        top:5%;
        left:20%;
    }
    .admission-dashboard .animation img:nth-child(2){
        top:88%;
        left:90%;
    }
    .admission-dashboard .animation img:nth-child(3){
        top:46%;
        left:44%;
    }
    .admission-dashboard .animation img:nth-child(4){
        top:88%;
        left:9%;
    }
    .admission-dashboard .animation img:nth-child(5){
        top:6%;
        left:87%;
    }
    .admission-dashboard .animation img:nth-child(6){
        top:32%;
        left:10%;
    }
    .admission-dashboard .animation img:nth-child(7){
        top:95%;
        left:39%;
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
    .second .carousel-inner {
        min-height:400px;
    }
    h3{
        font-family: 'Cabin Sketch', cursive;
        color:purple;
    }
    h1{
        font-family: 'Londrina Sketch', cursive;
        font-size: xxx-large !important;
    }
    .testimonials{
        padding:20px;
        margin-top:35px;
    }
    .testimonials .carousel-item{
        align-items:center;
    }
    .testimonials .testimonial{
        background-color:red;
        padding:35px;
        position: relative;
        margin:auto;
        margin-top:75px;
        text-align:center;
        color:white;
        width:90%;
        border-radius:50px;
        height:200px;
        background-image:url(images/b.png);
        background-size:cover;
        background-position:center;
    }
    .testimonials .quote{
        background-color:purple;
        height:100px;
        width:100px;
        border-radius:50%;
        display:flex;
        align-items:center;
        justify-content:center;
        color:white;
        font-size:55px;
        border:5px solid white;
        margin:-85px auto 0px auto;
    }
    .testimonials h3{
        margin-bottom:0px;
        color:white;
    }
    .testimonials h6{
        font-family: 'Cabin Sketch', cursive;
    }
    .carousel-control-next-icon, .carousel-control-prev-icon{
        color:white;
        background-color:purple;
        padding:3px !important;
    }
    .carousel-control-next, .carousel-control-prev{
        width:8% !important;
    }
    

</style>

<body>

<!-- <div style="margin-top: -490px;">
	<img src="images/img2.png" class="w-100" style="background: beige;">
</div> -->

<div class="container-fluid first ">
    <div class="row d-flex align-items-center">
        <div class="col-md-4">
            <img src="images/asian.png" class="animation">
        </div>
        <div class="col-md-8">
            <div class="name">Hi, <?php  echo $_SESSION['n']; ?></div>
            <br>
            <div class="second">
                <!-- <h5 style="color: darkblue;">Welcome to a world of joy,</h5> -->
                <h5 style="color: purple; padding-left: 6px;">Welcome to a world of joy where little ones discover root and wings to fly</h5>
                <!-- <p>Kiddozone is delighted to welcome you to our world of joy where little learners feel safe, free, happy, and as cherished as they are at home. Nurtured by our trained, qualified, passionate team of teachers and caregivers. Surrounded by age-appropriate play way methodologies, hands-on explorations, theme-based activities, stories, clubs, camps and best-in-tution amenities. Here, we just kindle the spark of curiosity in the already bright child that yours is so that he/she sparkles forever in future.</p> -->
                <!--p><marquee style="color: red; font-size: 30px; font-family: 'Cabin Sketch', cursive;">ADMISSIONS ARE NOW OPEN FOR 2022-2023</marquee></p-->
            </div>
            <br> 
            <div class="second">
                <div id="about-carousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="2000">
                        <h3>Who we are?</h3>
                        <ul>
                            <li>Kiddozone was established in the year 2022.</li>
                            <li>We are an open platform for every kid to grow, nurture and prosper in the cycle of life.</li>
                        </ul>
                        <br>
                        <h3>What we do?</h3>
                        <ul>
                            <li>We just kindle the spark of curiosity in the already bright child that yours is so that he/she sparkles forever in future.</li>
                            <li>Qualified and trained teachers, a playful learning environment ensure a high-quality experience for children.</li>
                            <li>We provide developmentally enriching & fun learning space for students.</li>
                            <li>Brings out the elements of joy, excitement, health, good values and interaction with one another.</li>
                        </ul>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <h3>Vision</h3>
                            <ul>
                                <li>To facilitate, energise, and enrich childhood by supporting the development of the mind, body, and spirit, therefore assisting children in becoming lifelong learners.</li>
                            </ul>
                            <br>
                            <h3>Mission</h3>
                            <ul>
                            <li>To cultivate young minds in a culturally appropriate setting and to create opportunity for them to realise their full potential.</li>
                            </ul>
                            <br>
                            <h3>Philosophy</h3>
                            <ul>
                                <li>To provide each child with the culturally appropriate environment, moral values, love, and protection required for healthy physical, mental, and spiritual development.</li>
                            </ul>

                        </div>

                    </div>

                </div>
                
            </div>
        </div>
    </div>
</div>


<div class="container-fluid admission-dashboard">
    
    <h1 class="text-center p-5">Dashboard/Apply For Admission</h1>

    <div class="animation">
        <img src="images/space-science.png" alt="">
        <img src="images/space-science.png" alt="">
        <img src="images/ice-cream.png" alt="">
        <img src="images/ice-cream.png" alt="">
        <img src="images/ice-cream-candy.png" alt="">
        <img src="images/ice-cream-candy.png" alt="">
        <img src="images/space-science.png" alt="">
    </div>
	<div class="row">
		<div class="col-md-6 ps-5">
            <img src="images/kids.png" width="100%">	
		</div>
		<div class="col-md-6 row justify-content-center">
            <?php 
                $user_id = $_SESSION['id'];
                $data = "select * from admission where user_id = $user_id and class = 'lkg' ";
                $result = mysqli_query($con,$data);
                $num = mysqli_num_rows($result);
                // echo $num;
                if($num == 0) 
                {
            ?>
            <div class="col-md-4"><a href="admission.php?class=<?php echo "lkg" ?>" class="form-control mb-1 btn btn-outline-primary text-dark">LKG</a></div>
            
            <?php
                }
                else
                {
            ?>
            <div class="col-md-4">
               <a href="admission_display.php?class=<?php echo "lkg" ?>" class="form-control mb-1 btn btn-outline-primary text-dark col-1">LKG <span style="font-size: 12px;">(already filled, please click to see details)</span></a> 
            </div>
            
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
            <div class="col-md-4"><a href="admission.php?class=<?php echo "ukg" ?>" class="form-control mb-1 btn btn-outline-primary text-dark col-1">UKG</a></div>
            
            <?php
                }
                else
                {
            ?>
            <div class="col-md-4"><a href="admission_display.php?class=<?php echo "ukg" ?>" class="form-control mb-1 btn btn-outline-primary text-dark col-xs-3">UKG <span style="font-size: 12px;">(already filled, please click to see details)</span></a></div>
            
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
            <div class="col-md-4"><a href="admission.php?class=<?php echo "1st" ?>" class="form-control mb-1 btn btn-outline-primary text-dark col-xs-3">1st STANDARD</a></div>
            
            <?php
                }
                else
                {
            ?>
            <div class="col-md-4"><a href="admission_display.php?class=<?php echo "1st" ?>" class="form-control mb-1 btn btn-outline-primary text-dark col-xs-3">1st STANDARD <span style="font-size: 12px;">(already filled, please click to see details)</span></a></div>
            
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
            <div class="col-md-4"><a href="admission.php?class=<?php echo "2nd" ?>" class="form-control mb-1 btn btn-outline-primary text-dark col-xs-3">2nd STANDARD</a></div>
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
            <div class="col-md-4"><a href="admission.php?class=<?php echo "3rd" ?>" class="form-control mb-1 btn btn-outline-primary text-dark">3rd STANDARD</a></div>

            
            <?php
                }
                else
                {
            ?>
            <div class="col-md-4"><a href="admission_display.php?class=<?php echo "3rd" ?>" class="form-control mb-1 btn btn-outline-primary text-dark">3rd STANDARD <span style="font-size: 12px;">(already filled, please click to see details)</span></a></div>
            
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
            <div class="col-md-4"><a href="admission.php?class=<?php echo "4th" ?>" class="form-control mb-1 btn btn-outline-primary text-dark">4th STANDARD</a></div>
            
            <?php
                }
                else
                {
            ?>
            <div class="col-md-4"><a href="admission_display.php?class=<?php echo "4th" ?>" class="form-control mb-1 btn btn-outline-primary text-dark">4th STANDARD <span style="font-size: 12px;">(already filled, please click to see details)</span></a></div>
            
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
            <div class="col-md-4"><a href="admission.php?class=<?php echo "5th" ?>" class="form-control mb-1 btn btn-outline-primary text-dark">5th STANDARD</a></div>
            
            <?php
                }
                else
                {
            ?>
            <div class="col-md-4"><a href="admission_display.php?class=<?php echo "5th" ?>" class="form-control mb-1 btn btn-outline-primary text-dark">5th STANDARD <span style="font-size: 12px;">(already filled, please click to see details)</span></a></div>
            
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
            <div class="col-md-4"><a href="admission.php?class=<?php echo "6th" ?>" class="form-control mb-1 btn btn-outline-primary text-dark">6th STANDARD</a></div>
            
            <?php
                }
                else
                {
            ?>
            <div class="col-md-4"><a href="admission_display.php?class=<?php echo "6th" ?>" class="form-control mb-1 btn btn-outline-primary text-dark">6th STANDARD <span style="font-size: 12px;">(already filled, please click to see details)</span></a></div>
            
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
            <div class="col-md-4"><a href="admission.php?class=<?php echo "7th" ?>" class="form-control mb-1 btn btn-outline-primary text-dark">7th STANDARD</a></div>
            
            <?php
                }
                else
                {
            ?>
            <div class="col-md-4"><a href="admission_display.php?class=<?php echo "7th" ?>" class="form-control mb-1 btn btn-outline-primary text-dark">7th STANDARD <span style="font-size: 12px;">(already filled, please click to see details)</span></a></div>
            
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
            <div class="col-md-4"><a href="admission.php?class=<?php echo "8th" ?>" class="form-control mb-1 btn btn-outline-primary text-dark">8th STANDARD</a></div>
            
            <?php
                }
                else
                {
            ?>
            <div class="col-md-4"><a href="admission_display.php?class=<?php echo "8th" ?>" class="form-control mb-1 btn btn-outline-primary text-dark">8th STANDARD <span style="font-size: 12px;">(already filled, please click to see details)</span></a></div>
            
            <?php  
                }
            ?>
		</div>
	</div>
</div>
<div class="admission-open d-flex">
    <div class="admission-open-img">
        <img src="images/5-pair.png">
    </div>
    <div class="admission-open-info">
        <h1>
            Admission Open
        </h1>
        <br>
        <p>Admission to a preschool is a critical milestone in the life of every parent. We all want to choose the greatest preschool for our children's early education and lay a good foundation for their future. KiddoZone preschool is the greatest preschool in India for your child's educational journey, with a scientifically planned preschool curriculum, outstanding facility, and compassionate teachers. KiddoZone's preschool admissions procedure is relatively straightforward. Fill out the preschool application and get an appointment with one of our admissions counsellors now.</p>
    </div>
    
</div>
<div class="testimonials" >
    <h1 style="text-align:center;">Customer Reviews</h1>
    <div class="carousel slide" data-bs-ride="carousel" id="testimonials">
        <div class="carousel-inner container">
            <div class="carousel-item active">
                <div class="testimonial" >
                    <div class="quote"><i class="bi bi-quote"></i></div>
                    <div class="feedback">
                        <h3>Person Name 1</h3>
                        <h6>Parent</h6>
                        <p>The teaching concept has been acclaimed by education enthusiasts and experts as well as parents, teachers and children from across the world.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="testimonial" >
                    <div class="quote"><i class="bi bi-quote"></i></div>
                    <div class="feedback">
                        <h3>Person Name 2</h3>
                        <h6>Parent</h6>
                        <p>The teaching concept has been acclaimed by education enthusiasts and experts as well as parents, teachers and children from across the world.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="testimonial" >
                    <div class="quote"><i class="bi bi-quote"></i></div>
                    <div class="feedback">
                        <h3>Person Name 3</h3>
                        <h6>Parent</h6>
                        <p>The teaching concept has been acclaimed by education enthusiasts and experts as well as parents, teachers and children from across the world.</p>
                    </div>
                </div>
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#testimonials" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#testimonials" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
    </div>

</div>

<?php include('footer.php'); ?>

</body>
</html>