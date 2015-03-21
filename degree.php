<?php
		include_once 'function.php';

		$Major1 = $_POST["major1"];
		$Major2 = $_POST["major2"];
		$Minor1 = $_POST["minor1"];
		$Minor2 = $_POST["major2"];
		$Level = $_POST["level"];
		$Status = $_POST["status"];
		//need query to find the id of a student
		
		$query = "INSERT into student values('$Major1','$Major2', '$Minor1', '$Minor2', '$Level', '$Status')";
	

		if($query)
		{
			include 'degree.html';
		}
	
	//header( 'Location: http://localhost/capstone/dashboard.html' ) ;
    
// Anything here....probably redirect to a profile page or something.
// BY THE WAY: I can also add a timestamp as a variable, which can be 
// used to timeout a session that's been inactive for some time.
?>