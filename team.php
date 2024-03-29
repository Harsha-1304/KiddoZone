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
        font-family: 'Cabin Sketch', cursive;
        font-size: xxx-large !important;
    }
    .hero{
        position: relative;
        padding:160px;
        background-image:url(images/g2.png);
        background-size:100% 100%;
        color:white;
    }
    .hero img{
        width:90%;
        padding:30px;
    }
    .hero h1, .hero p{
        width: 90%;
        margin:auto;
        text-align:center;
    }

    .team{
        padding:70px;
        padding-bottom:200px;
        background-repeat:no-repeat;
        background-position:center;
        background-size:100% 100%;
        background-image:url(images/g3.png);
    }
    .team-heading h2, .team-heading p{
        width:fit-content;
        margin:auto;
    }


    .team-grid{
        display: grid;
        width:60%;
        margin:auto;
        grid-template-columns: auto auto;
        margin-top:50px;
    }
    .grid-item{
        width: 250px;
        position:relative;
        background-color: #dd4f75;
        border-radius:10px;
        margin:auto;
        padding-top:90px;
        margin-top:120px;   
        box-shadow:0px 2px 9px #000000a0;
    }
    .team-info{
        padding:15px;
        color:white;
    }
    .grid-item .team-img{
        width:180px;
        height:180px;
        margin:auto;
        position: absolute;
        top:-90px;
        left:35px;
        border-radius:50%;
        overflow: hidden;
        box-shadow:0px 3px 10px #000000aa;
    }

    .grid-item .team-img img{
        width: 100%;
        height: 250px;
    }

    .team-info h6, .team-info p{
        width:fit-content;
        margin: auto;
        text-align:center;
    }
</style>

<body>

<div class="hero">
    <div class="container">
        <div class="align-items-center row">
            <div class="hero-img col-6"><img src="images/support.svg" alt=""></div>
            <div class="col-6">
                <h1>We're KIDDOZONE</h1>
                <br>
                <p>Every day, via play activities and collaborative group work, our priority is on laying the correct foundation for the child.</p>
                <br>
                <p>It is easy to see how these attributes identify and promote the highest degree of cohesiveness and productivity possible when stated as a pyramid, with Trust at the base and Results at the top.</p>
            </div>
        </div>
    </div>
    
    

</div>



    <div class="team">

        <div class="">
            <div class="team-heading">
                <h2>Our Team</h2>
                <p>This is our entusiastic member of Kiddozone</p>
            </div>
            <div class="team-grid">
            <div class="grid-item">
                    <div class="team-img"><img src="images/img14.jpg" alt=""></div>
                    <div class="team-info">
                        <h6>Sangeeta Sharma</h6>
                        <p>Teacher</p>
                        <br>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>

                </div>
                <div class="grid-item">
                    <div class="team-img"><img src="images/img14.jpg" alt=""></div>
                    <div class="team-info">
                        <h6>Harsha Sharma</h6>
                        <p>Web Designer</p>
                        <br>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

<?php include('footer.php'); ?>

</body>
</html>