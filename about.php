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

    .counter{
        border-left: 2px solid red;
    }

    .counting{
        background: url('images/img17.jpg');
    /* height: 200px; */
    /* width: 90%; */
    box-sizing: border-box;
    }
    .count{
    width: 100% !important;
    margin-bottom: 150px;
    margin-top: 50px;
}

.card {
  
  /* width: 250px; */
  /* background-color: transparent; */
  border: 1px solid #ccc;
  /* margin: 20px; */
  transition: 0.3s;
  margin-top: 70px;
  margin-bottom: -5px;
  /* height: 200px; */
  background-color: #00000000 !important;
}

.card-header h1{
  text-align: center;
  padding: 30px;
  color: #fff;
  background-color: #00000000 !important;
  font-size: 30px;
  /* font-family: cursive; */
  font-family: 'Playfair Display', serif;
  font-weight: 600;
}
.card-body {
  color: black;
  margin-top: 20px;
  padding: 0px 20px;
  text-align: center;
  font-size:20px;
  font-weight: 600;
  background-color: white;
  
}
.card:hover p{
  color: #336600;
  /* font-family: sans-serif; */
  font-family: 'Playfair Display', serif;
  font-weight:bold;
}
.card:hover {
  transform: scale(1.05);
  box-shadow: 1px 2px 2px 1px #33cc00;
  

}

</style>

<body>

<div style="margin-left: 98px;">
	<img src="images/blackboard.png" style="height: 550px; margin: auto; width: 90%;">
</div>


<div class="container-fluid">
    <div class="row">
        <!-- <div class="col-md-2"></div> -->
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
        <!-- <div class="col-md-2"></div> -->
    </div>
</div>



<div class="container count">
    <div class="row counting">
        <div class="col-md-3 card aos-init aos-animate" data-aos="flip-left">
            <div class="card-header"><h1>1250</h1></div>
            <div class="card-body"><p>Pick Up Points</p></div>
        </div>
        <div class="col-md-3 card aos-init aos-animate" data-aos="flip-left">
            <div class="card-header"><h1>3952</h1></div>
            <div class="card-body"><p>Workers All Time</p></div>
        </div>
        <div class="col-md-3 card aos-init aos-animate" data-aos="flip-left">
            <div class="card-header"><h1>1350</h1></div>
            <div class="card-body"><p>Garbage Collector</p></div>
        </div>
        <div class="col-md-3 card aos-init aos-animate" data-aos="flip-left">
            <div class="card-header"><h1>1580</h1></div>
            <div class="card-body"><p>Registered Users</p></div>
        </div>
    </div>
</div>




<?php include('footer.php'); ?>

</body>
</html>