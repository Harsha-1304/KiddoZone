<?php include('header.php'); ?>

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

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<style>
    *{
        /*font-family: 'Playfair Display', serif;*/
        /*font-family: 'Exo 2', sans-serif;*/
        /*font-family: 'Oleo Script', cursive;*/
        /*font-family: 'Roboto', sans-serif;*/
        /*font-family: 'Open Sans', sans-serif;*/
        /*font-family: 'Rock 3D', cursive;*/
        /*font-family: 'Cabin Sketch', cursive;*/
        /*font-family: 'Londrina Sketch', cursive;*/
    }

    body{
        font-family: 'Open Sans', sans-serif;
    }

    .carousel-caption{
    	bottom: 37% !important;
    }

    .carousel-caption h1{
    	font-size: 60px;
    	color: purple;
        font-family: 'Londrina Sketch', cursive;
    }

    .special{
    	bottom: 3% !important;
    }

    .special h1{
    	color: darkgreen;
    	font-size: 50px;
    }

    .slider{
    	height: 400px;
    }

    .bg1{
        background-image: url('images/img9.jpg');
        height: 300px;
        /*width: 230px;*/
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        border-radius: 150px;
    }

    .bg2{
        background-image: url('images/img11.jpg');
        height: 300px;
        /*width: 230px;*/
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        border-radius: 150px;
    }

    .bg3{
        background-image: url('images/img14.jpg');
        height: 300px;
        /*width: 230px;*/
        background-repeat: no-repeat;
        background-size: cover;
        /*background-position: center;*/
        border-radius: 150px;
    }

    .bg4{
        background-image: url('images/img13.jpg');
        height: 300px;
        /*width: 230px;*/
        background-repeat: no-repeat;
        background-size: cover;
        /*background-position: center;*/
        border-radius: 150px;
    }

    /*.tp::before{
        content: '';
        position: absolute;
        left: 13;
        top: 50;
        width: 307px;
        height: 300px;
        background: #000000ba;
        opacity: .3;
        z-index: 1;
        border-radius: 150px;
    }*/

    .tp2{
        padding-top: 0px;
    }

    .curve1{
        background-image: url('images/f.png');
        /*background-attachment: fixed;*/
        /*height: 500px;*/
        width: 100%;
        background-repeat: no-repeat;
        /*background-size: cover;*/
        /*background-position: center;*/
        /*border-radius: 30px;*/
    }

    .curve2{
        background-image: url('images/a (1).png');
        /*height: 500px;*/
        width: 100%;
        background-repeat: no-repeat;
        background-size: cover;
        /*background-position: center;*/
        /*border-radius: 30px;*/
    }

    .wel1{
        font-size: 35px;
        color: #673ab7;
        text-align: center;
        font-weight: 500;
        text-transform: uppercase;
    }

    .wel2{
        text-align: center;
        margin-left: 90px;
        margin-right: 90px;
        font-size: 17px;
        line-height: 27px;
    }

    .step{
        height: 100px;
        width: 500px;
        margin: 20px;
        border: 3px solid grey;
        border-top-left-radius: 50px;
        border-bottom-left-radius: 50px;
    }

    .step:hover{
        /*background-color: #88d914;*/
        /*background-color: #e77b31;*/
        background-color: #456795;
        color: white;
    }

    .iconcir{
        height: 95px;
        width: 95px;
        margin-right: 45px;
        /*margin-left: 8px;*/
        border-radius: 50%;
        border: 4px solid #fff;
        background-color: #456795;
        /*animation: swinging 3.5s ease-in-out forwards infinite;
        transform-origin: 50% 0;*/
    }

    .iconcir i{
        font-size: 1.5rem;
        color: #fff;
        margin-top: 31px;
        margin-left: 32px;
        animation: swinging 3.5s ease-in-out forwards infinite;
        transform-origin: 50% 0;
    }
    @keyframes swinging{
        0% {
            transform: rotate(10deg);
        }
        50% {
            transform: rotate(-5deg);
        }
        100% {
            transform: rotate(10deg);
        }
    }
    
    .iconcon1{
        position: absolute;
        top: 37px;
        left: 146px;
    }

    .iconcon2{
        position: absolute;
        top: 33px;
        left: 146px;
    }

    .iconcon3{
        position: absolute;
        top: 25px;
        left: 146px;
    }

    .iconcon4{
        position: absolute;
        top: 26px;
        left: 146px;
    }

    .c1{
        /*background-image: url('images/1a (1).png');*/
        background-image: url('images/clipboard.png');
    }

    .c2{
        /*background-image: url('images/1b.png');*/
        background-image: url('images/clipboard.png');

    }

    .c3{
        /*background-image: url('images/1e.png');*/
        background-image: url('images/clipboard.png');

    }

    .c4{
        /*background-image: url('images/1c.png');*/
        background-image: url('images/clipboard.png');

    }

    .c1,.c2,.c3,.c4{
        height: 467px;
        width: 322px;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        padding: 20px;
        padding-left: 39px;
        padding-right: 39px;
        text-align: justify;
        /*text-align: center;*/
    }

    .cc{
        /*margin-top: 65px;*/
        margin-top: 50px;
        font-family: 'Cabin Sketch', cursive;
        font-weight: 700;
        font-size: 20px;
        text-align: center;
    }

    .cd{
        font-size: 15px;
        font-family: 'Cabin Sketch', cursive;
    }

    @media(max-width: 768px){
        .imgbox img{
            margin-left: 1px;
            width: 100px !important;
        }
        .stepsbox{
            display: none;
        }
        .tp::before{
            display: none;
        } 
        .bg1,.bg2,.bg3,.bg4{
            height: 300px;
            border-radius: 150px;
            margin-top: 10px;
        }
        .check1,.check2,.check3,.check4{
            display: none;
        }
        .wel{
            height: 3000px !important;
        }
    }
</style>

</head>
<body>

<div class="carousel slide" data-bs-ride="carousel" id="a">

    <div class="carousel-inner">
	    <div class="carousel-item active" data-bs-interval="2000">
            <img src="images/slider1.jpg" class="w-100 slider" alt="...">
            <!-- <div class="carousel-caption"><h1>We teach, you enjoy!</h1></div> -->
	    </div> <!--carousel item 0 end-->

        <!-- <div class="carousel-item" data-bs-interval="2000"> -->
            <!-- <img src="images/slider2.jpg" class="w-100 slider" alt="..."> -->
            <!-- <div class="carousel-caption special"><h1>We teach, you enjoy!</h1></div> -->
	    <!-- </div> --> <!--carousel item 1 end-->

	    <!-- <div class="carousel-item" data-bs-interval="2000"> -->
            <!-- <img src="images/slider3.png" class="w-100 slider" alt="..."> -->
            <!-- <div class="carousel-caption"><h1>Good food within minutes</h1></div> -->
	    <!-- </div> --> <!--carousel item 2 end-->

	    <div class="carousel-item" data-bs-interval="4000">
            <img src="images/slider4.jpg" class="w-100 slider" alt="...">
            <div class="carousel-caption"><h1>Your child's education partner</h1></div>
	    </div><!--carousel item 3 end-->
	</div><!--carousel-inner end-->   
</div><!-- carousel end -->

<!-- <div class="check1" data-aos="zoom-in" data-aos-duration="3000">
    <h2 class="text-center">Learner Centric</h2>
    <p>Focus on the learner and the possibilities as learning isn't easy.</p>
    <div>No two children are the same; Neither should their learning be. For us, every child is a possibility of endless curiosity and boundless potential just waiting to thrive. At Kiddozone, our focus isn’t on just teaching. It's on ensuring that every child is engaged and learning.</div>
</div>
<div class="check2" data-aos="zoom-in" data-aos-duration="3000">
    <h2 class="text-center">Collaborative</h2>
    <p>Drive engagement rather than instruction.</p>
    <div>Students learn better when they’re drawn into learning by collaborating, engaging their minds and being allowed to express themselves and question it all. Here, every class has been designed to drive collaboration and teamwork among learners and the teacher.</div>
</div>
<div class="check3" data-aos="zoom-in" data-aos-duration="3000">
    <h2 class="text-center">Holistic</h2>
    <p>Develop the whole child. Not just academic aptitude.</p>
    <div>A child’s development depends on a lot more than just academics. At Kiddozone,  the focus is on a child’s overall well-being, including physical, emotional, relational, intellectual, and spiritual development, along with reading and writing.</div>
</div>
<div class="check4" data-aos="zoom-in" data-aos-duration="3000">
    <h2 class="text-center">Risk-taking</h2>
    <p>Encourage experimenting rather than playing it safe.</p>
    <div>Students learn a lot more when they explore. Being successful after taking a risk can motivate them to seek further achievements. While failing can help them analyse and learn and, in turn, test their capabilities and limits. At Kiddozone, we follow the same.</div>
</div> -->

<div>
    <h2 class="wel1 mt-5">
        <b>Welcome to Kiddozone Tution Classes</b>
        <img src="images/underlinee.png" style="width: 151px; margin-left: -105px; margin-top: 43px;">
    </h2>
    <div class="mt-4 wel2" data-aos="fade-up" data-aos-duration="1000">
        Kiddozone Tution Classes believes that tutions should prepare learners for life, not just for grades. Kiddozone aims to empower all learners to become curious, resilient and global citizens, armed with life literacy skills to adapt and unearth the opportunities in this ever-evolving world. Through meaningful experiences, students learn to observe, analyse, decode information, make connections, and initiate responsible actions.
    </div>
    <div class="mt-4 mb-4 wel2" data-aos="fade-up" data-aos-duration="2000">
        We believe in “Shaping Minds, Touching Lives, Building Second Homes.”
    </div>
</div><!--welcome end-->

<div class="mt-4 curve1 text-warning" style="height: 750px; font-family: 'Rock 3D', cursive;">
    <div class="container" style="padding-top: 81px;">
        <div class="row">
            <div class="col-md-3" data-aos="zoom-in" data-aos-duration="2000">
            </div>
            <div class="col-md-3 tp2" data-aos="zoom-in" data-aos-duration="2000">
                <div class="bg2"></div>
                <h4 class="text-center"><b>Collaborative</b></h4>
            </div>
            <div class="col-md-2" data-aos="zoom-in" data-aos-duration="2000">
            </div>
            <div class="col-md-3 tp2" data-aos="zoom-in" data-aos-duration="2000">
                <div class="bg4"></div>
                <h4 class="text-center"><b>Risk taking</b></h4>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3" style="margin-left: 31px; margin-top: -80px;" data-aos="zoom-in" data-aos-duration="2000">
                <h4 class="text-center"><b>Learner Centric</b></h4>
                <div class="bg1"></div>
            </div>
            <div class="col-md-3 tp2" data-aos="zoom-in" data-aos-duration="2000">
            </div>
            <div class="col-md-3" style="margin-left: -90px; margin-top: -80px;" data-aos="zoom-in" data-aos-duration="2000">
                <h4 class="text-center"><b>Holistic</b></h4>
                <div class="bg3"></div>
            </div>
            <div class="col-md-3 tp2" data-aos="zoom-in" data-aos-duration="2000">
            </div>
        </div>
    </div>
</div><!--introduction end-->

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-2" data-aos="fade-down" style="z-index: 1;"><img src="images/kid4.png"></div>
        <div class="col-md-10" style="background: #005ca8; padding-left: 190px;">
            <div class="mb-3" style="padding-top: 50px; height: 160px; font-family: 'Londrina Sketch', cursive; font-size: 64px; color: #b9bfc4; font-weight: 400;">Our Curriculum</div>
            <div class="row mb-3">
                <div class="owl-carousel owl-theme">
                    <div class="item c1">
                        <!-- <div class="" data-aos="zoom-in" data-aos-duration="3000"> -->
                            <!-- <h2 class="text-center mt-5">Learner Centric</h2> -->
                            <p class="cc">Focus on the learner and the possibilities as learning isn't easy.</p>
                            <div class="cd">No two children are the same; Neither should their learning be. <!--For us, every child is a possibility of endless curiosity and boundless potential just waiting to thrive.--> At Kiddozone, our focus isn’t on just teaching. It's on ensuring that every child is engaged and learning.</div>
                            <img src="images/bee.png">
                        <!-- </div> -->
                    </div>
                    <div class="item"></div>
                    <div class="item c2">
                        <!-- <h2 class="text-center mt-5">Collaborative</h2> -->
                        <p class="cc">Drive engagement rather than instruction.</p>
                        <div class="cd">Students learn better when they’re drawn into learning by engaging their minds, being allowed to express themselves and question it all. Here, every class has been designed to drive teamwork among learners and the teacher.</div>
                        <img src="images/boy2.png" style="width: 157px; margin-left: 88px; margin-top: -18px;">
                    </div>
                    <div class="item"></div>
                    <div class="item c3">
                        <!-- <h2 class="text-center mt-5">Holistic</h2> -->
                        <p class="cc">Develop the whole child. Not just academic aptitude.</p>
                        <div class="cd">A child’s development depends on a lot more than just academics. At Kiddozone,  the focus is on a child’s overall well-being, including physical, emotional, relational, intellectual, and spiritual development, along with reading and writing.</div>
                        <img src="images/dancing.png" style="margin-left: 47px; margin-top: -20px; width: 211px;">
                    </div>
                    <div class="item"></div>
                    <div class="item c4">
                        <!-- <h2 class="text-center mt-5">Risk-taking</h2> -->
                        <p class="cc">Encourage experimenting rather than playing it safe.</p>
                        <div class="cd">Students learn a lot more when they explore. Being successful after taking a risk can motivate them to seek further achievements. While failing can help them analyse and learn and, in turn, test their capabilities and limits.</div>
                        <img src="images/cartoon.png" style="width: 119px; margin-left: 111px; margin-top: -25px;">
                    </div>
                    <div class="item"></div>
                </div>
            </div>
            <!-- <div class="owl-carousel owl-theme">              
                <div class="item"><h4>5</h4></div>
                <div class="item"><h4>6</h4></div>
                <div class="item"><h4>7</h4></div>
                <div class="item"><h4>8</h4></div>
                <div class="item"><h4>9</h4></div>
                <div class="item"><h4>10</h4></div>
            </div> -->
        </div>
    </div>
</div><!--curriculum end-->

<div class="container mt-5 stepsbox">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="imgbox col-md-5">
            <img src="images/img15.jpg" width="500" data-aos="fade-right" data-aos-duration="3000" style="margin-top: 93px; margin-left: 20px;">
        </div>
        <div class="stepstable col-md-6">
            <div>
                <div class="step" data-aos="fade-left" data-aos-duration="1000">
                    <div class="iconcir"><i class="fas fa-sign-in-alt"></i></div>
                    <div class="iconcon1"><p>1. Click on Sign Up. Create Your Account.</p></div>
                </div>
                <div class="step" data-aos="fade-left" data-aos-duration="1500">
                    <div class="iconcir"><i class="fas fa-map-marker"></i></div>
                    <div class="iconcon4"><p>2. Fill the admission form by selecting desired class.</p></div>
                </div>
            </div>
            <div>
                <div class="step" data-aos="fade-left" data-aos-duration="2000">
                    <div class="iconcir"><i class="far fa-check-circle"></i></div>
                    <div class="iconcon3"><p>3. We will process your application and revert back with a call.</p></div>
                </div>
                <div class="step" data-aos="fade-left" data-aos-duration="2500">
                    <div class="iconcir"><i class="fas fa-coins"></i></div>
                    <div class="iconcon2"><p>4. Join the Kiddozone family.</p></div>
                </div>
            </div>
        </div>
    </div>
</div><!--steps end-->

<div class="curve2" style="/*background: #624dd6;*/ height: 820px;">
    <div style="padding-top: 309px;">
	<div class="mx-auto w-50 p-3" data-aos="flip-left" data-aos-duration="1000" style="background: white; border-radius: 30px; box-shadow: 10px 10px 10px grey;">
        <h1 class="text-center">Create Your Account</h1>

        <form method="post" action="signup.php">
	        <div class="mb-3">
		        <label>Name:</label>
		        <input type="text" name="n" placeholder="Enter your full name" class="form-control" required>
	        </div>
	        <div class="mb-3">
		        <label>Email:</label>
		        <input type="email" name="e" placeholder="Enter your e-mail id" class="form-control" required>	
	        </div>
	        <div class="mb-3">
		        <label>Password:</label>
		        <input type="password" name="p" placeholder="Enter your password" class="form-control" required>
	        </div>
	        <div class="mb-3">
		        <label>Confirm Password:</label>
		        <input type="password" placeholder="Re-enter your password" class="form-control" required>
	        </div>
	        <div class=" mb-1 text-center">
	        	<button type="submit" class="btn" style="background: #b9fa52;">Sign Up</button>
	        </div>
	        <div class="text-center">
	        	If you already have an account, please
                <a href="" style="color: #624dd6; text-decoration: none;" data-bs-toggle="modal" data-bs-target="#aa">Sign In</a>
	        </div>
        </form>
    </div>
    </div>
</div><!-- signup form end -->

<div class="modal fade" id="aa">
    <div class="modal-dialog modal-lg" > <!--modal-xl,sm,lg--->
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Sign In Into Your Account</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div><!---modal header end--->

            <div class="modal-body">
                <form method="post" action="signin.php">
                    <div class="mb-3">
                        <label>E-mail:</label>
                        <input type="email" name="e" placeholder="Enter your e-mail id" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Password:</label>
                        <input type="password" name="p" placeholder="Enter your password" class="form-control" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn" style="background: #b9fa52;">Sign in</button>
                    </div>
                </form>
            </div><!-- modal body--->
        </div><!--modal content end-->
    </div><!---modal dialog end-->
</div><!-- modal end -->

<script>
    AOS.init();
</script>

<script>
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        autoplay:true,
        autoplayTimeout:2000,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });
</script>

</body>
</html>

<?php include('footer.php'); ?>