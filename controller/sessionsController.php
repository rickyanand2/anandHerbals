<?php

echo "class is sessionController <br/>";
require_once dirname(__FILE__) . "/../model/connectionDatabase.php";

class SessionsController extends ConnectionDatabase {

	private $_username;
	private $_password;

	public function secure_session() {

		echo "Call to secure_session function <br/>";

	}

	// Also sets the user values
	public function validateUser($username = null, $password = null) {

		//Connect to Mysql Database from parent class
		parent::connectMyDatabase();

		// To protect MySQL injection (more detail about MySQL injection)
		$username = stripslashes($username);
		$password = stripslashes($password);
		$username = mysql_real_escape_string($username);
		$password = mysql_real_escape_string($password);

		$sql = 'SELECT * FROM users WHERE username=\'' . $username . '\' and password=\'' . $password . '\'';
		$result = mysql_query($sql);
		$n = mysql_num_rows($q);

		echo "Username is " . $username . "<br/>";
		echo "Password is " . $password . "<br/>";
		echo "Number of SQL rows selected - " . $n . "<br/>";

		if ($n > 0) {
			//Values of these variable can now also be accessed by other local methods to this class
			$this -> _username = $username;
			$this -> _password = $password;

		} else {
			echo "Pasangan username dan password yang Anda masukkan tidak cocok.<br/>";
		}

	}

	/*

	 public function setUser

	 */

	/*
	 * // username and password sent from form
	 $myusername=$_POST['myusername'];
	 $mypassword=$_POST['mypassword'];

	 // Mysql_num_row is counting table row
	 $count=mysql_num_rows($result);

	 // If result matched $myusername and $mypassword, table row must be 1 row

	 if($count==1){

	 // Register $myusername, $mypassword and redirect to file "login_success.php"
	 session_register("myusername");
	 session_register("mypassword");
	 header("location:login_success.php");
	 }
	 else {
	 echo "Wrong Username or Password";
	 }
	 *
	 *
	 **/

	//$q = mysql_query("SELECT * FROM user WHERE uname='".$uname."' and password=md5('".$password."')");
	/*  ------------------------------------------ End of Class -------------------------------------------------  */
}
?>