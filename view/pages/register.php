<!DOCTYPE html>

<!--[if IE 8]>               <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
	<!--<![endif]-->

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width" />
		<link rel="icon" type="image/png" href="../../webroot/img/favicon.ico" />
		<title> Sign Up </title>
		<link rel="stylesheet" href="../../webroot/css/normalize.css" />
		<link rel="stylesheet" href="../../webroot/css/foundation.css" />
		<link rel="stylesheet" href="../../webroot/css/mycss.css" />
		<link href='http://fonts.googleapis.com/css?family=Sanchez' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Habibi' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Montez' rel='stylesheet' type='text/css'>
		<script src="../../webroot/js/vendor/custom.modernizr.js"></script>

	</head>
	<body class="bodyAttr">

		<div class="row">
			<div class="large-12 columns topShade">

				<img src="../../webroot/img/anandLogo.png" alt="Anand Renewable Energy Consultancy"/>
			</div>
		</div>

		<div class="row">
			<div class="large-12 columns">

				<h6>Please provide the following details:</h6>
				<form>
					<fieldset>
						<legend>
							Registration
						</legend>

						<div class="row">
							<div class="small-6">
								<div class="row">
									<div class="small-3 columns">
										<label for="fname" class="right inline">First Name</label>
									</div>
									<div class="small-9 columns">
										<input type="text" id="fname" placeholder="Inline Text Input">
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="small-6">
								<div class="row">
									<div class="small-3 columns">
										<label for="lname" class="right inline">Last Name</label>
									</div>
									<div class="small-9 columns">
										<input type="text" id="lname" placeholder="Inline Text Input">
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="small-6">
								<div class="row">
									<div class="small-3 columns">
										<label for="email" class="right inline">Email</label>
									</div>
									<div class="small-9 columns">
										<input type="text" id="email" placeholder="Inline Text Input">
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="small-6">
								<div class="row">
									<div class="small-3 columns">
										<label for="details" class="right inline">Contact Details</label>
									</div>
									<div class="small-9 columns">
										<textarea id="details" placeholder="Inline Text Input"></textarea>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="large-8 columns">
								<br/>
								<br/>
								<label for="checkbox1">
									<input type="checkbox" id="checkbox1">
									<span class="custom checkbox"></span> I accept the terms and conditions of anand consultancy group. </label>
								<br/>
							</div>
						</div>

						<div class="row">
							<div class="large-6 columns">
								<div class="row">
									<div class="large-7 columns">
										<button>
											<a href="#" placeholder="large-3.columns" class="button"> Submit</a>
										</button>
									</div>

								</div>
							</div>
						</div>

						<!-- Rest of the form for email and Textbox area

						<div class="row">
						<div class="large-4 columns">
						<div class="row collapse">
						<label>Input Label</label>
						<div class="small-9 columns">
						<input type="text" placeholder="small-9.columns">
						</div>
						<div class="small-3 columns">
						<span class="postfix">.com</span>
						</div>
						</div>
						</div>
						</div>

						<div class="row">
						<div class="large-12 columns">
						<label>Textarea Label</label>
						<textarea placeholder="small-12.columns"></textarea>
						</div>
						</div>
						-->
					</fieldset>
				</form>

			</div>
		</div>

		<!-- End Content for the page -->

		<!-- Check for Zepto support, load jQuery if necessary -->
		<script>
			document.write('<script src=' + ('__proto__' in {} ? '../js/vendor/zepto' : '../js/vendor/jquery') + '.js><\/script>')
		</script>

		<!-- All javascript plugins -->
		<script src="../js/foundation.min.js"></script>

		<!-- Activate all plugins -->
		<script>
			$(document).foundation('topbar', {
				stickyClass : 'sticky',

			});
		</script>

		<?php
		include ('footer.php');
		?>
	</body>

</html>

