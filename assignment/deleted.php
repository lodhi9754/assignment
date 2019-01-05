<?php


include('connection.php');

$d=$_REQUEST['x'];
$mybook=mysql_query("delete from additem where Id='$d'");
if($mybook)
{
	header("location:item list.php");
	
	}





?>