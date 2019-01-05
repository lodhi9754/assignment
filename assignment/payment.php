<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" />


</head>


<body  data-spy="scroll" data-target=".navbar" data-offset="50px">
<nav class="navbar navbar-default navbar-fixed-top" >
<div class="container">
<div class="navbar-header"><a href="#" class="navbar-brand" >
PAYMENT PANEL

 </a> 

</div>

</div>
</nav>
<body>
<div class="container">
<form method="post" style="margin-top:10%">
<input type="button" value="payment" class="btn btn-info btn-warning "  style="height:50px" />
<input type="submit" value="case on delivery" class="btn btn-primary  form-control" name="cod" style="margin-top:2%" />
</form>
</div>

<?php

session_start();
$user=$_SESSION["usr"];
include('connection.php');
if(isset($_POST['cod']))
{if(mysql_query("update checkout set status='cod' where status='unpaid' and userid='$user'"))
{
}
if(mysql_query("update order1 set status='cod' where status='unpaid' and userid='$user'"))

 
 
 
 {    
	 echo " oder successfull";
	 header('location:userpanel.php');
 }
  else
   echo mysql_error();
}

?>

</body>
</html>

