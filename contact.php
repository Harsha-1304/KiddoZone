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
    h1, h2{
        font-family: 'Londrina Sketch', cursive;
        font-size: xxx-large !important;
    }
    h5, h3{
        font-family: 'Cabin Sketch', cursive;
        font-size:xx-large !important;
    }
    .contact-us .row .col-5{
        padding: 12% 2% 6% 2%;
    }
    .contact-us .row .img img{
        width: 100%;
    }
    .contact-us .row .col-5 p{
        font-size:large;
    }
    .contact-us{
        margin-top: -6%;
        background-image:url(images/c.png);
        padding-top:5%;
        background-size:100% 100%;
        background-position:center;
        color:white;
    }
    .contact-form{
        padding:10%;
    }
    .form{
        margin:auto ;
        padding:10% 5%;
        border-radius:10px;
        background-image:url(images/g4.png);
        background-position:top;    
        background-color:#CC6699;

    }
    .submit{
        width:40%;
        margin:auto;
    }
    .form .head-form{
        text-align:center;
        color:white;
        margin-bottom:30px;
    }
    .form .head-form h3:after{
        width:15%;
        height:2px;
        display:block;
        content:"";
        background-color:white;
        margin:auto;
    }
</style>

<body>
    <div class="contact-us">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                
                <div class="col-5">
                    <h2>Contact Us</h2>
                    <br>
                    <h5>City Center:</h5>
                    <p>KIDDOZONE Tution Classes<br>Gwalior, India</p>
                    <br>
                    <div class="">
							<p><i class="bi bi-telephone-fill"></i>
							+91 9876543210</p>
						</div>
                    
                </div>
                <div class="col-5">
                <div class="form">
                <div class="head-form">
                    <h3>Connect With Us</h3>
                    <br>
                <p>You are just a click away from us</p>
                </div>
                
                <form method="post" action="connect.php">
					<div class="mb-2">  
                        <input type="text" name="n" placeholder="Your Name" class="form-control" required>
                    </div>
                    <div class="mb-2">   
                        <input type="email" name="e" placeholder="Email Address" class="form-control" required>
                    </div>
                    <div class="mb-2">   
                        <input type="text" name="p" placeholder="Phone" class="form-control" required>
                    </div>
                    <div class="mb-2">      
                        <input type="text" name="m" placeholder="Your Message" class="form-control" required>
                    </div>
                    <div class="mb-2 d-flex justify-content-center">
                        <button type="submit" class="btn btn-dark submit">Send</button>
                    </div>
                </form>
            </div>
                </div>
            </div>
        </div>
    </div>

    <!--div class="contact-form">
        <div class="container">
            <div class="form">
                <div class="head-form">
                    <h3>Connect With Us</h3>
                    <br>
                <p>You are just a click away from us</p>
                </div>
                
                <form method="post" action="connect.php">
					<div class="mb-2">  
                        <input type="text" name="n" placeholder="Your Name" class="form-control" required>
                    </div>
                    <div class="mb-2">   
                        <input type="email" name="e" placeholder="Email Address" class="form-control" required>
                    </div>
                    <div class="mb-2">   
                        <input type="text" name="p" placeholder="Phone" class="form-control" required>
                    </div>
                    <div class="mb-2">      
                        <input type="text" name="m" placeholder="Your Message" class="form-control" required>
                    </div>
                    <div class="mb-2 d-flex justify-content-center">
                        <button type="submit" class="btn btn-dark submit">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div-->


<?php include('footer.php'); ?>

</body>
</html>