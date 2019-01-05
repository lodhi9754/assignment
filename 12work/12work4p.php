<!DOCTYPE html>
<html>
<head>
	<title>
		




	</title>

<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<link href="../bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" />

<script src="../bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 




</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-md-12">
	    <p>&nbsp;</p>
		<p>&nbsp;</p>
		<button type="button" id="button1"  class="btn btn-success btn-block">Click Here To Start Progress Bar</button>
		<p>&nbsp;<p>
		<button type="button" id="button2"  class="btn btn-danger btn-block">Click Here To Stop Progress Bar</button>
    </div>
    <div class="col-md-12">
		<p>&nbsp;</p>
	    <p>&nbsp;</p>
		<div id="progressbar" style="border:1px solid #ccc; border-radius: 5px; "></div>
  
		<!-- Progress information -->
		<br>
		<div id="information" ></div>
	</div>
  </div>
</div>

<iframe id="loadarea" style="display:none;"></iframe><br />

<script >
	$("#button1").click(function(){
		document.getElementById('loadarea').src = 'progressbar.php';
	});
	$("#button2").click(function(){
		document.getElementById('loadarea').src = '';
	});
</script>



<?php
session_start();

ini_set('max_execution_time', 0); // to get unlimited php script execution time

if(empty($_SESSION['i'])){
    $_SESSION['i'] = 0;
}

$total = 100;
for($i=$_SESSION['i'];$i<$total;$i++)
{
    $_SESSION['i'] = $i;
    $percent = intval($i/$total * 100)."%";   
	
    sleep(1); // Here call your time taking function like sending bulk sms etc.

    echo '<script>
    parent.document.getElementById("progressbar").innerHTML="<div style=\"width:'.$percent.';background:linear-gradient(to bottom, rgba(125,126,125,1) 0%,rgba(14,14,14,1) 100%); ;height:35px;\">&nbsp;</div>";
    parent.document.getElementById("information").innerHTML="<div style=\"text-align:center; font-weight:bold\">'.$percent.' is processed.</div>";</script>';

    ob_flush(); 
    flush(); 
}
echo '<script>parent.document.getElementById("information").innerHTML="<div style=\"text-align:center; font-weight:bold\">Process completed</div>"</script>';

session_destroy();

?>
</body>
</html>