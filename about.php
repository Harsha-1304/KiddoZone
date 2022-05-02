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

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>

<style>
    body{
        font-family: 'Open Sans', sans-serif;
    }

    .counting{
        background: url('images/sky.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        height: 220px; 
        box-sizing: border-box;
        justify-content: center !important;
    }

    .count{
        width: 100% !important;
        margin-bottom: 150px;
        margin-top: 50px;
    }

   .card{
        border: 1px solid #ccc !important;
        transition: 0.3s;
        margin-top: 100px !important;
        margin-bottom: -5px;
        height: 210px; 
        background-color: #00000000 !important;
    }

    .card-header h1{
        text-align: center;
        padding: 30px;
        /*color: #fff;*/
        color: black;
        background-color: #00000000 !important;
        font-size: 30px;
        font-family: 'Playfair Display', serif;
        font-weight: 600;
    }

    .card-body{
        color: black;
        padding: 0px 20px;
        text-align: center;
        font-size:20px;
        font-weight: 600;
        background-color: white;
    }

    .card:hover p{
        /*color: #336600;*/
        color: lightblue;
        font-family: 'Playfair Display', serif;
        font-weight:bold;
    }

    .card:hover{
        transform: scale(1.05);
        /*box-shadow: 1px 2px 2px 1px #33cc00;*/
        box-shadow: 1px 2px 2px 1px lightblue;
    }

    .about h3{
        /*color: #005ca8;*/
        color: green;
        font-family: 'Londrina Sketch', cursive;
        font-size: 50px;
        font-weight: bold !important;
        text-transform: none !important;
        margin-bottom: 10px;
        text-shadow: none !important;
        line-height: 60px;
        text-align: left;
    }

    .about p{
        color: #000;
        font-family: 'Open Sans';
        font-size: 16px;
        text-transform: none !important;
        margin-bottom: 20px;
        text-shadow: none !important;
        line-height: 26px;
        text-align: left;
    }

    .blue{
        /*border: 2px solid black;*/
        background-image: url('images/g2.png');
        height: 700px;
        width: 100%;
        background-repeat: no-repeat;
        background-size: cover;
        /*transform: scaleY(-1);*/
        /*background-position: center;*/
        /*overflow: hidden;*/
        margin-top: -10px;
        padding: 50px 0 150px 0;
    }

    .blue h2{
        color: #FCED1E;
        font-family: 'Londrina Sketch', cursive;
        font-size: 50px;
        font-weight: bold !important;
        margin-bottom: 10px;
        line-height: 55px;
        text-align: left;
    }

    .blue p{
        color: white;
        font-family: 'open sans';
        font-size: 16px;
        font-weight: normal;
        margin-bottom: 10px;
        line-height: 26px;
        text-align: left;
    }

    .blue ul{
        margin-bottom: 30px;
        padding: 0;
        /*margin: 0;*/
        list-style-type: none;
    }

    .blue li{
        margin-bottom: 12px;
        /*position: relative;*/
        padding-left: 20px;
        color: white;
        font-size: 16px;
        line-height: 26px;
    }

    .blue i{
        background: #0571b5;
        color: #fff;
        margin-right: 15px;
        width: 20px;
        height: 20px;
        text-align: center;
        border-radius: 50%;
        /*position: absolute;*/
        /*left: 0;*/
    }

    .polaroid{
  width: 284px;
  padding: 10px 10px 20px 10px;
  border: 1px solid #BFBFBF;
  background-color: white;
  box-shadow: 10px 10px 5px #aaaaaa;
}

.rotate_right {
  float: left;
  transform: rotate(7deg);
}

.rotate_left {
  float: left;
  transform: rotate(-8deg);
}
</style>

<body>

    <div>
	   <img src="images/stick.png" style="width: 80%; margin-left: 150px;">
    </div>

    <div class="blue">
        <div class="container" style="padding-top: 165px;">
            <div class="row">
                <div class="col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
                    <h2>Kiddozone Activities</h2>
                    <p>The importance of early childhood development in preparing children for future cannot be understated. The Kiddozone curriculum is created to guarantee that children aged 2 to 6 years old grow steadily and develop holistically. This includes a variety of extra curricular activities such as-</p>
                    <ul>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Inculcate love for sports at an early age.</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Promotes all-round skills development.</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Brings out the elements of joy, excitement, health, good values and interaction with one another.</li>
                    </ul>
                    <p style="font-weight:bold;">We play, learn, and grow together, a mantra that focuses on early childhood development!</p>
                    <p>All fun activities are designed to bring out your child's best. <!--Here are some of the favourite activities for our kids at Kiddozone:--></p>
                </div>
                <div class="col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200"style="padding-top: 84px;">
                    <div class="polaroid rotate_right">
                        <img src="images/img9.jpg" width="264" height="213">
                    </div>

                    <div class="polaroid rotate_left">
                        <img src="images/img14.jpg" width="264" height="213">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3 p-5">
        <div class="row">
            <div class="col-md-6 about aos-init aos-animate" data-aos="fade-right" data-aos-delay="200">
                <h3>Who we are?</h3>
                <p>Early childhood development is crucial for laying the groundwork for a happy future. Preschool education offers a safe setting for children to learn important life skills and develop their minds.</p>
                <p>Kiddozone offers a progressive early childhood education that emphasises the entire development of children's minds. Kiddozone's concept embraces and values each child's uniqueness, helping them to explore their passions and interests at a young age.</p>
            </div>
            <div class="col-md-6 text-center aos-init aos-animate" data-aos="fade-right" data-aos-delay="200"><img src="images/abcd.jpg" style="max-width: 100%;"></div>
        </div>
    </div>

    <div class="container count">
        <div class="row counting">
            <div class="col-md-2 card aos-init aos-animate" data-aos="flip-left">
                <div class="card-header"><h1>1600+</h1></div>
                <div class="card-body"><p>Registered Users</p></div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-2 card aos-init aos-animate" data-aos="flip-left">
                <div class="card-header"><h1>3+</h1></div>
                <div class="card-body"><p>Teaching staff</p></div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-2 card aos-init aos-animate" data-aos="flip-left">
                <div class="card-header"><h1>2000+</h1></div>
                <div class="card-body"><p>Happy Students</p></div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-2 card aos-init aos-animate" data-aos="flip-left">
                <div class="card-header"><h1>10+</h1></div>
                <div class="card-body"><p>Years Experience</p></div>
            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>

    <script>
        AOS.init();
    </script>

</body>
</html>