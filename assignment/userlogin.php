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
<div class="panel-heading " style="background:#00C;color:white">  USER LOGIN </div>
<form method="post" ><br />

<input type="email" placeholder="E-mail" name="l1" class="form-control"/><br />

 <input type="password" placeholder="Password"  name="l2" class="form-control"/><br />

<input type="submit" value="login"  name="btn1" class="form-control"/>
<br />
<br />

<a href="books fair.php"><button type="button"   class="form-control"> BACK</button></a>
</form>




</div>


<?php
session_start();
include('connection.php');
if(isset($_POST['btn1']))
{
	$em=$_POST['l1'];
	$pw=$_POST['l2'];
	
	$sql=mysql_query("select * from signup where email='$em' and password='$pw'");
	$a=mysql_fetch_array($sql);
	if($a)
	{
		$_SESSION['usr']=$em;
		?><script>
    window.location="userpanel.php";
    </script>
        <script>alert("login successfully");</script>;
		<?php
		}
	
	else{?><script>alert("some issues");</script>
	<?php echo mysql_error();
	}
	}

?>

</body>
</html>