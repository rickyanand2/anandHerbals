<!DOCTYPE html>

<!--[if IE 8]>               <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
	<!--<![endif]-->

		<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width" />
		<link rel="icon" type="image/png" href="../../webroot/img/favicon.ico" />
		<title> Thank you for your visit </title>
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
		?>

		<?php include "navigationBar.php"
		?>

		<!-- Page Navigation End -->

		<div class="row">
			<div class="large-12 columns">
				<div class="small-4 columns hide-for-small">
					<img class="biggerImage" src="../../webroot/img/plant2.png" alt="plant" />
					<br>

				</div>

				<div class="large-8 columns">
					
						<h3>About Us </h3>

						<p>
							Anand Counsultants originates from a company having more than 20 years of experience in the field of business.
							With the existence of established operating base at Jabalpur town, Anand Enterprises decided to exploit energy recovery potential from renewable sources of energy.
							Our vision is to build a sustainable future and a cleaner environment for everyone to live in.
						</p>
						<p>
							After steady growth in recent years with a number of small and big projects under our portfolio, we are now looking to expand and provide our services overseas in Asia and Asia Pacific.
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

