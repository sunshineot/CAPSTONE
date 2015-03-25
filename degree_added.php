<?php
		//include_once 'function.php';
		session_start();
		$Major1 = $_POST["major1"];
		$Major2 = $_POST["major2"];
		$Minor1 = $_POST["minor1"];
		$Minor2 = $_POST["minor2"];
		$Special = $_POST["special"];
		$Level = $_POST["level"];
		$Status = $_POST["status"];
	

    //Connect to the database
    $host = 'localhost';   //host name
    $user = 'root';                     //username
    $pass = '';                                 //password
    $db = 'capstone';                          //Your database name you want to connect to
    //$port = 3306;                               //The port #. <usually 3306>

    $connection = mysqli_connect($host, $user, $pass, $db)or die(mysql_error());
	//$db_selected=mysqli_select_db($connection,'SCA');

	$Major1 = mysql_real_escape_string($Major1);
	$Major2 = mysql_real_escape_string($Major2);
	$Special = mysql_real_escape_string($Special);
	$Minor1 = mysql_real_escape_string($Minor1);
	$Minor2 = mysql_real_escape_string($Minor2);

    //check for user
	$id = $_SESSION['stid'];
	$query = "UPDATE student set stid='$id', major1='$Major1',major2='$Major2',special='$Special',minor1='$Minor1',minor2='$Minor2',level='$Level',status='$Status' where stid='$id'";
     $result = mysqli_query($connection, $query);

    if($result)
		{
			include 'degree.php';
		}
	
	//header( 'Location: http://localhost/capstone/dashboard.html' ) ;
    
// Anything here....probably redirect to a profile page or something.
// BY THE WAY: I can also add a timestamp as a variable, which can be 
// used to timeout a session that's been inactive for some time.
?>