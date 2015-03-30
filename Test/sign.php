<?php
	// include_once 'function.php'
	// connect();
	session_start();

	$Fname = $_POST["first_name"];
	$lname = $_POST["last_name"];
	$id = $_POST["studentid"];
	$email = $_POST["email"];
	$pass = $_POST["password"];
	$lvl = $_POST["level"];
	$status = $_POST["status"];
	$faculty = $_POST["faculty"];

	$host = 'localhost';   //host name
    $user = 'root';                     //username
    $pass = 'root';                                 //password
    $db = 'capstone';                          //Your database name you want to connect to
    //$port = 3306;                               //The port #. <usually 3306>

    $connection = mysqli_connect($host, $user, $pass, $db)or die(mysql_error());

	$query1 = "INSERT INTO `capstone`.`studentpersonal` (`stid`, `fname`, `lname`, `password`, `email`) VALUES ('$id', '$Fname', '$lname', '$pass', '$email')";

	$query2 = "INSERT INTO `capstone`.`student` (`stid`, `program`, `major1`, `major2`, `minor1`, `minor2`, `level`, `status`, `faculty`) VALUES ('$id', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '$lvl', '$status','$faculty')";

	$result = mysqli_query($connection, $query1);
	
	$result2 = mysqli_query($connection, $query2);
	echo $result2;
	if ($result && $result2) 
	{
		//include("Location: dashboard.php"); /* Redirect browser */
		//exit();
		$_SESSION["stid"]=$id;
		$_SESSION["fname"]=$Fname;
		$_SESSION["lname"]=$lname;
		?>
		<script type="text/javascript"> window.location="dashboard.php";</script>
		<?php
	}
?>