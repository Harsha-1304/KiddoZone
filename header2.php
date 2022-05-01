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
      padding-bottom: 0px;
      opacity: 0.9;
      /*padding: 0px !important;*/
    }

    .navbar-nav li{
      padding: 0 10px;
    }

    .navbar-nav li a{
      /*color: #fff !important;*/
      /*color: black !important;*/
      font-weight: 600;
      font-size: 20px;
    }

    .navbar-nav li:hover{
        background-color: #e7d2d9;
        border-radius: 30px;
    }
     
    .moblogo{
      display: none;
    }

    @media(max-width: 768px){
        .moblogo{
            display: inline;
        }
        .weblogo{
            display: none;
        }
        .navbar{
            background-color: #fec926 !important;
        }
    }
</style>

</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark">
    <div class="container-fluid">
        <a href="navbar.html" style="text-decoration: none; color: purple; height: 102px;">
            <img src="images/logo.png" style="width: 80px; border-radius: 200px; margin-left: 100px;" class="weblogo">
            <p style="margin-left: 97px;">KIDDOZONE</p>

            <!--Mobile view logo start-->
            <img src="https://www.firstfiddle.in/assets/images/logo-for-mobile.png" class="moblogo">
            <!--Mobile view logo end-->
        </a>
        <!---button start-->
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#pn">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="pn">
            <!--menu ul start-->
            <ul class="navbar-nav" style="margin-left: 53px; margin-bottom: 24px;">
                <li><a href="" class="nav-link" style="color: #624dd6;">HOME</a></li>
                <li><a href="" class="nav-link" style="color: #51e29a;">ABOUT</a></li>
                <li><a href="" class="nav-link" style="color: #ffc10d;">ADMISSIONS</a></li>
                <li><a href="" class="nav-link" style="color: #dd4f75;">FRANCHISE</a></li>
                <li><a href="" class="nav-link" style="color: #88d914;">OUR TEAM</a></li>
                <li><a href="" class="nav-link" style="color: #10b6fe;">PARENTS</a></li>
                <li><a href="" class="nav-link" style="color: #ffc10d;">GALLERY</a></li>
                <li><a href="" class="nav-link" style="color: #624dd6;">CONTACT US</a></li>
            </ul>
            <!--menu ul end-->
        </div>
        
        <?php 
            include("session.php");
            if(!empty($_SESSION['e']))
            {
         ?>

        <div class="dropdown" style="margin-right: 61px;">
            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" style="padding-bottom: 0;">
                <img src="images/dashboardpic.svg" width="50" style="margin-left: 0px;">
                <div class="text-danger ms-2">
                    <?php 
                        //include("session.php"); 
                        echo $_SESSION['n']; 
                    ?>                  
                </div>
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <?php if($_SESSION['identity'] == 'user'){ ?>
                    <li><a class="dropdown-item" href="signout.php">Sign Out</a></li>
                <?php }else{ ?>
                    <li><a class="dropdown-item" href="../signout.php">Sign Out</a></li>
                <?php } ?>
            </ul>
        </div>
        
        <?php } ?>

    </div><!--container-fluid end-->
</nav> <!--navbar end-->

</body>
</html>