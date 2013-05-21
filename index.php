<!DOCTYPE html>

<!--[if IE 8]>               <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
	<!--<![endif]-->

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width" />
		<link rel="icon" type="image/png" href="img/favicon.ico" />
		<title> Sustainability </title>
		<link rel="stylesheet" href="css/normalize.css" />
		<link rel="stylesheet" href="css/foundation.css" />
		<link rel="stylesheet" href="css/mycss.css" />
		<link href='http://fonts.googleapis.com/css?family=Sanchez' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Habibi' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Montez' rel='stylesheet' type='text/css'>
		<script src="js/vendor/custom.modernizr.js"></script>

	</head>
	<body class="bodyAttr">
		<!-- Page Navigation start -->
		<?php

		/* Declare variables for this page */

		$currentFileName = basename($_SERVER['PHP_SELF'], "");
		?>

		<?php include "phpPages/navigationBar.php"  ?>
		<!-- Page Navigation ends -->

		<div class="row">
			<div class="large-12 large-centered columns">

				<!-- Basic orbit markup -->
				<ul data-orbit >

					<li>
						<img class="orbiImagetWidth" src="img/biogasbanner.png" alt="Bio Gas Plant"/>

					</li>
					<li>
						<img class="orbiImagetWidth" src="img/windenergy.jpg" alt="Wind Energy"/>
					</li>

					<li>
						<img class="orbiImagetWidth" src="img/solarPan.png" alt="Solar Panels"/>
					</li>
				</ul>
			</div>
			<!-- End of Orbit -->

		</div>

		<!-- Content for the page -->

		<div class="row">
			<div class="large-12 columns">

				<div class="large-4 columns hide-for-small" >
					
						<img class="biggerImage" src="img/solar1.jpg" alt="birdEye" />
						<br>
				</div>

				<div class="large-8 columns">
			
						<h3> Biogas, Biomass, Solar and Wind Energy Consultants</h3>
						<p>
							The biggest challenge before the world is to mitigate green house gas emission and protect mother earth from global warming.

							Anand Consultants aims to prevent pollution at source and recycling of waste into useful end products in a scientific and commercially viable manner by commanding carbon credits under clean development mechanism (CDM) as per Kyoto Protocol in addition to sustainable revenue
							generation from sale of organic manure and electricity using state electricity grid.

							We have helped to set up various small and large renewable energy projects across India including the largest bio-gas plant in Madhya Pradesh.

						</p>

				
				</div>
			</div>
		</div>
		<!-- End content of the page -->

		<!-- Check for Zepto support, load jQuery if necessary -->
		<script>
			document.write('<script src=' + ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') + '.js><\/script>')
		</script>

		<!-- All javascript plugins -->
		<script src="js/foundation.min.js"></script>

		<!-- Activate all plugins -->
		<script>
			$(document).foundation('orbit', {
				timer_speed : 5000
			});

			$(document).foundation('topbar', {
				stickyClass : 'sticky',

			});
		</script>

		<?php
		include ('phpPages/footer.php');
		?>

	</body>
</html>