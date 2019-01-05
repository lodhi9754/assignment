<?php
include('connection.php');
$d=$_REQUEST['x'];
$mybook=mysql_query(" delete from cart where id='$d'");
if($mybook)
{header("location:mcart.php");
	
	
	}







?>