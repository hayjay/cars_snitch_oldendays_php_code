<?php
	include 'config.php';

	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	// $address = $_POST["address"];
	// $city = $_POST["city"];
	// $pin = $_POST["pin"];
	$email = $_POST["email"];
	$pwd = $_POST["pwd"];

	if($mysqli->query("INSERT INTO users (fname, lname, email, password) VALUES('$fname', '$lname', '$email', '$pwd')"))
		{
			echo 'Data inserted';
			echo '<br/>';

		} else{
			// var_dump("otigbano oo");exit;
			header ("location:login.php");

	}

?>
