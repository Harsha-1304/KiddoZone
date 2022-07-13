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
    .hero-gallery{
        background-image:linear-gradient(#253898, #5737D6);
        width:95%;
        margin:auto;
        padding:80px 50px;
        border-radius:20px;
        color:white;
    }
    .hero-gallery img{
        width:80%;
        margin:auto;
        padding:20px;
    }
    .hero-gallery .txt{
        width:90%;
    }
    .hero{
        position: relative;
        padding:70px 120px 100px 100px;
        background-image:url(images/g1.png);
        background-size:100% 100%;
        background-position:top;
        color:#100051;
    }
    .hero img{
        width:80%;
        padding:30px;
        margin-top:50px;
    }
    .hero h1, .hero p{
        width: 90%;
        margin:auto;
        text-align:center;
    }
    .gallary{
        padding:70px;
        background-image:url(images/g4.png);
    }
    .gallary-heading h2, .gallary-heading p{
        width:fit-content;
        margin:auto;
    }
    .gallary .container .row>*{
        padding:0px;
    }
    
    .gallary .container .gallary-grid .img img{
        width: 100%;
    }
    .gallary .container .gallary-grid{
        position: relative;
        display:flex;
        width: 300px;
        border-radius:5px;
        overflow:hidden;
        align-items:center;
        margin:10px auto;
    }
    .gallary .container .gallary-grid:hover{
        transform:scale(1.05);
        transition:ease-in 0.3s;
    }
    .gallary .container .gallary-grid .img{
        min-width: 100%;
        z-index: 1;
        
    }
    .gallary .container .row{
        position: relative;
        margin-top:50px;
    }
    .gallary .container .gallary-grid .txt{
    opacity: 0;
    background-color: rgba(0, 0, 0, 0.7);
    transition:ease-in 0.5s;
    color: white;
    position: absolute;
    display: flex;
    height: 100%;
    bottom: 0;
    z-index: 2222;
    width: 100%;
    }

    .gallary .container .gallary-grid:hover .txt{
        opacity: 1;
    }
    .gallary .container .gallary-grid .txt h6{
        width: fit-content;
        margin: auto;
    }
    .img-grid img{
        padding:5px;
    }
    .x{
        height:fit-content;
    }
</style>

<body>

    <!--div class="hero">
        <div class="container">
            <div class="align-items-center row">
                <div class="hero-img col-6"><img src="images/gallary.svg" alt=""></div>
                <div class="col-6">
                    <h1>Welcome to KIDDOZONE</h1>
                    <br>
                    <p><q>The most beautiful things are not associated with money; they are memories and moments. If you don't celebrate those, they can pass you by.</q></p>
                    <br>
                    <p>- Alek Wek</p>
                </div>
            </div>
        </div>
    </div-->
    <div class="hero-gallery">
        <div class="main row">
            <div class="col-8">
            <div class="txt">
                <h1>Welcome to KIDDOZONE</h1>
                    <br>
                    <p><q>The most beautiful things are not associated with money; they are memories and moments. If you don't celebrate those, they can pass you by.</q></p>
                    <br>
                    <p>- Alek Wek</p>
            </div>    
            </div>
            <div class="col-4">
                <img src="images/image.svg" alt="">
            </div>
        </div>
    </div>


    <div class="gallary">
    <div class="gallary-heading">
                <h2>Gallary</h2>
                <p><q>Ask yourself: “Does this subject move me to feel, think and dream?</q></p>
            </div>
        <div class="container">
            <div class="row  justify-content-between">
                <div class="gallary-grid col-md-3 col-sm-6">
                    <div class="img"><img src="images/img14.jpg" alt=""></div>
                    <div class="txt"><h6>Image Tittle</h6></div>
                </div>
                <div class="gallary-grid col-md-3 col-sm-6">
                    <div class="img"><img src="images/img14.jpg" alt=""></div>
                    <div class="txt"><h6>Image Tittle</h6></div>
                </div>
                <div class="gallary-grid col-md-3 col-sm-6">
                    <div class="img"><img src="images/img14.jpg" alt=""></div>
                    <div class="txt"><h6>Image Tittle</h6></div>
                </div>
                <div class="gallary-grid col-md-3 col-sm-6">
                    <div class="img"><img src="images/img14.jpg" alt=""></div>
                    <div class="txt"><h6>Image Tittle</h6></div>
                </div><div class="gallary-grid col-md-3 col-sm-6">
                    <div class="img"><img src="images/img14.jpg" alt=""></div>
                    <div class="txt"><h6>Image Tittle</h6></div>
                </div>
                <div class="gallary-grid col-md-3 col-sm-6">
                    <div class="img"><img src="images/img14.jpg" alt=""></div>
                    <div class="txt"><h6>Image Tittle</h6></div>
                </div>
                <div class="gallary-grid col-md-3 col-sm-6">
                    <div class="img"><img src="images/img14.jpg" alt=""></div>
                    <div class="txt"><h6>Image Tittle</h6></div>
                </div>
                <div class="gallary-grid col-md-3 col-sm-6">
                    <div class="img"><img src="images/img14.jpg" alt=""></div>
                    <div class="txt"><h6>Image Tittle</h6></div>
                </div>  
                
            </div>
            
        </div>
        
    </div>





    

<?php include('footer.php'); ?>

</body>
</html>