<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="My online portfolio that illustrates skills acquired while working through various project requirements.">
	<meta name="author" content="Jonathon Zayas">
	<link rel="icon" href="favicon.ico">

	<title>My Online Portfolio</title>

		<?php include_once("css/include_css.php"); ?>	

<!-- Carousel styles -->
<style type="text/css">
h2
{
	margin: 0;     
	color: #666;
	padding-top: 50px;
	font-size: 52px;
	font-family: "trebuchet ms", sans-serif;    
}
.item
{
	background: #333;    
	text-align: center;
	height: 300px !important;
}
.carousel
{
  margin: 20px 0px 20px 0px;
}
.bs-example
{
  margin: 20px;
}
</style>

</head>
<body>

	<?php include_once("global/nav_global.php"); ?>
	
	<div class="container">
		 <div class="starter-template">
						<div class="page-header">
							<?php include_once("global/header.php"); ?>	
						</div>

<!-- Start Bootstrap Carousel  -->
<div class="bs-example">
	<div
      id="myCarousel"
		class="carousel"
		data-interval="1000"
		data-pause="hover"
		data-wrap="true"
		data-keyboard="true"			
		data-ride="carousel">
		
    	<!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>   
       <!-- Carousel items -->
        <div class="carousel-inner" style="margin: 0 auto">

			<!-- -Note: you will need to modify the code to make it work with *both* text and images.  -->
          <div class="active item" style="background: url(img/robot.jpg) no-repeat left center; background-size: cover;">
                <h2>Interest</h2>
                <div class="carousel-caption">
                <h3>Robotics</h3>
                  <p></p>
                </div>
          </div> 

            <div class="item" style="background: url(img/code.jpeg) no-repeat left center; background-size: cover;">
                <h2>Interest</h2>
                <div class="carousel-caption">
                  <h3>Coding</h3>
                  <p></p>
                  <!-- <img src="img/slide2.png" alt="Slide 2"> -->								
                </div>
            </div>

            <div class="item" style="background: url(img/ai.jpg) no-repeat left center; background-size: cover;">
                <h2>Interest</h2>
                <div class="carousel-caption">
                  <h3>Artificial Intelligence</h3>
                  <p></p>
                  <!-- <img src="img/slide3.png" alt="Slide 3"> -->	
                </div>
            </div>

        </div>
        <!-- Carousel nav -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>
<!-- End Bootstrap Carousel  -->
						
<?php
include_once "global/footer.php";
?>

	        </div> <!-- end starter-template -->
    </div> <!-- end container -->

		<?php include_once("js/include_js.php"); ?>	
	
</body>
</html>
