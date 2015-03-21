<?php
	include_once 'db_setup.php';
	
	function connect()
	{
		mysql_connect(DB_HOST, DB_USER, DB_PASS) or die('could not connect'.mysql_error());
		mysql_select_db(DB_NAME);
	}
		
	function close()
	{
		mysql_close();
	}

	function query_majors()
	{
		$myData = mysql_query("SELECT * FROM Majors");
		while($record = mysql_fetch_array($myData))
		{
			echo '<option value="'.$record['name'].'">'.$record['name'].'</option>';
		}
	}
	
	function query_minors()
	{
		$myData = mysql_query("SELECT * FROM Minors");
		while($record = mysql_fetch_array($myData))
		{
			echo '<option value="'.$record['name'].'">'.$record['name'].'</option>';
		}
	}
	
<<<<<<< HEAD
	function query_special()
	{
		$myData = mysql_query("SELECT * FROM special");
		while($record = mysql_fetch_array($myData))
		{
			echo '<option value="'.$record['name'].'">'.$record['name'].'</option>';
		}
	}
	
=======
>>>>>>> origin/master
?>
		