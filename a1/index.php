<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="My online portfolio that illustrates skills acquired while working through various project requirements.">
		<meta name="author" content="Marcus Martin">
    <link rel="icon" href="favicon.ico">

		<title>Lis4381 - Assignment1</title>		
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
					<strong>Description:</strong> In this assignment, we completed the installation of AMPPS for web application development, configured the JDK for Java programming, and set up Visual Studio Code for Java development. We also installed Android Studio and successfully created a basic Android app using Java. Finally, we pushed the local repository to Bitbucket and provided read-only access, ensuring all tools and environments are ready for future projects. The README.md file includes screenshots of the AMPPS installation, the running JDK "Hello, World" program, and the Android app 
				</p>

				<h4>Java Installation</h4>
				<img src="img/javainstallation.png" class="img-responsive center-block" alt="JDK Installation">

				<h4>Android Studio Installation</h4>
				<img src="img/myfirstapp.png" class="img-responsive center-block" alt="Android Studio Installation">

				<h4>AMPPS Installation</h4>
				<img src="img/phpsetup.png" class="img-responsive center-block" alt="AMPPS Installation">
				
				<?php include_once "global/footer.php"; ?>

			</div> <!-- starter-template -->
    </div> <!-- end container -->

		<!-- Bootstrap JavaScript
				 ================================================== -->
		<!-- Placed at end of document so pages load faster -->		
		<?php include_once("../js/include_js.php"); ?>			
  </body>
</html>
