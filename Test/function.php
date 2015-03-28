<?php
	include_once 'db_setup.php';
	include_once 'queries.php';

	
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
		$myData = mysql_query("SELECT * FROM majors");
		while($record = mysql_fetch_array($myData))
		{
			echo '<option value="'.$record['name'].'">'.$record['name'].'</option>';
		}
	}
	
	function query_minors()
	{
		$myData = mysql_query("SELECT * FROM minors");
		while($record = mysql_fetch_array($myData))
		{
			echo '<option value="'.$record['name'].'">'.$record['name'].'</option>';
		}
	}
	

	function query_special()
	{
		$myData = mysql_query("SELECT * FROM special");
		while($record = mysql_fetch_array($myData))
		{
			echo '<option value="'.$record['name'].'">'.$record['name'].'</option>';
		}
	}
	
	function query_MyCourses_major1()
	{
		$id = $_SESSION['stid'];
		$myData = mysql_query("SELECT * FROM student where stid='$id'");
		while($record = mysql_fetch_array($myData))
		{
			echo '<option value="'.$record['major1'].'">'.$record['major1'].'</option>';
		}
	}
	
	function query_MyCourses_major1_semester1_level1()
	{
		$id = $_SESSION['stid'];
		$myData = mysql_query("SELECT * FROM student where stid='$id'");
		while($record = mysql_fetch_array($myData))
		{
						if (major1()) 
						{
							include 'mydegree.php';
						}
										
						else
					{
						if($record['program']=="INFORMATION TECHNOLOGY"){
						$myData2 = mysql_query("SELECT c_name, c_code FROM it WHERE semester = 1 AND c_level = 1");
						$myData3 = mysql_query("SELECT c_name, c_code FROM it WHERE semester = 2 AND c_level = 1");
						 include 'mydegree.php';
						
						
						}
						else
						{
						if($record['program']=="COMPUTER STUDIES"){
						$myData2 = mysql_query("SELECT c_name, c_code FROM compstudies WHERE semester = 1 AND c_level = 1");
						$myData3 = mysql_query("SELECT c_name, c_code FROM compstudies WHERE semester = 2 AND c_level = 1");
						?>
						<table style="width: 100%">
								<tr>
								<td style="text-align: center"><b>Semester I</b></td>
								<td style="text-align: center"><b>Semester II</b></td>
								</tr>
								<tr>
								<td>
								<?php while($record2 = mysql_fetch_array($myData2)){
									echo '<option value="'.$record2['c_name'].'">'.$record2['c_code'].' '.$record2['c_name'].'</option>';
								}
								?></td>
								<td>
								<?php while($record3 = mysql_fetch_array($myData3)){
									echo '<option value="'.$record3['c_name'].'">'.$record3['c_code'].' '.$record3['c_name'].'</option>';
								}
								?></td>
								<tr style="vertical-align: top">
								<td>
									<p style="color: blue">Total Credits Semester I: </p>
								</td>
				
								<td>
									<p style="color: blue">Total Credits Semester II: </p>
								</td>
						</table>
							<?php
						}
						}
					}
		}
	}
?>	