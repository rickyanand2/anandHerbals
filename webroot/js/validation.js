/***************************/
//@Author: Adrian "yEnS" Mato Gondelle & Ivan Guardado Castro
//@website: www.yensdesign.com
//@email: yensamg@gmail.com
//@license: Feel free to use it, but keep this credits please!					
/***************************/

$(document).ready(function(){
	//global vars
	var form = $("#regForm");
	var name = $("#uname");
	var nameInfo = $("#unameInfo");
	var email = $("#email");
	var emailInfo = $("#emailInfo");
	var pass1 = $("#pass");
	var pass1Info = $("#passInfo");
	var pass2 = $("#cpass");
	var pass2Info = $("#cpassInfo");
	var message = $("#message");
	
	//On blur
	name.blur(validateName);
	email.blur(validateEmail);
	pass1.blur(validatePass1);
	pass2.blur(validatePass2);
	
	//On key press
	name.keyup(validateName);
	pass1.keyup(validatePass1);
	pass2.keyup(validatePass2);
	message.keyup(validateMessage);
	
////////// Call to All functions ///////////////

	//On Submitting validate all functions
	form.submit(function(){
		if(validateName() & validateEmail() & validatePass1() & validatePass2() & validateMessage())
			return true
		else
			return false;
	});
	

//////////// validation functions //////////////

	//Start Username Validation -------------------------------------------------------------

	function validateName(){
		var ufilter = /^[0-9a-zA-Z_.-]+$/; 
		// Testing regular expression
		var b = $("#uname").val();
		
		//if it's NOT valid
		if(name.val().length < 4){
			name.addClass("error");
			nameInfo.text("Username has to be greater than 3 characters!");
			nameInfo.addClass("error");
			return false;
		}
		
		// If it doesn't satisfy the username conditions
		else if(!ufilter.test(b) ){
			
			name.addClass("error");
			nameInfo.text("Invalid character used in Username");
			nameInfo.addClass("error");
			return false;
			
		}
		
		// if it's valid
		else{
			name.removeClass("error");
			nameInfo.text("");
			nameInfo.removeClass("error");
			return true;
		}
	}
	
	// End Username Validation -------------------------------------------------------------	
	
	// Start Password Validation -------------------------------------------------------------
	
	function validatePass1(){
		var a = $("#pass");
		var b = $("#cpass");

		//it's NOT valid
		if(pass1.val().length < 6){
			pass1.addClass("error");
			pass1Info.text("Password has to be atleast 6 characters");
			pass1Info.addClass("error");
			return false;
		}
		//it's valid
		else{			
			pass1.removeClass("error");
			pass1Info.text("");
			pass1Info.removeClass("error");
			validatePass2();
			return true;
		}
	}
	
	// End Password Validation -------------------------------------------------------------
	
	// Start Confirm Password Validation -------------------------------------------------------------
	
	function validatePass2(){
		var a = $("#password1");
		var b = $("#password2");
		//are NOT valid
		if( pass1.val() != pass2.val() ){
			pass2.addClass("error");
			pass2Info.text("Passwords do not match!");
			pass2Info.addClass("error");
			return false;
		}
		//are valid
		else{
			pass2.removeClass("error");
			pass2Info.text("");
			pass2Info.removeClass("error");
			return true;
		}
	}

	// End Confirm Password Validation -------------------------------------------------------------
	
	// Start Email Validation -------------------------------------------------------------
	
	function validateEmail(){
		//testing regular expression
		var a = $("#email").val();
		var filter = /^[a-zA-Z0-9]+@[a-zA-Z0-9]+.[a-z]{2,4}$/;
		
		//if it's valid email
		if(filter.test(a)){
			email.removeClass("error");
			emailInfo.text("");
			emailInfo.removeClass("error");
			return true;
		}
		//if it's NOT valid
		else{
			email.addClass("error");
			emailInfo.text("Please enter a valid e-mail address");
			emailInfo.addClass("error");
			return false;
		}
	}
	
	// End Email Validation ----------------------------------------------------------


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




});