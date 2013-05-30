<!DOCTYPE html>
<?php
//Start a session
session_start();

if (isset($_POST['submit'])) {
	require_once dirname(__FILE__) . "/../../model/serverValidation.php";

	//Get all fields for validation and processing
	$getRegUname = $_POST["uname"];
	$getRegFname = $_POST["fname"];
	$getRegLname = $_POST["lname"];
	$getRegPass = md5($_POST["pass"]);
	$getRegCpass = md5($_POST["cpass"]);
	$getRegEmail = $_POST["email"];
	$getRegaddress = $_POST["address"];
	$getRegComments = $_POST["comments"];
	$getRegAgreement = $_POST["agreement"];

	// Create an object
	$validate = new ServerValidation;

	// Call the function
	$validate -> checkPostData($getRegUname, $getRegFname, $getRegLname, $getRegPass, $getRegCpass, $getRegEmail, $getRegaddress, $getRegComments, $getRegAgreement);
	
	$validationErrorMessage = $validate::$errorMessage;
	$validationErrorCode = $validate::$errorCode;
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
		<title> Sign Up </title>
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
			<div class="small-12 columns topShade">

				<img src="../../webroot/img/anandLogo.png" alt="Anand Renewable Energy Consultancy"/>
			</div>
		</div>

		<div class="row">
			<div class="small-12 columns">
			<!-- Display any server side validation errors -->
			<?php 
				if($validationErrorCode != "0"){
						
					echo "<p class='errorText'>$validationErrorMessage</p>";
				}
			
			?>
				<form action="" id="regForm" method="post">
					<fieldset>
						<legend>
							Registration Form
						</legend>

						<div class="row">
							<div class="small-4 columns">
								<label>First Name</label>
								<input type="text" id="fname" name="fname"  autofocus
								<?php
								if (!@$_REQUEST['fname']) {

									echo "placeholder='Please enter your first name'";

								} else {
									echo "value= " . @$_REQUEST['fname'];
								}
								?>

								>

							</div>
							<div class="small-4 columns">
								<label>Last Name</label>
								<input type="text" id="lname" name="lname"
								<?php
								if (!@$_REQUEST['lname']) {

									echo "placeholder='Please enter your last name'";

								} else {
									echo "value= " . @$_REQUEST['lname'];
								}
								?>

								>
							</div>

							<div class="large-4 columns">
								<label>Username </label>
								<span id="unameInfo" class="left inline errorText"> </span>

								<input type="text" id="uname" name="uname"

								<?php
								// Set the value as placeholder or actual entered value if username is entered
								if (!@$_REQUEST['uname']) {

									echo "placeholder='Valid a-z_-.'";

								} else {
									echo "value= " . @$_REQUEST['uname'];
								}
								?>

								>

							</div>

						</div>

						<div class="row">
							<div class="small-4 columns">
								<label>Password </label>
								<span id="passInfo" class="left inline errorText"> </span>

								<input type="password" id="pass" name="pass"
								<?php
								if (!@$_REQUEST['pass']) {

									echo "placeholder='Enter your Password'";

								} else {
									echo "value= " . @$_REQUEST['pass'];
								}
								?>

								>
							</div>

							<div class="small-4 columns">
								<label>Confirm Password </label>
								<span id="cpassInfo" class="left inline errorText"> </span>

								<input type="password" id="cpass" name="cpass"
								<?php
								if (!@$_REQUEST['cpass']) {

									echo "placeholder='Enter your Password again'";

								} else {
									echo "value= " . @$_REQUEST['cpass'];
								}
								?>

								>
							</div>

							<div class="small-4 columns">
								<label>Email Address </label>
								<span id="emailInfo" class="left inline errorText"> </span>

								<input type="email" id="email" name="email"
								<?php
								if (!@$_REQUEST['email']) {

									echo "placeholder='abc@website.com'";

								} else {
									echo "value= " . @$_REQUEST['email'];
								}
								?>
								>
							</div>

						</div>

						<div class="row">

							<div class="small-8 columns">
								<label>Business Address</label>
								<textarea id="address" name="address" placeholder='Full address of your business' ><?php
								if (!@$_REQUEST['address']) {
									$temp = 1;
								} else
									echo @$_REQUEST['address'];
								?>
								
									
								</textarea>
							</div>

						</div>

						<div class="row">
							<div class="small-12 columns">
								<label>Comments</label>
								<textarea id="comments" name="comments" placeholder='Please enter any feedback/Comments/Enquiry over here'><?php
								if (!@$_REQUEST['comments']) {
									$temp = 1;
								} else
									echo @$_REQUEST['comments'];
								?>
									
								</textarea>
								<br/>
							</div>

						</div>

						<div class="row">
							<div class="small-8 small-centered  columns">
								<!-- Display the terms and conditions -->
								<textarea readonly="true"  class="smallFont">
								
									<?php
									include "Terms_conditions.txt";
 									?>

								</textarea>																																																																																																																								
									





							</div>

						</div>

						<div class="row">
							<div class="small-8 small-centered  columns">

								<input type="checkbox" id="agreement" name="agreement">
								I accept the terms and conditions of Anand Consultancy Group.

							</div>

						</div>

						<div class="row">
							<div class="small-2 small-centered  columns">
								<br/>
								<input type="submit" value="Submit" name="submit"  class="small button">

							</div>

						</div>

					</fieldset>
				</form>

				<!-- End of Registration form -->
			</div>
		</div>

		<!-- End Content for the page -->

		<!-- Check for Zepto support, load jQuery if necessary -->
		<script>
			document.write('<script src=' + ('__proto__' in {} ? '../../webroot/js/vendor/zepto' : '../js/vendor/jquery') + '.js><\/script>')
		</script>

		<!-- All javascript plugins -->
		<script src="../../webroot/js/foundation.min.js"></script>

		<!-- Javascript Validation -->
		<script src="../../webroot/js/validation.js"></script>
 	
		<?php
		include ('footer.php');
		?>
	</body>

</html>

