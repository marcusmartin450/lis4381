<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="My online portfolio that illustrates skills acquired while working through various project requirements.">
    <meta name="author" content="Mark K. Jowett, Ph.D.">
    <link rel="icon" href="/favicon.ico">

    <title>Write/Read File</title>

    <?php include_once("../css/include_css.php"); ?>
</head>
<body>
    <?php include_once("../global/nav.php"); ?>

    <div class="container">
        <div class="starter-template">
            <div class="page-header">
                <?php include_once("global/header.php"); ?>
            </div>

            <!-- Start form-building -->
            <!-- 
                Standard rules for all Bootstrap form layouts:
                - Always use <form role="form"> (helps improve accessibility for people using screen readers)
                - Wrap labels and form controls in <div class="form-group"> (needed for optimum spacing)
                - Add class .form-control to all textual <input>, <textarea>, and <select> elements
            -->
            <h2>File Data</h2>
            <form class="form-horizontal" role="form" method="post" action="process.php">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="comment">Comment:</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="5" name="comment" id="comment" placeholder="Please enter text here..."></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
            </form>
            <!-- End form-building -->

            <?php include_once("global/footer.php"); ?>
        </div> <!-- end starter-template -->
    </div> <!-- end container -->

    <!-- Bootstrap JavaScript -->
    <!-- Placed at end of document so pages load faster -->
    <?php include_once("../js/include_js.php"); ?>

    <script>
        $(document).ready(function(){
            $('#myTable').DataTable({
                responsive: true
            });
        });
    </script>
</body>
</html>
