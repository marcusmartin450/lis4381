<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="My online portfolio that illustrates skills acquired while working through various project requirements.">
	<meta name="author" content="Your Name Here!">
	<link rel="icon" href="favicon.ico">

	<title>CRSXXXX - Assignment4</title>
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

					<form id="defaultForm" method="post" class="form-horizontal" action="#">
						
						<div class="form-group">
							<label class="col-sm-4 control-label">City:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="city" maxlength="30" />
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-4 control-label">State:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="state" maxlength="2" />
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-4 control-label">Zip:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="zip" maxlength="9" />
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-4 control-label">Phone:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="phone" maxlength="10" />
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-4 control-label">Email:</label>
							<div class="col-sm-4">
								<input type="email" class="form-control" name="email" />
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-4 control-label">URL:</label>
							<div class="col-sm-4">
								<input type="url" class="form-control" name="url" maxlength="100" />
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-4 control-label">YTD Sales:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="ytd_sales" maxlength="10" />
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
					city: {
						validators: {
							notEmpty: { message: 'City is required' },
							stringLength: {
								max: 30,
								message: 'City cannot exceed 30 characters'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9\-\s]+$/,
								message: 'City can only contain letters, numbers, hyphens, and spaces'
							}
						}
					},
					state: {
						validators: {
							notEmpty: { message: 'State is required' },
							stringLength: {
								min: 2,
								max: 2,
								message: 'State must be 2 characters'
							},
							regexp: {
								regexp: /^[a-zA-Z]+$/,
								message: 'State can only contain letters'
							}
						}
					},
					zip: {
						validators: {
							notEmpty: { message: 'Zip is required' },
							stringLength: {
								min: 5,
								max: 9,
								message: 'Zip must be between 5 and 9 digits'
							},
							regexp: {
								regexp: /^[0-9]+$/,
								message: 'Zip can only contain numbers'
							}
						}
					},
					phone: {
						validators: {
							notEmpty: { message: 'Phone number is required' },
							stringLength: {
								min: 10,
								max: 10,
								message: 'Phone must be exactly 10 digits'
							},
							regexp: {
								regexp: /^[0-9]+$/,
								message: 'Phone can only contain numbers'
							}
						}
					},
					email: {
						validators: {
							notEmpty: { message: 'Email is required' },
							emailAddress: { message: 'Enter a valid email address' }
						}
					},
					url: {
						validators: {
							uri: { message: 'The URL is not valid' },
							stringLength: {
								max: 100,
								message: 'URL cannot exceed 100 characters'
							}
						}
					},
					ytd_sales: {
						validators: {
							notEmpty: { message: 'YTD Sales is required' },
							regexp: {
								regexp: /^[0-9]+(\.[0-9]+)?$/,
								message: 'YTD Sales can only contain numbers and a decimal point (if used)'
							},
							stringLength: {
								max: 10,
								message: 'YTD Sales cannot exceed 10 characters, including decimal point'
							}
						}
					}
			}
	});
});
</script>

</body>
</html>
