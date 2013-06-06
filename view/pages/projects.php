<?php session_start(); ?>
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

		<!-- Page Navigation ends -->

		<div class="row">
			<div class="large-12 columns">

				<div class="large-4 columns hide-for-small">
					<img class="mediumImage" src="../../webroot/img/jbpPlant1.png" alt="image"/>

				</div>

				<div class="large-8 columns">

					
						<h5> RENEWABLE ENERGY POWER PROJECT (REPP)</h5>
						<h6> CAPACITY – 1.2 MW : BASED ON DAIRY SOLID WASTE AT PARIYAT JABALPUR </h6>

						<p>
							Anand Consultants were incharge of the installation of the biggest Bio Gas Plant in Madhya Pradesh.
							We carefully studied the site and shortlisted the first REPP (Renewable Energy Power Project) at Pariyat Jabalpur as being the most appropriate
							and suitable to implement the concept of waste to energy and organic manure production.

						</p>
						<p>
							The Madhya Pradesh state Govt. Renewable Energy Policy declared vide Gazzet Notification no. 513 date 17th Oct. 2006 was the driving force for the selection of the site.
						</p>

					</div>
					</div>
					</div>
					
						<div class="row">
			<div class="large-12 columns">
				<div class="large-4 columns hide-for-small">
					<img class="mediumImage" src="../../webroot/img/biometh.jpg" alt="image"/>

				</div>
					<div class="large-8 columns">
						<h6>BIO-METHANIZATION AT PARIYAT JABALPUR </h6>
						<p>	Bio-methanization Project involved treatment and recycle of solid and liquid waste into organic manure and to recover Biogas to produce electricity.
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

