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
		<script src="worksheet.js"></script>
	</head>
	<body>
<!-- Header -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <?php include 'navbar.php';?>
    </nav>
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
        <li><a href="majors.php"><i class="glyphicon glyphicon-flash"></i> Choose Your Major/Minor</a></li>
        <li><a href="worksheet.php"><i class="glyphicon glyphicon-link"></i> Year 1</a></li>
        <li><a href="worksheet.php"><i class="glyphicon glyphicon-list-alt"></i> Year 2</a></li>
        <li><a href="worksheet.php"><i class="glyphicon glyphicon-book"></i> Year 3</a></li>
        <li><a href="worksheet.php"><i class="glyphicon glyphicon-briefcase"></i> Year 4+</a></li>
      </ul>
      
      <hr>
      
  	</div><!-- /span-3 -->
    <div class="col-sm-9" >
      	
      <!-- column 2 -->	
       <h3><i class="glyphicon glyphicon-education"></i> Here are some suggestions.</h3>  
            
       <hr>
	   
			 <div class="panel panel-default">
        <div class="panel-heading">
          <div class="panel-title">
            <i class="glyphicon glyphicon-wrench pull-right"></i>
			<p>Please take into consideration that these are just merely suggestions. You have the right to accept or decline our advise. In addition, pay 
			keen attention to the credit limits on each semester.</p>
          </div>
        </div>
        <div class="panel-body">

          <form class="form form-vertical">
            <div class="control-group" name="major1">
              <label><?php query_MyCourses_major1() ?></label>
              <div class="controls">
          <?php query_MyCourses_major1_semester1_level1() ?>
              </div>
            </div> 
          
          <form class="form form-vertical">
            <div class="control-group" name="major1">
              <label><?php query_MyCourses_major1() ?></label>
              <div class="controls">
					<?php query_MyCourses_major1_semester1_level1() ?>
              </div>
            </div> 
			
      
			
			<div class="control-group">
              <label class="form-control">Electives</label>
			  <p style="color: blue">Use these courses to add to your credit count.</p>
              <div class="controls">
			  <table style="width: 100%" >
			  <tr>
					<td style="text-align: center"><b>Semester I</b></td>
					<td style="text-align: center"><b>Semester II</b></td>
				</tr>
			  <tr style="vertical-align: top">
			  <td>
				<p style="color: blue">Total Credits Semester I: </p>
                </td>
				
				<td>
				<p style="color: blue">Total Credits Semester II: </p>
                </td>
				</tr>
				
				</table>
              </div>
            </div>   
			
			<div class="control-group">
              <label class="form-control">Foundation</label>
			  <p style="color: blue">You must complete a total of three(3) foundation courses in the span of your university life. Start by completing one each academic year</p>
              <div class="controls">
			  <table style="width: 100%" >
			  <tr>
					<td style="text-align: center"><b>Semester I</b></td>
					<td style="text-align: center"><b>Semester II</b></td>
				</tr>
			  <tr style="vertical-align: top">
			  <td>
				<p style="color: blue">Total Credits Semester I: </p>
                </td>
				
				<td>
				<p style="color: blue">Total Credits Semester II: </p>
                </td>
				</tr>
				
				</table>
              </div>
            </div>   
         
            <div class="control-group" style="float: right">
              <label></label>
              <div class="controls">
                <button type="submit" class="btn btn-primary">View my worksheet</button>
              </div>
            </div>   
            
          </form>
		
         
            <!--center-right-->
        	
     
       </div><!--/row-->
  	</div><!--/col-span-9-->
    
  </div><!--/row-->
  <!-- /upper section -->
  
  <!-- lower section -->
  
    
      
      
    
    </div><!--/col-->
    
  </div><!--/row-->
  
</div><!--/container-->
<!-- /Main -->


<div class="modal" id="addWidgetModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Add Widget</h4>
      </div>
      <div class="modal-body">
        <p>Add a widget stuff here..</p>
      </div>
      <div class="modal-footer">
        <a href="#" class="btn">Close</a>
        <a href="#" class="btn btn-primary">Save changes</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dalog -->
</div><!-- /.modal -->



  
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
	<footer class="text-center">CAPSTONE Project Student Course Advisor</footer>
</html>


