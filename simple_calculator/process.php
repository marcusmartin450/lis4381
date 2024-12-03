<?php
// Show errors: at least 1 and 4...
ini_set('display_errors', 1);
ini_set('log_errors', 1);
// ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);

// Uncomment below for initial testing of form inputs
// exit(print_r($_POST));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="My online portfolio that illustrates skills acquired while working through various project requirements.">
    <meta name="author" content="Mark K. Jowett, Ph.D.">
    <link rel="icon" href="favicon.ico">

    <title>Write Read File</title>
    <?php include_once("../css/include_css.php"); ?>
</head>
<body>
    <?php include_once("../global/nav.php"); ?>

    <div class="container">
        <div class="starter-template">
            <div class="page-header">
                <?php include_once("global/header.php"); ?>
            </div>
        </div>
        <p class="text-justify">
            <?php
            // Create/open file for appending write/read
            $myfile = fopen("file.txt", "w+") or exit("Unable to open file!");
            $txt = htmlspecialchars($_POST['comment']); // Sanitize input
            fwrite($myfile, $txt); // Write to file
            fclose($myfile); // Close file

            // Open file for reading and display content
            $myfile = fopen("file.txt", "r+") or exit("Unable to open file!");
            while (!feof($myfile)) {
                echo fgets($myfile) . "<br />";
            }
            fclose($myfile); // Close file
            ?>
        </p>
    </div>

    <?php include_once("global/footer.php"); ?>

    <!-- Bootstrap JavaScript -->
    <!-- Placed at end of document so pages load faster -->
    <?php include_once("../js/include_js.php"); ?>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                responsive: true
            });
        });
    </script>
</body>
</html>
