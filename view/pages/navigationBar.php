<!-- Page Navigation start -->

<?php
session_start();
//inherit $currentFileName from the page this file is being called from

$indexClassActive = "";
$serviceClassActive = "";
$aboutUsClassActive = "";
$contactClassActive = "";
$projectsClassActive = "";
$memberClassActive = "";

if ($currentFileName == "home.php") {
	$indexClassActive = 'class = active';

} elseif ($currentFileName == "services.php") {
	$serviceClassActive = 'class = active';

} elseif ($currentFileName == "services.php") {
	$serviceClassActive = 'class = active';

} elseif ($currentFileName == "projects.php") {
	$projectsClassActive = 'class = active';

} elseif ($currentFileName == "aboutUs.php") {
	$aboutUsClassActive = 'class = active';

} elseif ($currentFileName == "contactUs.php") {
	$contactClassActive = 'class = active';

} elseif ($currentFileName == "members.php") {
	$memberClassActive = 'class = active';
}
?>

<div class="row">
	<div class="large-12 columns topShade">

		<img src="../../webroot/img/anandLogo.png" alt="Anand Renewable Energy Consultancy"/>
	</div>
</div>

<div class="row">
	<div class="large-12 columns">
		<div class="contain-to-grid sticky">
			<nav class="top-bar">
				<ul class="title-area">
					<!-- Title Area -->
					<li class="name">
						<h1 ><a href="home.php" >Sustainability</a></h1>
					</li>
					<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
					<li class="toggle-topbar menu-icon">
						<a href="home.php" ><span>Menu</span></a>
					</li>
				</ul>

				<section class="top-bar-section">
					<!-- Left Nav Section -->
					<ul class="right googleFont">
						<li class="divider"></li>
						<li <?php echo $indexClassActive; ?> >
							<a href="home.php"> Home </a>
						</li>

						<li class="divider"></li>
						<li <?php echo $projectsClassActive; ?> >
							<a href="projects.php">Projects</a>

						</li>
						<li class="divider"></li>
						<li <?php echo $serviceClassActive; ?> >
							<a href="services.php">Services</a>

						</li>

						<!-- To be configured   : Authorization -->
						<?php // ?>
						<li class="divider"></li>
						<li <?php echo $memberClassActive; ?> >
							<a href="members.php">Members Area</a>

						</li>

						<li class="divider"></li>
						<li <?php echo $aboutUsClassActive; ?> >
							<a href="aboutUs.php" >About Us</a>

						</li>

						<li class="divider"></li>
						<li <?php echo $contactClassActive; ?> >
							<a href="contactUs.php" >Contact Us</a>

						</li>
						<li class="divider"></li>
						<li class="has-form">
							<?php			//Redirect the page back to login if session variable is not set
							$user_check = $_SESSION['uname'];

							if (!isset($user_check)) {

								echo '<a href="login.php" class="button">Login</a>';
							} else {

								echo '<a href="logout.php" class="button small alert">Logout</a>';
							}
							?>
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

