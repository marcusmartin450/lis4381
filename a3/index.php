<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Requirements: Frequently, not only will you be asked to design and develop Web applications, but you will also be asked to create (design) database solutions that interact with the client/server (e.g., web) application-and, in fact, the data repository is the 'core' of all Web applications. Hence, the following business requirements. A pet store owner, who owns a number of pet stores, requests that you develop a Web application whereby he and his team can record, track, and maintain relevant company data, based upon the following business rules: 1. A customer can buy many pets, but each pet, if purchased, is purchased by only one customer. 2. A store has many pets, but each pet is sold by only one store. Remember: an organization's business rules are the key to a well-designed database! For the Pet's R-Us business, it's important to ask the following questions to get a better idea of how the database and Web application should work together. Can a customer exist without a pet? Seems reasonable. Yes (optional) Can a pet exist without a customer? Again, yes. (optional) Can a pet store not have any pets? It wouldn't be a pet store. (mandatory) Can a pet exist without a pet store? Not in this design. (mandatory) Solutions: A3 MW ASSOL Petstore ERD">
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
                <strong>Description:</strong> Requirements: Frequently, not only will you be asked to design and develop Web applications, but you will also be asked to create (design) database solutions that interact with the client/server (e.g., web) application—and, in fact, the data repository is the "core" of all Web applications. Hence, the following business requirements. A pet store owner, who owns a number of pet stores, requests that you develop a Web application whereby he and his team can record, track, and maintain relevant company data, based upon the following business rules: 1. A customer can buy many pets, but each pet, if purchased, is purchased by only one customer. 2. A store has many pets, but each pet is sold by only one store. Remember: an organization's business rules are the key to a well-designed database! For the Pet's R-Us business, it's important to ask the following questions to get a better idea of how the database and Web application should work together. Can a customer exist without a pet? Seems reasonable. Yes (optional) Can a pet exist without a customer? Again, yes. (optional) Can a pet store not have any pets? It wouldn't be a pet store. (mandatory) Can a pet exist without a pet store? Not in this design. (mandatory)
            </p>

            <h4>PetStore ERD</h4>
            <img src="img/peterd.png" class="img-responsive center-block" alt="JDK Installation">

            <h4>My Event App</h4>
            <img src="img/eventapp.png" class="img-responsive center-block" alt="Android Studio Installation">

            <h4>My Event App</h4>
            <img src="img/eventappcal.png" class="img-responsive center-block" alt="AMPPS Installation">
            
            <h4>Solutions</h4>
            <ul>
                <li><a href="path/to/A3_MWB_file">A3 MWB</a></li>
                <li><a href="path/to/A3_SQL_file">A3 SQL</a></li>
            </ul>

            <?php include_once "global/footer.php"; ?>

        </div> <!-- starter-template -->
    </div> <!-- end container -->

    <!-- Bootstrap JavaScript
        ================================================== -->
    <!-- Placed at end of document so pages load faster -->		
    <?php include_once("../js/include_js.php"); ?>			
</body>
</html>
