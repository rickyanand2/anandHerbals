<!-- Page Navigation start -->

<?php
//inherit $currentFileName from the page this file is being called from

$indexClassActive = "";
$serviceClassActive = "";
$aboutUsClassActive = "";
$contactClassActive = "";
$projectsClassActive = "";

//Path for the files
$indexFilePath = "";
$serviceFilePath = "";
$aboutUsFilePath = "";
$contactFilePath = "";
$projectsFilePath = "";
$anandLogoPath = "";

//Assign the appropriate path for the file

$indexFilePath = "home.php";
$serviceFilePath = "services.php";
$aboutUsFilePath = "aboutUs.php";
$contactFilePath = "contactUs.php";
$projectsFilePath = "projects.php";
$anandLogoPath = "../../webroot/img/anandLogo.png";

if ($currentFileName == "home.php") {
	$indexClassActive = 'class = active';

} else {

	if ($currentFileName == "services.php") {
		$serviceClassActive = 'class = active';

	} elseif ($currentFileName == "services.php") {
		$serviceClassActive = 'class = active';

	} elseif ($currentFileName == "projects.php") {
		$projectsClassActive = 'class = active';

	} elseif ($currentFileName == "aboutUs.php") {
		$aboutUsClassActive = 'class = active';

	} elseif ($currentFileName == "contactUs.php") {
		$contactClassActive = 'class = active';
	}

}
?>

<div class="row">
	<div class="large-12 columns topShade">

		<img src=<?php echo $anandLogoPath ?> alt="Anand Renewable Energy Consultancy"/>
	</div>
</div>

<div class="row">
	<div class="large-12 columns">
		<div class="contain-to-grid sticky">
			<nav class="top-bar">
				<ul class="title-area">
					<!-- Title Area -->
					<li class="name">
						<h1 ><a href=<?php echo $indexFilePath; ?> >Sustainability</a></h1>
					</li>
					<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
					<li class="toggle-topbar menu-icon">
						<a href=<?php echo $indexFilePath; ?> ><span>Menu</span></a>
					</li>
				</ul>

				<section class="top-bar-section">
					<!-- Left Nav Section -->
					<ul class="right googleFont">
						<li class="divider"></li>
						<li <?php echo $indexClassActive; ?> >
							<a href=<?php echo $indexFilePath; ?> >Home</a>
						</li>

						<li class="divider"></li>
						<li <?php echo $projectsClassActive; ?> >
							<a href=<?php echo $projectsFilePath; ?> >Projects</a>

						</li>
						<li class="divider"></li>
						<li <?php echo $serviceClassActive; ?> >
							<a href=<?php echo $serviceFilePath; ?>>Services</a>

						</li>
						<li class="divider"></li>
						<li <?php echo $aboutUsClassActive; ?> >
							<a href=<?php echo $aboutUsFilePath; ?> >About Us</a>

						</li>

						<li class="divider"></li>
						<li <?php echo $contactClassActive; ?> >
							<a href=<?php echo $contactFilePath; ?> >Contact Us</a>

						</li>
						<li class="divider"></li>
						<li class="has-form">
							<a href="login.php" class="button">Login</a>
						</li>

						<li class="divider"></li>
						<li class="divider show-for-small"></li>
					</ul>

				</section>
			</nav>
		</div>
	</div>
</div>

<br/>

<!-- End of Navigation Bar -->

<!-- Bread Crumbs to display hierarchy of links
<div class="row">

<ul class="breadcrumbs">
<li>
<a href="#">Home</a>
</li>
<li>
<a href="#">Features</a>
</li>
<li class="unavailable">
<a href="#">Gene Splicing</a>
</li>
<li class="current">
<a href="#">Cloning</a>
</li>
</ul>
</div>

-->

<!-- Page Navigation End -->

