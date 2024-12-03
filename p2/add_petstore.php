<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="My online portfolio that illustrates skills acquired while working through various project requirements.">
    <meta name="author" content="Marcus Martin">   
    <link rel="icon" href="favicon.ico">
    <title>Assignment5</title>
    <?php include_once("../css/include_css.php"); ?>
</head>
<body>

    <?php include_once("../global/nav.php"); ?>

    <div class="container">
        <div class="starter-template">
            <div class="page-header">
                <?php include_once("global/header.php"); ?>    
            </div>

            <h2>Pet Stores</h2>

            <form id="defaultForm" method="post" class="form-horizontal" action="add_petstore_process.php">
    <div class="form-group">
        <label class="col-sm-4 control-label">Name:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="name" maxlength="30" placeholder="John Doe" />
        </div>
    </div>

    <!-- Added Street field -->
    <div class="form-group">
        <label class="col-sm-4 control-label">Street:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="street" maxlength="30" placeholder="Max 30 characters" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">City:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="city" maxlength="30" placeholder="Max 30 characters" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">State:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="state" maxlength="2" placeholder="FL" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Zip:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="zip" maxlength="9" placeholder="5 or 9 #" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Phone:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="phone" maxlength="10" placeholder="10 digits no -" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Email:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="email" placeholder="mm20u@fsu.edu" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">URL:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="url" maxlength="100" placeholder="google.com" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">YTD Sales:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="ytd_sales" maxlength="10" placeholder="Example 30" />
        </div>
    </div>

    <!-- Notes field as a standard input (no placeholder) -->
    <div class="form-group">
        <label class="col-sm-4 control-label">Notes:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="notes" maxlength="100" />
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-6 col-sm-offset-3">
            <button type="submit" class="btn btn-primary" name="add" value="Add">Add</button>
        </div>
    </div>
</form>


            <?php include_once "global/footer.php"; ?>
        </div> <!-- end starter-template -->
    </div> <!-- end container -->

    <!-- Bootstrap JavaScript
    ================================================== -->
    <!-- Placed at end of document so pages load faster -->
    <?php //include_once("../js/include_js.php"); ?>

    <script type="text/javascript">
    $(document).ready(function() {
        $('#defaultform').formValidation({
            message: 'This value is not valid',
            icon: {
                valid: 'fa fa-check',
                invalid: 'fa fa-times',
                validating: 'fa fa-refresh'
            },
            fields: {
                name: {
                    validators: {
                        notEmpty: {
                            message: 'Name required'
                        },
                        stringLength: {
                            min: 1,
                            max: 30,
                            message: 'Name no more than 30 characters'
                        },
                        regexp: {
                            regexp: /^[\w\-\s]+$/,
                            message: 'Name can only contain letters, numbers, hyphens, and spaces'
                        },                                    
                    },
                },
                // Added validation for the street field
                street: {
                    validators: {
                        notEmpty: {
                            message: 'Street required'
                        },
                        stringLength: {
                            max: 30,
                            message: 'Street no more than 30 characters'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z0-9,\-\.\s]+$/,
                            message: 'Street can only contain letters, numbers, commas, hyphens, and periods'
                        },
                    },
                },
                city: {
                    validators: {
                        notEmpty: {
                            message: 'City required'
                        },
                        stringLength: {
                            max: 30,
                            message: 'City no more than 30 characters'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z0-9\-\s]+$/,
                            message: 'City can only contain letters, numbers, hyphens, and spaces'
                        },
                    },
                },
                state: {
                    validators: {
                        notEmpty: {
                            message: 'State required'
                        },
                        stringLength: {
                            min: 2,
                            max: 2,
                            message: 'State must be 2 characters'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z]+$/,
                            message: 'State can only contain letters'
                        },
                    },
                },
                zip: {
                    validators: {
                        notEmpty: {
                            message: 'Zip code required'
                        },
                        stringLength: {
                            min: 5,
                            max: 9,
                            message: 'Zip must be between 5 and 9 digits'
                        },
                        regexp: {
                            regexp: /^[0-9]+$/,
                            message: 'Zip can only contain numbers'
                        },
                    },
                },
                phone: {
                    validators: {
                        notEmpty: {
                            message: 'Phone number required'
                        },
                        stringLength: {
                            min: 10,
                            max: 10,
                            message: 'Phone must be 10 digits'
                        },
                        regexp: {
                            regexp: /^[0-9]+$/,
                            message: 'Phone can only contain numbers'
                        },
                    },
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: 'Email required'
                        },
                        emailAddress: {
                            message: 'Email address is not valid'
                        }
                    },
                },
                url: {
                    validators: {
                        notEmpty: {
                            message: 'URL required'
                        },
                        uri: {
                            message: 'The URL is not valid'
                        },
                        stringLength: {
                            max: 100,
                            message: 'URL no more than 100 characters'
                        },
                    },
                },
                ytd_sales: {
                    validators: {
                        notEmpty: {
                            message: 'YTD Sales required'
                        },
                        regexp: {
                            regexp: /^[0-9]+(\.[0-9]{1,2})?$/,
                            message: 'YTD Sales can only contain numbers and a decimal point (if used)'
                        },
                        stringLength: {
                            max: 10,
                            message: 'YTD Sales no more than 10 digits'
                        },
                    },
                },
                notes: {
                    validators: {
                        stringLength: {
                            max: 100,
                            message: 'Notes no more than 100 characters'
                        }
                    }
                }
            }
        });
    });
    </script>

</body>
</html>

    
    