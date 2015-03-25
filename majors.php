<?php
	include_once 'function.php';
	connect();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Bootstrap 3 Control Panel</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
		<script src="js/majors.js"></script>
	</head>
	<body>
<!-- Header -->
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-toggle"></span>
      </button>
      <a class="navbar-brand" href="#">Student Course Advisor</a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
          <li>
              <a href="#">About</a>
          </li>
          <li>
              <a href="#">FAQ's</a>
          </li>
          <li>
              <a href="#">Contact</a>
          </li>  
        <li class="dropdown">
          <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">
            <i class="glyphicon glyphicon-user"></i> <?php echo $_SESSION["fname"]?>  <?php echo $_SESSION["lname"];?> <span class="caret"></span></a>
          <ul id="g-account-menu" class="dropdown-menu" role="menu">
            <li><a href="#">My Profile</a></li>
            <li><a href="#"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div><!-- /container -->
</div>
<!-- /Header -->

<!-- Main -->
<div class="container">
  
  <!-- upper section -->
  <div class="row">
	<div class="col-sm-3">
      <!-- left -->
      <h3><i class="glyphicon glyphicon-briefcase"></i> Start Below</h3>
      <hr>
      
      <ul class="nav nav-stacked">
        <li><a href="highschool.html"><i class="glyphicon glyphicon-flash"></i> Before You Plan</a></li>
        <li><a href="majors.html"><i class="glyphicon glyphicon-flash"></i> Choose Your Major/Minor</a></li>
        <li><a href="degree.html"><i class="glyphicon glyphicon-link"></i> Year 1</a></li>
        <li><a href="degree.html"><i class="glyphicon glyphicon-list-alt"></i> Year 2</a></li>
        <li><a href="degree.html"><i class="glyphicon glyphicon-book"></i> Year 3</a></li>
        <li><a href="degree.html"><i class="glyphicon glyphicon-briefcase"></i> Year 4+</a></li>
      </ul>
      
      <hr>
      
  	</div><!-- /span-3 -->
    <div class="col-sm-9">
      	
      <!-- column 2 -->	
       <h3><i class="glyphicon glyphicon-dashboard"></i> Your Dashboard</h3>  
            
       <hr>
	   
	    <div class="panel panel-default">
        <div class="panel-heading">
          <div class="panel-title">
            <i class="glyphicon glyphicon-wrench pull-right"></i>
            <h4>Select your Major(s)/Minor(s)</h4>
          </div>
        </div>
        <div class="panel-body">
      
		<form class="form form-vertical" method="post" onsubmit="return validate_form(this)" action="degree.php">
			<div class="control-group" id="specialgroup">
				<label>Programs/Special:</label>
				<div class="controls">
					<select class="form-control" name="special" id="special" onchange="return specialSelectHandler()" required autofocus>
						<option selected>--Select Special--</option>
						<?php query_special()?>
					</select></br>
				</div>
			</div>
			
			<div class="control-group" id="major1group">
				<label>1st Major:</label>
				<div class="controls">
					<select class="form-control" name="major1" id="major1" onchange="return major1SelectHandler()" required autofocus>
						<option selected>--Select Major--</option>
						<?php query_majors()?>
					</select></br>
				</div>
			</div>
			
			<div class="control-group" id="major2group" style="display: none;">
				<label>2nd Major:</label>
				<div class="controls">
					<select class="form-control" name="major2" id="major2" onchange="major2SelectHandler()">
						<option selected>--Select Major--</option>
						<?php query_majors()?>
					</select></br>
				</div>
			</div>
			
			<div class="control-group" id="minor1group" style="display: none;" onchange="minor1SelectHandler()">
				<label>1st Minor:</label>
				<div class="controls">
					<select class="form-control" name="minor1" id="minor1" style="display: none;">
						<option selected>--Select Minor--</option>
						<?php query_minors()?>
					</select></br>
				</div>
			</div>
			
			<div class="control-group" id="minor2group" style="display: none;">
				<label>2nd Minor:</label>
				<div class="controls">
					<select class="form-control" name="minor2">
					<option selected>--Select Minor--</option>
						<?php query_minors()?>
					</select></br>
				</div>
			</div>
			
			<div class="control-group">
				<label>Level:</label>
				<div class="controls">
					<select class="form-control" name="level">
					<option selected>--Select Year--</option>
					<option>1st Year</option>
					<option>2nd Year</option>
					<option>3rd Year</option>
					<option>4th Year +</option>
					</select></br>
				</div>
			</div>
			
			<div class="control-group">
				<label>Status:</label>
				<div class="controls">
					<select class="form-control" name="status">
					<option selected>--Select Status--</option>
					<option>Full Time</option>
					<option>Part Time</option>
					</select></br>
				</div>
			</div>
			
			<div class="control-group" style="float: right">
              <label></label>
              <div class="controls">
                <button type="submit" class="btn btn-primary">Plan My Degree</button>
              </div>
            </div>
		</form>
         
            <!--center-right-->
        	
     
       </div><!--/row-->
  	</div><!--/col-span-9-->
    
  </div><!--/row-->
  <!-- /upper section -->
  
  <!-- lower section -->
  
   
    
  </div><!--/row-->
  
</div><!--/container-->
<!-- /Main -->


<footer class="text-center">CAPSTONE Project Student Course Advisor</footer>
  
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>