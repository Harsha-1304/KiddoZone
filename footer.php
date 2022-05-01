<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <style>
    	.z{
    		font-size: 30px;
    		position: absolute;
    	}

    	.y a{
    		text-decoration: none;
    		color: #362b75;
    		font-size: 17px;
    		font-weight: bold;
    		line-height: 30px;
    	}

    	.subscribe_form{
            padding: 55px 0 5px 0;
        }

        .subscribe_form .form_input{
            background-color: lavender;
            border: 1px solid #ffffff;
            color: #fff;
        }

        .subscribe_form .submit{
            background-color: #362b75;
            color: #fff;
            font-size: 16px;
            font-weight: 500;
            line-height: 50px;
            padding: 0 10px;
            width: 100%;
            border: none;
        }

    </style>
</head>
<body>

	<div class="container-fluid mt-5">
		<div class="row">
			<div class="col-md-3" style="background: #fdadc8; font-weight: bold; font-size: 14px; text-align: justify;">
				<div><span style="color: purple;">KIDDOZONE</span> instils a spirit of joy and fervour in children for learning new things and outshine in the competitive world. <span style="color: blue;">KIDDOZONE</span> has all that a growing child needs to complete his early education.</div>
				<div>So, give your toddler a right start with <span style="color: green;">KIDDOZONE</span>.</div>
				<div class="ms-3 mt-2">
				    <div><i class="fa fa-check"></i> <span style="color: red;">KIDDOZONE</span> provides best home tution classes in central india.</div>
				    <div><i class="fa fa-check"></i> We, at <span style="color: darkorange;">KIDDOZONE</span> provide 1 to 1 personalized education.</div>
				    <div><i class="fa fa-check"></i> We provide home tuition for all classes from LKG to 8th for all subjects.</div>
			    </div>
			    <img src="images/img6.png" width="90" style="margin-left: 200px; margin-top: -30px;">
			</div>
			<div class="col-md-3" style="background: #fde47f;">
				<h4 class="text-center">Contact Us</h4>
				<div>
					<i class="z bx bxs-phone"></i>
					<span style="font-size: 18px; font-weight: bold;" class="ms-5">Phone</span>
					<p class="ms-5">9876543210</p>
				</div>
				<div>
					<i class="z bx bx-envelope"></i>
					<span style="font-size: 18px; font-weight: bold;" class="ms-5">Email</span>
					<p class="ms-5">kiddozone@gmail.com</p>
				</div>
				<div>
					<i class="z bx bx-map"></i>
					<span style="font-size: 18px; font-weight: bold;" class="ms-5">Address</span>
					<p class="ms-5">KIDDOZONE Tution Classes, Gwalior, India</p>
				</div>
			    
			</div>
			<div class="col-md-3" style="background: #fd9766;">
				<div class="y pt-3 ps-3">
				    <div><a href=""><i class="fa fa-edit pe-2"></i> Why KIDDOZONE</a></div>
                    <div><a href=""><i class="fa fa-quote-right pe-2"></i> Testimonials</a></div>
				    <div><a href=""><i class="fa fa-thumbs-up pe-2"></i> Do’s &amp; Dont’s</a></div>		
                    <div><a href=""><i class="fa fa-users pe-2"></i>About Us</a></div>
                </div>
				<div class="subscribe_form">
					<form>
						<input  type="email" name="e" class="form_input form-control" placeholder="Email Address...">
						<button type="submit" class="submit">SUBSCRIBE</button>
					</form>
				</div>
				<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114542.8185585933!2d78.1208585810471!3d26.21413888462775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3976c5d1792291fb%3A0xff4fb56d65bc3adf!2sGwalior%2C%20Madhya%20Pradesh!5e0!3m2!1sen!2sin!4v1645811159059!5m2!1sen!2sin" width="150" height="100" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
			    <img src="images/img4.png" width="150" style="margin-left: 200px; margin-top: -407px;">
			</div>
			<div class="col-md-3 text-center" style="background: #91e0ff;">
				<h4>Connect To Us</h4>
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
                    <div class="mb-2">
                        <button type="submit" class="btn btn-dark">Send</button>
                    </div>
                </form>
			</div>
		</div>
	</div>

</body>
</html>