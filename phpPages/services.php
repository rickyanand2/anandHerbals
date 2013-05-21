<!DOCTYPE html>

<!--[if IE 8]>               <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
	<!--<![endif]-->

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width" />
		<link rel="icon" type="image/png" href="../img/favicon.ico" />
		<title> Services </title>
		<link rel="stylesheet" href="../css/normalize.css" />
		<link rel="stylesheet" href="../css/foundation.css" />
		<link rel="stylesheet" href="../css/mycss.css" />
		<link href='http://fonts.googleapis.com/css?family=Sanchez' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Habibi' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Montez' rel='stylesheet' type='text/css'>
		<script src="../js/vendor/custom.modernizr.js"></script>

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
					<img class="mediumImage" src="../img/windmill.jpg" alt="image"/>

				</div>

				<div class="large-8 columns">

					<h3>Services </h3>

					<p>
						Anand consultants can assist you with economic policy analysis across a range of sectors, as well as undertake economic forecasting.
						We are familiar with the analysis that must be undertaken to support well-founded and sustainable decisions.
					</p>
					<p>
						We can assist individual and businesses to comply with goverment regulations and provide advice and support on renewable energy policy and notifications.
					</p>
					<p>
						We can also help you to get in touch with various suppliers providing state of the art equipments and advice on utilization of modern methods and the advancement in technology.

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

