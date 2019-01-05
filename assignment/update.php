<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
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
<li><a href="books fair.php" >Logout </a> </li>
</ul>
</div>

</div>
</nav>

<div class="container">

<br /><br /><br /><br/><br />
<div class="col-md-12" style="border-bottom:2px solid #000;border-top:2px solid #000;">
<center>
<span style="color:#000;font-size:34px;">UPDATE YOUR ITEM</span>
</center> 
</div>
<br /><br />

<?php
include('connection.php');
$n=$_REQUEST['y'];
$mybook=mysql_query("select * from additem where  ID=$n");


while($a=mysql_fetch_array($mybook))
{
	?>



<form method="post" enctype="multipart/form-data"  style="background-color:rgba(0,0,0,0.1);height:500px;color:#000;background-size:cover">
<br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label><span style="font-size:20px">ITEM NAME</span> &nbsp;</label>
<input type="text" name="t4"  value="<?php echo $a['name']?>" style="width:300px" />

<br />
 &nbsp; &nbsp; &nbsp; &nbsp;<label><span style="font-size:20px">ITEM PRICE</span>&nbsp; </label>&nbsp;<input type="text" name="t2"  value="<?php echo $a['PRICE']?>"  style="width:300px"/>
 <br />
 &nbsp; &nbsp; &nbsp; &nbsp;<label><span style="font-size:20px">Description</span>&nbsp; </label>&nbsp;&nbsp;<input type="text" name="t1"  value="<?php echo $a['ITEMNAME']?>"  style="width:300px"/>

<br />
<br />

<br /><br />


 &nbsp; &nbsp; &nbsp; &nbsp;<label><span style="font-size:20px">IMAGE UPLOAD</span></label><input type="file" name="t3" style="margin-left:18%;margin-top:-3%"/>
 <center><label > <img src="pic/<?php echo $a['IMG']?>" style="height:100px;width:100px;margin-right:200px;margin-top:-30px;border-radius:20px"/></label></center>

<br /><br />

   <span style="margin-left:30%;color:#000">   <input type="submit" name="sub" style="height:40px;width:100px;background:#0FF" /></span>




</form>


<?php }  ?>
<div class="col-md-12" style="background:#000;height:5px"></div>
</div>


<?php
if(isset($_POST['sub']))

{
$nm=$_POST['t1'];
$pr=$_POST['t2'];

$emg=$_FILES['t3']["name"];
$nm1=$_POST['t4'];


$up=$_REQUEST['y'];
$upp=mysql_query("update additem  set  name='$nm1' ,ITEMNAME='$nm',PRICE='$pr' ,IMG='$emg' where ID='$up' ");
if($upp)
{move_uploaded_file($_FILES['t3']['tmp_name'],"pic//".$emg);
	?>
    <script>window.location="item list.php";
       alert("ITEM UPDATED");
    
    </script>

<?php }
	
	else
	{echo mysql_error();
	}





}
?>








</body>
</html>