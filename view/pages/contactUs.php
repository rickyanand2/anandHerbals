<!DOCTYPE html>

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
		?>

		<?php include "navigationBar.php"
		?>

		<!-- Page Navigation End -->

		<div class="row">
			<div class="large-12 columns">
				<div class="large-4 columns hide-for-small">
					<img src="../../webroot/img/contactUs.jpg" alt="image"/>

				</div>

				<div class="large-8 columns">

					<h3>Contact Us</h3>

					<div>

						<h5>M S Anand</h5>

						<p>

							Anand Enterprises
							<br/>
							Lajwanti Chambers, 74 – 78, Mahanadda,
							<br/>
							Near State Bank of Indore, Nagpur Road
							<br/>
							Jabalpur (M.P) India
							<br/>

							<strong>Ph:</strong> +91 98270 67215 ,
							+91 94253 24699
							<br/>
							<strong>Email: </strong>bhola57@yahoo.com

							<br/>

						</p>

						<br/>

					</div>
<!--
					<h5>Ricky Anand</h5>
					<p>
						Unit 7, 6-8 Avondale Road
						<br/>
						Armadale
						<br/>
						Melbourne (VIC) Australia
						<br/>

						<strong>Ph:</strong> +61 4339 08694
						<br/>
						<strong>Email:</strong> rickyanand2@gmail.com
					</p>
-->					
				</div>
			</div>
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

