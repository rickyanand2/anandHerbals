<!DOCTYPE html>
<?php
//Start a session
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	//Get username and password
	$getUsername = $_POST["username"];
	$getPassword = $_POST["password"];

	echo "Username in form: " . $getUsername . "<br/>";
	echo "Password in form: " . $getPassword . "<br/>";

	require_once dirname(__FILE__) . "/../../controller/sessionsController.php";

	$sessionObject = new SessionsController;
	$sessionObject -> secure_session();
	$sessionObject -> validateUser($getUsername, $getPassword);

	//Check the if username is set
	echo "Error class variable is ".$errorClass;
	
}

?>

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
					<form  method="post" action="">
						<fieldset>
							<legend>
								Login
							</legend>

							<?php
							// If session is not created
							if($errorClass != "error") :
							?>
							<div class="row">
								<div class="large-6 columns">
									<label>Username </label>
									<input type="text" id="username" name="username" >
								</div>
							</div>

							<div class="row">
								<div class="large-6 columns">
									<label>Password </label>
									<input type="password" name="password" id="password" >
									<br/>
								</div>
							</div>

							<?php else: ?>

							<!-- Username Error Section							-->
							<div class="row">
								<div class="large-6 columns error">
									<label>Username </label>
									<input type="text" id="username" name="username" >
									<small class="error">Invalid entry</small>
								</div>
							</div>

							<!-- Password Error Section -->
							<div class="row">
								<div class="large-6 columns error">
									<label>Password </label>
									<input type="password" name="password" id="password" >
									<small class="error">Invalid entry</small>
									<br/>
								</div>
							</div>

							<?php
							endif;
							?>

							<div class="row">
								<div class="large-6 columns">
									<div class="row">
										<div class="large-7 columns">
											<input class="button" type="submit" value="Sign In">
										</div>
										<div class="row collapse">
											<div class="large-5 columns">
												<a href="register.php" placeholder="large-3.columns"> Register </a>
											</div>
										</div>

									</div>
								</div>
							</div>

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

