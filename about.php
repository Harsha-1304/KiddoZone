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

    .counter{
        border: 2px solid black;
    }

</style>

<body>

<div style="margin-left: 98px;">
	<img src="images/blackboard.png" style="height: 550px; margin: auto; width: 90%;">
</div>


<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-2">
            <div class="title-block counter">
                <h2>1600+</h2>
                <span>Registered Users</span>
            </div>
        </div>
        <div class="col-md-2">
            <div class="title-block counter">
                <h2>3+</h2>
                <span>Teaching staff</span>
            </div>
        </div>
        <div class="col-md-2">
            <div class="title-block counter">
                <h2>2000+</h2>
                <span>Happy Students</span>
            </div>
        </div>
        <div class="col-md-2">
            <div class="title-block counter">
                <h2>10+</h2>
                <span>Years of Experience</span>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>

<?php include('footer.php'); ?>

</body>
</html>