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
</head>
<body>

    <?php include_once("../global/nav.php"); ?>

    <div class="container">
        <div class="starter-template">
            <div class="page-header">
                <?php include_once("global/header.php"); ?>    
            </div>

            <h2>Perform Calculation</h2>

            <form id="defaultForm" method="post" class="form-horizontal" action="process_functions.php">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Num1:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="num1" maxlength="30" required />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label">Num2:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="num2" maxlength="30" required />
                    </div>
                </div>

                <div class="form-group text-center">
                    <div>
                        <label class="radio-inline">
                            <input type="radio" name="operation" value="addition" required> Addition
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="operation" value="subtraction"> Subtraction
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="operation" value="multiplication"> Multiplication
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="operation" value="division"> Division
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="operation" value="exponentiation"> Exponentiation
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary">Calculate</button>
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
