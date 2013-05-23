<?php

echo "class is connectionDatabase <br/>";

class ConnectionDatabase {

	/* Model to connect to mysql database */

	public function connectMyDatabase() {

		$bd = mysql_connect('localhost', 'cakephp', 'enerstat4') or die("Could not connect to MySQL server");
		mysql_select_db('green_energy', $bd) or die("Cound not connect to the database");

		echo "Successful connection to database <br/>";


	}

}


?>