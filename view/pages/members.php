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
			<div class="small-12 columns">

				<p>
					<h5> Welcome to our member's area</h5>
					<?php echo $user_check; ?>
				</p>

				<h3>Information:</h3>
			</div>
		</div>

		<div class="row">

			<!-- Main Content Section -->
			<!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
			<div class="large-9 push-3 columns">

				<div class="row">
					<div class="large-12 columns hide-for-small">
						<img src="../../webroot/img/chartbiogas.jpg" alt="chart"/>

					</div>
				</div>
				<div class="row">
					<div class="small-12 columns">
						<h3>What is a Biodigester?</h3>

						<p>
							A device that mimics the natural decay process of organic matter
							Biogas is produced from anaerobic decay (decay that occurs without oxygen)
						</p>

						<h3>Anaerobic Digestion in a Biodigester</h3>
						<p>
							Digester is fed with a mixture of water and waste called a slurry
							Daily fresh slurry is added, displacing previous days load that bacteria have started to
							digest
							First, digestible organic matter is broken down by acid-producing bacteria
							By-products are then broken down by methane-producing bacteria
						</p>
					</div>

				</div>
			</div>

			<!-- Nav Sidebar -->
			<!-- This is source ordered to be pulled to the left on larger screens -->
			<div class="large-3 pull-9 columns">

				<ul class="side-nav">
					<li>
						<a href="#">BioGas</a>
					</li>
					<li>
						<a href="#">Section 2</a>
					</li>
					<li>
						<a href="#">Section 3</a>
					</li>
					<li>
						<a href="#">Section 4</a>
					</li>
					<li>
						<a href="#">Section 5</a>
					</li>
					<li>
						<a href="#">Section 6</a>
					</li>
				</ul>

				<p><img src="http://placehold.it/320x240&text=Ad" />
				</p>

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