<?php
//Start a session
session_start();
echo "class is sessionController <br/>";
require_once dirname(__FILE__) . "/../model/connectionDatabase.php";

echo "string";
$errorVar = "error";

class SessionsController extends ConnectionDatabase {

	private $_username;
	private $_password;

	public function secure_session() {

		echo "Call to secure_session function <br/>";

	}

	// Also sets the user values
	public function validateUser($username = null, $password = null) {

		try {

			$loginArray = $this -> safeInjection($username, $password);

			print_r($loginArray);

			$username = $loginArray[0];
			$password = $loginArray[1];

			//Connect to Mysql Database from parent class
			parent::connectMyDatabase();

			$sql = 'SELECT * FROM users WHERE username=\'' . $username . '\' and password=\'' . $password . '\'';
			$result = mysql_query($sql);
			$n = mysql_num_rows($result);

			echo "Username is " . $username . "<br/>";
			echo "Password is " . $password . "<br/>";

			if ($n == 1) {
				//Values of these variable can now also be accessed by other local methods to this class
				echo "Number of SQL rows selected: " . $n . "<br/>";
				$this -> _username = $username;
				$this -> _password = $password;

				//Unset session variable to register user session
				session_unset();

				//Get the SQL result as an array for sessions
				$sessionArray = mysql_fetch_array($result);
				print_r($sessionArray);
				//Register the name value into a session
				$_SESSION['uname'] = $sessionArray['username'];

				//Redirect to Members Page
				$this -> redirectToMembers();

			} else {
				//echo "Username or password is not correct.<br/>";

				global $errorVar;

				//Unset the variable
				unset($errorVar);
				$errorVar = "error";

				$_SESSION['temp'] = $errorVar;

			}

		} catch (Exception $e) {
			echo 'Caught exception: ', $e -> getMessage(), "\n";
		}

	}

	/////////////////////// To get MD5 encryption and login be sql injection safe /////////////////////////
	public function safeInjection($var1, $var2) {
		$safe_username = $var1;
		$safe_password = $var2;

		// To protect MySQL injection (more detail about MySQL injection)
		$safe_username = stripslashes($safe_username);
		$safe_password = stripslashes($safe_password);
		$safe_username = mysql_real_escape_string($safe_username);
		$safe_password = mysql_real_escape_string($safe_password);
		$safe_password = md5($safe_password);

		return array($safe_username, $safe_password);

	}

	////////////////// Redirect Functions ////////////////////////////////////////////////////////////////////
	public function redirectToMembers() {

		$host = $_SERVER['HTTP_HOST'];
		$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra = 'members.php';

		header("Location: http://$host$uri/$extra");

		//Echo "Location: http://$host$uri/$extra";

		exit ;
	}



	/*  ------------------------------------------ End of Class -------------------------------------------------  */
}
?>
