<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<style>
    .navbar{
      background-color: white !important;
      opacity: 0.9;
      /*padding-bottom: 0px;*/
    }
    .navbar-nav{
        width:90%;
        margin-left:auto;
        justify-content:flex-end;
    }
    .navbar-nav li{
        padding: 3px 10px;
    }
    .navbar-nav li a{
        display: inline-block;
        font-weight: 600;
        padding: 10px 50px;
        font-size:17px;
    }

    .navbar-nav li:hover{
        background-color: #8E44AD;
        border-radius: 30px;
    }
    .navbar-nav li:hover a{
        color:white !important;
        transition:0.3s;
    }

    .navbar-nav li:hover:last-child{
        background-color: transparent;
    }
    

    @media(max-width: 768px){
        .weblogo{
            display: inline;
            margin-left: 10px !important;
            width: 60px !important;
        }
        .title{
            margin-left: 9px !important;
        }
        .navbar{
            background-color: #fec926 !important;
        }
    }
</style>

</head>
<body> 

<nav class="navbar navbar-expand-md navbar-dark"> <!--fixed-top-->
    <div class="container-fluid">
        <a href="navbar.html" style="text-decoration: none; color: purple;">
            <img src="images/logo2.png" style="width: 80px; border-radius: 200px; margin-left: 100px;" class="weblogo">
            <p style="margin-left: 97px;" class="title">KIDDOZONE</p>
        </a>
        <!---button start-->
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#pn">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="pn">
            <!--menu ul start-->
            <ul class="navbar-nav ms-auto">
                <li><a href="index.php" class="nav-link" style="color: #624dd6;">HOME</a></li>
                <li><a href="about.php" class="nav-link" style="color: #51e29a;">ABOUT</a></li>
                <!-- <li><a href="" class="nav-link" style="color: #dd4f75;">FRANCHISE</a></li> -->
                <li><a href="team.php" class="nav-link" style="color: #88d914;">OUR TEAM</a></li>
                <li><a href="parents.php" class="nav-link" style="color: #10b6fe;">PARENTS</a></li>
                <li><a href="gallery.php" class="nav-link" style="color: #ffc10d;">GALLERY</a></li>
                <li><a href="contact.php" class="nav-link" style="color: #624dd6;">CONTACT US</a></li>
                <li><a href="" style="color: white; background: #624dd6; border-radius:5px; padding: 8px 10px; margin:auto;" data-bs-toggle="modal" data-bs-target="#aa" class="nav-link">Sign In</a></li>
            </ul>
            
            <!--menu ul end-->
        </div> 
        
    </div><!--container-fluid end-->
</nav> <!--navbar end-->

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

</body>
</html>