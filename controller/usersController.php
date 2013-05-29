<?php

class UsersController {

	function check_username($username = null) {
			
		$username = trim($username);
		// strip any white space
		$response = array();
		// our response

		// if the username is blank
		if (!$username) {
			$response = array('ok' => false, 'msg' => "Please specify a username");

			// if the username does not match a-z or '.', '-', '_' then it's not valid
		} else if (!preg_match('/^[a-z0-9.-_]+$/', $username)) {
			$response = array('ok' => false, 'msg' => "Your username can only contain alphanumerics and period, dash and underscore (.-_)");

			// this would live in an external library just to check if the username is taken
		} else if (username_taken($username)) {
			$response = array('ok' => false, 'msg' => "The selected username is not available");

			// it's all good
		} else {
			$response = array('ok' => true, 'msg' => "This username is free");
		}

		return $response;
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

}
?>