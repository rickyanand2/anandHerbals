<!DOCTYPE html>

<!--[if IE 8]>               <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
	<!--<![endif]-->

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width" />
		<link rel="icon" type="image/png" href="../../webroot/img/favicon.ico" />
		<title> login </title>
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
				<div class="small-4 columns hide-for-small">
					<img class="biggerImage" src="../../webroot/img/plant2.png" alt="plant" />
					<br>

				</div>

				<div class="large-8 columns">
					<h6>Please login to know more about the processes involved. </h6>
					<form>
						<fieldset>
							<legend>
								Login
							</legend>

							<div class="row">
								<div class="large-6 columns">
									<label>Username </label>
									<input type="text" placeholder="large-6.columns">
								</div>
							</div>

							<div class="row">
								<div class="large-6 columns">
									<label>Password </label>
									<input type="text" placeholder="large-6.columns">
									<br/>
								</div>
							</div>
							<div class="row">
								<div class="large-6 columns">
									<div class="row">
										<div class="large-7 columns">
											<button>
												<a href="#" placeholder="large-3.columns" class="button"> Sign In</a>
											</button>
										</div>
										<div class="row collapse">
											<div class="large-5 columns">
												<a href="register.php" placeholder="large-3.columns"> Register </a>
											</div>
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

