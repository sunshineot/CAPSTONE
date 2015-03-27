<?php
	include_once 'function.php'

	$Fname = $_POST[""];
	$lname = $_POST[""];
	$id = $_POST[""];
	$email = $_POST[""];
	$pass = $_POST[""];
	$lvl = $_POST[""];

	$query1 = "INSERT INTO `capstone`.`studentpersonal` (`stid`, `fname`, `lname`, `password`, `email`) VALUES ('$id', 'Fname', 'lname', 'pass', 'email')";

	$query2 = "INSERT INTO `capstone`.`student` (`stid`, `major1`, `major2`, `minor1`, `minor2`, `level`, `status`) VALUES ('$id', NULL, NULL, NULL, NULL, '$lvl', NULL)";

	$result = mysqli_query($connection, $query);

	if ($result)
	{
		header("Location: dashboard.php"); /* Redirect browser */
		exit();
	}
