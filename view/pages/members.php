<!DOCTYPE html>
<?php

session_start();

//Redirect the page back to login if session variable is not set
$user_check = $_SESSION['uname'];

if (!isset($user_check)) {

	$host = $_SERVER['HTTP_HOST'];
	$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
	$extra = 'login.php';

	header("Location: http://$host$uri/$extra");
	exit ;
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
		<title> Sustainability </title>
		<link rel="stylesheet" href="../../webroot/css/normalize.css" />
		<link rel="stylesheet" href="../../webroot/css/foundation.css" />
		<link rel="stylesheet" href="../../webroot/css/mycss.css" />
		<link href='http://fonts.googleapis.com/css?family=Sanchez' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Habibi' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Montez' rel='stylesheet' type='text/css'>
		<script src="../../webroot/js/vendor/custom.modernizr.js"></script>

	</head>
	<body class="bodyAttr">

		<!-- Page Navigation start -->
		<?php

/* Declare variables for this page */
$currentFileName = basename($_SERVER['PHP_SELF'], "");
include "navigationBar.php";
		?>

		<!-- Page Navigation ends -->

		<div class="row">
			<div class="large-12 columns">
				<div class="large-8 columns">

					<h5> WELCOME TO OUR MEMBERS AREA </h5>

				</div>
				<div class="large-2 large-offset-2 columns">
					Enjoy your stay and look at our processes
				</div>

			</div>
		</div>

		<div class="row">
			<div class="large-12 columns">
				<div class="large-4 columns hide-for-small">
					<img class="mediumImage" src="../../webroot/img/biometh.jpg" alt="image"/>

				</div>
				<div class="large-8 columns">
					<h6>Process 1 </h6>
					<p>
						Bio-methanization Project involved treatment and recycle of solid and liquid waste into organic manure and to recover Biogas to produce electricity.
						in addition to prevention of water pollution taking place at River Pariyat.
					</p>
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