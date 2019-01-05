<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" />


</head>

<body >
<nav class="navbar navbar-default navbar-fixed-top">
<div class="container">
<div class="navbar-header"><a href="#" class="navbar-brand" >ADMIN PANEL</a> 
 
<button type="button"   class="navbar-toggle"  data-toggle="collapse" data-target="#mybooks">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>

</button>

</div>
<div class="collapse navbar-collapse" id="mybooks">
<ul class="nav navbar-nav pull-right" >
<li><a href="add item.php">Add item</a> </li>

<li><a href="item list.php">Item list</a> </li>
<li><a href="index.php" >Logout </a> </li>
</ul>
</div>

</div>
</nav>
<br /><br /><br /><br />
<table class="table table-bordered" style="" >
<tr>
<th>ID</th><th>ITEM NAME</th><th>AUTHOR</th><th>IMAGE</th><th>PRICE</th><th>DELETE</th><th>EDIT</th>
</tr>
<?php
session_start();
include('connection.php');
if(isset($_SESSION['user']))
{
$mybook=mysql_query("select * from additem");
while($a=mysql_fetch_array($mybook))
{
	?>
    
    
    <tr>
    <td><?php echo $a['ID']?></td><td><?php echo $a['name']?></td><td><?php echo $a['ITEMNAME']?></td><td> <img src="pic/<?php echo $a['IMG']?>" style="height:25px;width:25px"/></td><td> ₹ <?php echo $a['PRICE']?></td>
    <td><a href="deleted.php?x=<?php echo $a['ID']?>"<span class="glyphicon glyphicon-trash"></span></a></td>
    <td><a href="update.php?y=<?php echo $a['ID']?>"<span class="glyphicon glyphicon-edit"></span></a></td>

    </tr>
	
	<?php
	
	}
}
else{?>
<script>alert("login first");
window.location='admin login.php'
</script>
<?php

}
?>
</table>







</body>
</html>