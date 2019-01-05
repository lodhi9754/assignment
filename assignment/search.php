<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>



<div class="col-lg-12">






<table class="table table-bordered" style="background-color:rgba(0,0,0,0.1)" >
<?php




	
	$nm=$_GET["name"];
if($nm==""){   echo "Empty";}


else{

include('connection.php');
$mybook=mysql_query("select * from additem where  name like ('$nm%')");


while($a=mysql_fetch_array($mybook))
{
	?>
    <tr>
    <td><?php echo $a['ID']?></td><td><?php echo $a['name']?></td><td> <img src="pic/<?php echo $a['IMG']?>" style="height:100px;width:100px"/></td><td><span class="fa fa-rupee"></span><span style="color:#009"> <?php echo $a['PRICE']?></span></td>
    
    <td><button type="button" class="btn btn-danger" ><a href="addcart.php?id=<?php echo $a['ID']?>" style="text-decoration:none;color:#FFF"><b>Add to cart</b></a></button></td>
    </tr>
	
	<?php
	
	 }

}

?>
</body>
</html>