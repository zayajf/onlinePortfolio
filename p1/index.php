<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="My online portfolio that illustrates skills acquired while working through various project requirements.">
		<meta name="author" content="Mark K. Jowett, Ph.D.">
    <link rel="icon" href="favicon.ico">

		<title>LIS4381 - Project 1</title>		
		<?php include_once("../css/include_css.php"); ?>			
  </head>

  <body>

		<?php include_once("../global/nav.php"); ?>
		
		<div class="container">
			<div class="starter-template">
				<div class="page-header">
					<?php include_once("global/header.php"); ?>	
				</div>
				<p class="text-justify">
					<strong>Description:</strong> 1. Create a laucher icon image and display it in both activities (screens);<br>
                    &emsp; &emsp; &emsp; &emsp; &emsp; &ensp; 2. Must add background color(s) to both activities;<br>
                    &emsp; &emsp; &emsp; &emsp; &emsp; &ensp; 3. Must add border around image and button;<br>
                    &emsp; &emsp; &emsp; &emsp; &emsp; &ensp; 4. Must add text shadow (button);<br> 
				</p>

				<h4>Screenshot of App running in android studio</h4>
				<img src="img/img1.png" class="img-responsive center-block" alt="JDK Installation">

				<h4>Screenshot of My Business Card App</h4>
				<img src="img/img2.png" class="img-responsive center-block" alt="Android Studio Installation">
                
                <h4>Screenshot of My Business Card Details</h4>
				<?php include_once "global/footer.php"; ?>

			</div> <!-- starter-template -->
    </div> <!-- end container -->

		<!-- Bootstrap JavaScript
				 ================================================== -->
		<!-- Placed at end of document so pages load faster -->		
		<?php include_once("../js/include_js.php"); ?>			
  </body>
</html>
