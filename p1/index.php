<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Project 1 : Description and deliverables">
    <meta name="author" content="Marcus Martin">
    <link rel="icon" href="favicon.ico">

    <title>Project 1</title>
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
                <strong>Description:</strong> In this project, I was tasked with creating an Android application that displays a picture on the main screen. The application is designed to allow users to click on the image, which then leads to a detailed view with more information. This requires implementing various user interface enhancements to ensure a visually appealing and functional experience, including setting a launcher icon, adding background colors, and applying styling elements such as borders and text shadows. These enhancements aim to improve the overall aesthetics and usability of the app, creating an engaging user experience.
            </p>

            <h4>My Business Card</h4>
            <img src="img/firstbusiness.png" class="img-responsive center-block" alt="JDK Installation">

            <h4>My Business Card</h4>
            <img src="img/secondbusiness.png" class="img-responsive center-block" alt="Android Studio Installation">

            

            <?php include_once "global/footer.php"; ?>

        </div> <!-- starter-template -->
    </div> <!-- end container -->

    <!-- Bootstrap JavaScript
        ================================================== -->
    <!-- Placed at end of document so pages load faster -->		
    <?php include_once("../js/include_js.php"); ?>			
</body>
</html>
