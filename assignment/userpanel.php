<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" />

<script type="text/javascript">
function searc(){
xmlhttp=new XMLHttpRequest();
xmlhttp.open("GET","search.php?name="+document.getElementById("t1").value,false);
xmlhttp.send(null);
document.getElementById("d1").innerHTML=xmlhttp.responseText;
document.getElementById("d1").style.visibility='visible';


}
</script>


</head>


<body>
<nav class="navbar navbar-default">
<ul class="nav navbar-nav">
<li><a href="mcart.php"><span style="color:#09F" ><span class="fa fa-cart-plus"></span><b><span class="glyphicon glyphicon-shopping-cart"><?php 
session_start();
include('connection.php');
if(isset($_SESSION['usr'])){
	$u=$_SESSION['usr'];
$mybook=mysql_query("select count(*) as count from cart where  userid='$u'");
$row=mysql_fetch_array($mybook);
$count=$row['count'];
if($count)
{
	
?>
<span class="badge" style="margin-top:-20px;background:#FFF;color:#F00;border:1px solid #00F"><?php echo $count   ?></span>

<?php    }}   ?>
</span></b> </span></a> </li>   

</ul>

</nav>

<div class="col-md-12" >

<br />
<br />

<div class="col-lg-2"></div>
<div class="col-lg-8 ">

<input type="text" id="t1" name="t1"  class="form-control" placeholder="Search Your Item........" onkeyup="searc()"/>

<br />
<br />
</div>
 </div>




<br />
<br />

<div class="col-lg-12" id="d1" ></div>

<div class="col-lg-12">






<table class="table table-bordered" style="background-color:rgba(0,0,0,0.1)" >
<tr>
<th>ID</th><th>ITEM NAME</th><th>IMAGE</th><th>PRICE</th><th>ADD TO CART</th>
</tr>

<?php 

include('connection.php');
$mybook=mysql_query("select * from additem");
while($a=mysql_fetch_array($mybook))
{
	?>
    <tr>
    
    <td><?php echo $a['ID']?></td><td><?php echo $a['name']?></td><td> <img src="pic/<?php echo $a['IMG']?>" style="height:100px;width:100px"/></td><td><span class="fa fa-rupee"></span><span style="color:#009">₹ <?php echo $a['PRICE']?></span></td>
    
    <td><button type="button" class="btn btn-danger" ><a href="addcart.php?id=<?php echo $a['ID']?>" style="text-decoration:none;color:#FFF"><b>Add to cart</b></a></button></td>
    </tr>
	
	<?php
	
	}



?>
</table>

</div>




</div>


</body>
</html>