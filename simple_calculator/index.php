<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="My online portfolio that illustrates skills acquired while working through various project requirements.">
    <meta name="author" content="Marcus Martin">   
    <link rel="icon" href="favicon.ico">
    <title>Simple Calculator</title>
    <?php include_once("../css/include_css.php"); ?>
    <style>
        body {
            background-color: #d2b48c; /* Tan background */
        }
    </style>
</head>
<body>

    <?php include_once("../global/nav.php"); ?>

    <div class="container">
        <div class="starter-template">
            <div class="page-header">
                <?php include_once("global/header.php"); ?>    
            </div>

            <h2>Perform Calculation</h2>
<form class="form-horizontal" role="form" method="post" action="process_functions.php">
  <div class="form-group">
    <label class="control-label col-sm-2" for="num1">Num1:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="num1" id="num1" placeholder="Enter first number">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="num2">Num2:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="num2" id="num2" placeholder="Enter second number">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-12">
      <label class="checkbox-inline">
        <input type="radio" name="operation" id="addition" value="addition" checked="true"> addition
      </label>
      <label class="checkbox-inline">
        <input type="radio" name="operation" id="subtraction" value="subtraction"> subtraction
      </label>
      <label class="checkbox-inline">
        <input type="radio" name="operation" id="multiplication" value="multiplication"> multiplication
      </label>
      <label class="checkbox-inline">
        <input type="radio" name="operation" id="division" value="division"> division
      </label>
      <label class="checkbox-inline">
        <input type="radio" name="operation" id="exponentiation" value="exponentiation"> exponentiation
      </label>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-12">
      <button type="submit" class="btn btn-default">Calculate</button>
    </div>
  </div>
</form>


            <?php include_once "global/footer.php"; ?>
        </div> <!-- end starter-template -->
    </div> <!-- end container -->

    <!-- Bootstrap JavaScript -->
    <?php include_once("../js/include_js.php"); ?>

    <script type="text/javascript">
    $(document).ready(function() {
        $('#defaultForm').formValidation({
            message: 'This value is not valid',
            icon: {
                valid: 'fa fa-check',
                invalid: 'fa fa-times',
                validating: 'fa fa-refresh'
            },
            fields: {
                num1: {
                    validators: {
                        notEmpty: {
                            message: 'Num1 is required'
                        },
                        regexp: {
                            regexp: /^[0-9]+$/,
                            message: 'Num1 must be a number'
                        }
                    }
                },
                num2: {
                    validators: {
                        notEmpty: {
                            message: 'Num2 is required'
                        },
                        regexp: {
                            regexp: /^[0-9]+$/,
                            message: 'Num2 must be a number'
                        }
                    }
                }
            }
        });
    });
    </script>

</body>
</html>
