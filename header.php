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
                <li><a href="" class="nav-link" style="color: #624dd6;">HOME</a></li>
                <li><a href="" class="nav-link" style="color: #51e29a;">ABOUT</a></li>
                <li><a href="" class="nav-link" style="color: #dd4f75;">FRANCHISE</a></li>
                <li><a href="" class="nav-link" style="color: #88d914;">OUR TEAM</a></li>
                <li><a href="" class="nav-link" style="color: #10b6fe;">PARENTS</a></li>
                <li><a href="" class="nav-link" style="color: #ffc10d;">GALLERY</a></li>
                <li><a href="" class="nav-link" style="color: #624dd6;">CONTACT US</a></li>
            </ul>
            <!--menu ul end-->
        </div> 
        <div> 
            <a href="" style="color: #624dd6; text-decoration: none;" data-bs-toggle="modal" data-bs-target="#aa">Sign In</a>
        </div>
    </div><!--container-fluid end-->
</nav> <!--navbar end-->

</body>
</html>