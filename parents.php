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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>

<style>
    body{
        font-family: 'Open Sans', sans-serif;
    }
    h1, h2, h3{
        font-family: 'Cabin Sketch', cursive;
        font-size: xxx-large !important;
    }
    h5{
        font-family: 'Cabin Sketch', cursive;
    }
    .do-dont .do .col-4, .do-dont .dont .col-4{
        padding:10px;
        text-align:center;
        /*margin:10px 10px 10px 10px;*/
    }
    .do-dont .do .col-4 div, .do-dont .dont .col-4 div{
        background-color:rgb(256, 256, 256, 0.3);
        border-radius:5px;
        padding:15px;
        height:100%;
    }
    .do{
        position:relative;
    }
    .do::after{
        position:absolute;
        display:block;
        content:"";
        height:70%;
        width:1px;
        background-color:white;
        right:0px;
        margin:auto 0px;
        top:20%;
    }
    
    .do-dont{
        width:100%;
        margin:auto;
        padding:5% 1%;
        background-color:#F1C40F;
        background-image:url(images/g3.png);
        background-size:100% 170%;
        background-position:center;
        color:white;
    }
    .do-dont .row{
        width:fit-content;
        margin:auto;
    }
    .do-dont h3{
        text-align:center;
    }
    .testimonials{
        padding:7% 5%;
        background-image:url(images/g4.png);
    }
    .testimonials h2{
        text-align:center;
    }
    .testimonial-item{
        text-align:center;
        padding:3%;
        box-shadow:0px 0px 8px rgb(0, 0, 0, 0.2);
    }
    .testimonial-item .img{
        width:110px;
        height:110px;
        border-radius: 50%;
        background-color:red;
        overflow:hidden;
        margin:auto;
    }
    .testimonials .col-5{
        padding:1%;
    }
    .testimonial-item .img img{
        max-width: 100%;
        max-height:100%;
    }
    .feedback{
        padding:3% 5%;
        position: relative;
    }
    .feedback i{
        position: absolute;
    }
    .feedback i:nth-child(1){
       left:3%;
        top:0;
    }
    .feedback i:nth-child(2){
        left:90%;
        bottom:3%;
        transform:rotate(180deg);
    }
</style>

<body>
<div class="do-dont">
    <div class="row justify-content-center">
        <div class="do col-lg-5">
        <h3>Do's <i class="bi bi-check-circle-fill"></i></h3>
        <div class="row ">
            <div class="col-4">
                <div>
                    <h6>Dine Together</h6>
                    <p>Dine together and catch up on each other's daily happenings.</p>
                </div>
                
            </div>
            <div class="col-4">
                <div>
                    <h6>School Activities</h6>
                    <p>Get involved in the school activities related to your children.</p>
                </div>
            </div>
            <div class="col-4">
                <div>
                <h6>Don't do it all!</h6>
                <p>Resist on doing those tasks for your kids which they can do by themselves.</p>
                </div>
            </div>
            <div class="col-4">
            <div>
        <h6>Right way of doing things</h6>
                        <p>Let your child figure out the right way of doing things.</p>
            </div>
                
            </div>
            <div class="col-4">
            <div>
                <h6>Let them make choices!</h6>
                <p>Let your child make choices and quote opinions of their own.</p>
                </div>
                
            </div>
            <div class="col-4">
            <div>
                <h6>Love and Care</h6>
                <p>Let your children know how much you love them and care for them.</p>
                </div>
                
            </div>

        </div>
        

    </div>
    <div class="dont col-lg-5">
        <h3>Dont's <i class="bi bi-x-circle-fill"></i></h3>
        <div class="row">
            <div class="col-4">
            <div>
                <h6>Do not pressurize</h6>
                <p>Do not pressurize your kids to study constantly.</p>
                </div>
                
            </div>
            <div class="col-4">
            <div>
                <h6>No Mocking!</h6>
                <p>Never tell your child to mock their teachers or anyone connected to them.</p>
                </div>
                
            </div>
            <div class="col-4">
            <div>
                <h6>No Imposing!</h6>
                <p>Do not impose your wishes and wills on your child.</p>
                </div>
                
            </div>
            <div class="col-4">
            <div>
                <h6>Do not compare</h6>
                <p>This makes them feel demotivated at a point in time.</p>
                </div>
                
            </div>
            <div class="col-4">
            <div>
                <h6>No Misbehaving!</h6>
                <p>Do not ignore the misbehaving signs in your child.</p>
                </div>
                
            </div>
            <div class="col-4">
            <div>
                <h6>No household Cribbing!</h6>
                <p>Do not discuss or crib over household problems in front of your kids.</p>
                </div>
                
            </div>
        </div>
    </div>
    </div>
    
</div>

<div class="testimonials">
    <div class="container">
        <h2>Parents Testimonials</h2>
        <br>
        <div class="row justify-content-center">
            <div class="col-5">
                <div class="testimonial-item">
                    <div class="img">
                    <img src="images/boy2.png" alt="">

                </div>
                <div class="info">
                    <div class="name">
                        <h5><b>Person Name</b></h5>
                    </div>
                    <div class="feedback">
                    <i class="bi bi-quote"></i>
                    <i class="bi bi-quote"></i>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        
                    </div>
                </div>
                </div>
                

            </div>
            <div class="col-5">
                <div class="testimonial-item">
                    <div class="img">
                    <img src="images/boy2.png" alt="">

                </div>
                <div class="info">
                    <div class="name">
                        <h5><b>Person Name</b></h5>
                    </div>
                    <div class="feedback">
                    <i class="bi bi-quote"></i>
                    <i class="bi bi-quote"></i>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        
                    </div>
                </div>
                </div>
                

            </div>
            <div class="col-5">
                <div class="testimonial-item">
                    <div class="img">
                    <img src="images/boy2.png" alt="">

                </div>
                <div class="info">
                    <div class="name">
                        <h5><b>Person Name</b></h5>
                    </div>
                    <div class="feedback">
                    <i class="bi bi-quote"></i>
                    <i class="bi bi-quote"></i>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        
                    </div>
                </div>
                </div>
                

            </div>
            <div class="col-5">
                <div class="testimonial-item">
                    <div class="img">
                    <img src="images/boy2.png" alt="">

                </div>
                <div class="info">
                    <div class="name">
                        <h5><b>Person Name</b></h5>
                    </div>
                    <div class="feedback">
                    <i class="bi bi-quote"></i>
                    <i class="bi bi-quote"></i>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        
                    </div>
                </div>
                </div>
                

            </div>
            <div class="col-5">
                <div class="testimonial-item">
                    <div class="img">
                    <img src="images/boy2.png" alt="">

                </div>
                <div class="info">
                    <div class="name">
                        <h5><b>Person Name</b></h5>
                    </div>
                    <div class="feedback">
                    <i class="bi bi-quote"></i>
                    <i class="bi bi-quote"></i>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        
                    </div>
                </div>
                </div>
                

            </div>
            <div class="col-5">
                <div class="testimonial-item">
                    <div class="img">
                    <img src="images/boy2.png" alt="">

                </div>
                <div class="info">
                    <div class="name">
                        <h5><b>Person Name</b></h5>
                    </div>
                    <div class="feedback">
                    <i class="bi bi-quote"></i>
                    <i class="bi bi-quote"></i>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        
                    </div>
                </div>
                </div>
                

            </div>
            <div class="col-5">
                <div class="testimonial-item">
                    <div class="img">
                    <img src="images/boy2.png" alt="">

                </div>
                <div class="info">
                    <div class="name">
                        <h5><b>Person Name</b></h5>
                    </div>
                    <div class="feedback">
                    <i class="bi bi-quote"></i>
                    <i class="bi bi-quote"></i>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        
                    </div>
                </div>
                </div>
                

            </div>
            
        </div>
    </div>
</div>
<?php include('footer.php'); ?>

</body>
</html>