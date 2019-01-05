<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" />

</head>

<body>

<div class="col-lg-12" style="height:200px"></div>

<div class="col-lg-4"></div>

<div class="col-lg-4 panel-default">
<div class="panel-heading " style="background:#00C;color:white">  ADMIN LOGIN </div>
<form method="post" ><br />

<input type="email" placeholder="E-mail" name="b1" class="form-control"/><br />

 <input type="password" placeholder="Password"  name="b2" class="form-control"/><br />

<input type="submit" value="login"  name="sub1" class="form-control"/>
<br />
<br />

<a href="books fair.php"><button type="button"   class="form-control"> BACK</button></a>
</form>


<?php
session_start();
   include("connection.php");
  if(isset($_POST['sub1']))
  {
       $em=$_POST['b1'];
       $pw=$_POST['b2'];
           
		   $mybook =mysql_query("select * from reg where emai='$em' and password='$pw'");
		   $b=mysql_fetch_array($mybook);  
		   
		   if($b)
	{
		$_SESSION['user']='$em';
		
		?><script>
    window.location="adminpanel.php";
    </script>
	  <?php
		}
	else
	{?>
    <script>alert("some issue");</script>
    <?php
	echo mysql_error();
	
	}
  }?>





</div>




</body>
</html>