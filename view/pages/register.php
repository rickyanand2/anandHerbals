<!DOCTYPE html>
<?php
session_start();
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

				<form action="login.php" id="regForm">
					<fieldset>
						<legend>
							Registration Form
						</legend>

						<div class="row">
							<div class="small-4 columns">
								<label>First Name</label>
								<input type="text" id="fname" name="fname" placeholder="Please enter your first name" autofocus>
							</div>
							<div class="small-4 columns">
								<label>Last Name</label>
								<input type="text" id="lname" name="lname" placeholder="Please enter your last name">
							</div>
							<div class="large-4 columns">
								<label>Username </label>
								<span id="unameInfo" class="left inline errorText"> 
								</span>

								<input type="text" id="uname" name="uname"

								<?php
								// Set the value as placeholder or actual entered value if username is entered
								//	if (!@$_REQUEST['uname']) {
									
									 echo "placeholder='Valid a-z_-.'";
							
								//} else {
									//echo "value= " . @$_REQUEST['uname'];
								//}
								?>

								>

							</div>

						</div>

						<div class="row">
							<div class="small-4 columns">
								<label>Password </label>
								<span id="passInfo" class="left inline errorText"> 
								</span>

								<input type="password" id="pass" name="pass" placeholder="Enter your password">
							</div>

							<div class="small-4 columns">
								<label>Confirm Password </label>
								<span id="cpassInfo" class="left inline errorText"> 
								</span>

								<input type="password" id="cpass" name="cpass" placeholder="Enter your password again">
							</div>

							<div class="small-4 columns">
								<label>Email Address </label>
								<span id="emailInfo" class="left inline errorText"> 
								</span>

								<input type="email" id="email" name="email" placeholder="abc@website.com">
							</div>

						</div>

						<div class="row">

							<div class="small-8 columns">
								<label>Business Address</label>
								<textarea id="adress" name="adress" placeholder="Full address of your business"></textarea>
							</div>

						</div>

						<div class="row">
							<div class="small-12 columns">
								<label>Comments</label>
								<textarea id="comments" name="comments"  placeholder="Please enter any feedback/Comments/Enquiry over here"></textarea>
								<br/>
							</div>

						</div>

						<div class="row">
							<div class="small-8 small-centered  columns">
								<textarea readonly="true"  class="smallFont">

									<?php
									include "Terms_conditions.txt";
 									?>

								</textarea>																																																																																																
									


							</div>

						</div>

						<div class="row">
							<div class="small-8 small-centered  columns">

								<input type="checkbox" id="agreement" >
								I accept the terms and conditions of Anand Consultancy Group.

							</div>

						</div>

						<div class="row">
							<div class="small-2 small-centered  columns">
								<br/>
								<a href="#" class="button"> Submit </a>

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

		<script src="../../webroot/js/validation.js">
		
			/* $(document).ready(function() {
				var validateUsername = $('#validateUsername');
				$('#uname').keyup(function() {
					var t = this;
					if (this.value != this.lastValue) {
						if (this.timer)
							clearTimeout(this.timer);
							validateUsername.removeClass('error').html('<img src="../../webroot/img/ajax-loader.gif" height="16" width="16" /> checking availability...');

						this.timer = setTimeout(function() {
							$.ajax({
								url : 'ajax-validation.php',
								data : 'action=check_username&username=' + t.value,
								dataType : 'json',
								type : 'post',
								success : function(j) {
									validateUsername.html(j.msg);
								}
							});
						}, 200);

						this.lastValue = this.value;
					}
				});
			});
		*/
		</script>

		<?php
		include ('footer.php');
		?>
	</body>

</html>

