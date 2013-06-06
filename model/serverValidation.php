<?php

session_start();

/*
 * Class to perform Server Side validation of registered User
 *
 *
 */
require_once dirname(__FILE__) . '/connectionDatabase.php';

class ServerValidation extends ConnectionDatabase {

	//Varibale to redirect to Registered Page if no validation errors
	public static $errorCode;
	public static $errorMessage;

	//////////////////////////////// Function to call all other functions //////////////////////////
	public function checkPostData($uname = '', $fname = "", $lname = "", $pass = "", $cpass = "", $email = "", $address = "", $comments = "", $agreement = "") {

		//Username Validation
		$name = trim($uname);

		if ($name == "") {
			self::$errorMessage = "error : You did not enter a username. <BR/>";
			self::$errorCode = "1";
		} elseif (!preg_match('/^[a-z0-9.-_]+$/', $name)) {
			self::$errorMessage = "error : Invaid character used in username <BR/>";
			self::$errorCode = "1";
		} elseif (strlen($name) < 4) {
			self::$errorMessage = "error : Username has to be greater than 3 characters! <BR/>";
			self::$errorCode = "1";
		}

		//Password Validation
		elseif ($pass == "") {
			self::$errorMessage = "error : You did not enter a Password. <BR/>";
			self::$errorCode = "1";

		} elseif (strlen($pass) < 6) {
			self::$errorMessage = "error : Password cannot be less than 6 characters. <BR/>";
			self::$errorCode = "1";

		}

		//Confirm Password Validation
		elseif ($pass != $cpass) {
			self::$errorMessage = "error : Passwords do not match. <BR/>";
			self::$errorCode = "1";

		}

		// Terms and conditions validation
		elseif ($agreement != "on") {
			self::$errorMessage = "error : You have to accept the terms and conditions before you proceed. <BR/>";
			self::$errorCode = "1";
		} else {

			self::$errorCode = "0";

			$this -> registerUserDetails($name, $fname, $lname, $pass, $email, $address, $comments);
			
		}
	}


	//////////////// Function to Insert User detail to the database /////////////////////////////////////

	public function registerUserDetails($uname = '', $fname = "", $lname = "", $pass = "", $email = "", $address = "", $comments = "") {


		//Connect to database to insert values
		parent::connectMyDatabase();
		
		// Check for unique username
		$checkUsernameSql = "SELECT * FROM users WHERE username = '$uname'";
		$uniqueUsername = mysql_query($checkUsernameSql);
		$n = mysql_num_rows($uniqueUsername);
		
		if($n == 0){

		$registerSql = "INSERT INTO users (username, password, email, first_name, last_name , address, comments) VALUES ('$uname','$pass','$email','$fname','$lname','$address','$comments')";

		//Run The query
		$result = mysql_query($registerSql);

		// Make sure query inserted user successfully
		if (!mysql_insert_id()) {
			echo "Error: User not added to database.<BR/>";
		} else {
			
			// Redirect the User to login Page
			$this -> redirectToRego();
		}
		
		}
		
		else{
			
			self::$errorMessage = "error : Username has already been taken. <BR/>";
			self::$errorCode = "1";
			
		}

	}


	///////////////// Function to redirect to successful Registration Page /////////////////////
	public function redirectToRego() {

		$host = $_SERVER['HTTP_HOST'];
		$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra = 'registeredPage.php';

		header("Location: http://$host$uri/$extra");
		//Echo "Location: http://$host$uri/$extra";

		exit ;
	}


	/*

	 ////////// Function to Register User to the database ////////////////////////////////////////////////////
	 public function registerUser() {

	 //Connect to Mysql Database from parent class
	 parent::connectMyDatabase();

	 $registerSql = "INSERT INTO users WHERE username=\'' . $username . '\' and password=\'' . $password . '\'';

	 "INSERT INTO `dbUsers` (`username`,`password`,`email`) "
	 ."VALUES ('".$_POST["username"]."', "
	 ."PASSWORD('".$_POST["password"]."'), "
	 ."'".$_POST["email"]."')";
	 //  Run query
	 $r = mysql_query($q);

	 //Input vaildation and the dbase code

	 //http://www.post1.net/biow/entry/simple_php_login_code_example
	 //http://www.phpeasystep.com/phptu/6.html

	 if ( $_GET["op"] == "reg" )
	 {
	 $bInputFlag = false;
	 foreach ( $_POST as $field )
	 {
	 if ($field == "")
	 {
	 $bInputFlag = false;
	 }
	 else
	 {
	 $bInputFlag = true;
	 }
	 }
	 // If we had problems with the input, exit with error
	 if ($bInputFlag == false)
	 {
	 die( "Problem with your registration info. "
	 ."Please go back and try again.");
	 }

	 // Fields are clear, add user to database
	 //  Setup query
	 $q = "INSERT INTO `dbUsers` (`username`,`password`,`email`) "
	 ."VALUES ('".$_POST["username"]."', "
	 ."PASSWORD('".$_POST["password"]."'), "
	 ."'".$_POST["email"]."')";
	 //  Run query
	 $r = mysql_query($q);

	 // Make sure query inserted user successfully
	 if ( !mysql_insert_id() )
	 {
	 die("Error: User not added to database.");
	 }
	 else
	 {
	 // Redirect to thank you page.
	 Header("Location: register.php?op=thanks");
	 }
	 } // end if

	 }

	 */

	/////////////////////////////////////////////////////// Test JSON functionality ///////////////////

	/*
	 *
	 *

	 *	$username = trim($username);
	 // strip any white space
	 $response = array();
	 // our response

	 // if the username is blank
	 if (!$username) {
	 $response = array('ok' => false, 'msg' => "Please specify a username");

	 // if the username does not match a-z or '.', '-', '_' then it's not valid
	 } else if (!preg_match('/^[a-z0-9.-_]+$/', $username)) {
	 $response = array('ok' => false, 'msg' => "Your username can only contain alpha-numerics and period, dash and underscore (.-_)");

	 // this would live in an external library just to check if the username is taken
	 } else if (username_taken($username)) {
	 $response = array('ok' => false, 'msg' => "The selected username is not available");

	 // it's all good
	 } else {
	 $response = array('ok' => true, 'msg' => "This username is free");
	 }

	 return $response;
	 *
	 *
	 *
	 * */
	/******************************** End Of Class ******************************************************/
}
?>