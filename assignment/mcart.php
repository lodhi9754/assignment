<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="" />

<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>my cart</title>

<script>
function bill(){
	if(document.getElementById("tot").value=="")
	{
		alert("first enter on total");
		}
		else
		{document.getElementById("an").style.display="none";
	window.print() ;
		}
		document.getElementById("an").style.display="block";
	}
</script>
</head>

<body>
<br /><br />



<?php
session_start();
if(isset($_SESSION['usr']))
$user=$_SESSION['usr'];
else
$user='';
include('connection.php');



if(isset($_REQUEST['id']))
{
$id=$_REQUEST['id'];
$a=mysql_fetch_array(mysql_query("select * from additem where ID=$id"));
if($c= mysql_fetch_array(mysql_query("select * from cart where itmid=$id and userid='$user'")))
{?>
<script>
document.write(<?php echo $m['userid'];?>);
</script>
<?php
	
}
	

else
{echo mysql_error();	
	?>
    <script>alert('no item in cart');
	</script>
    <?php

}
}
?>



<form method="post">
            <?php 
			
			$a=mysql_query("select * from cart where userid='$user'  ");?>
		<div class="container">
            <div class="col-lg-12 well-sm alert-success thumbnail text-center">WELCOME&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $user; ;?>&nbsp;&nbsp;<span class="fa fa-user text-center"></span> &nbsp;&nbsp;&nbsp; <?php echo date('d/m/y');?></div></div>
            <div class="jumbotron">
    <h3 style="margin-top:-40px;">YOUR BILL:-</h3>
<span class="pull-right"><a href="userpanel.php">continioue shopping</a></span>
<hr />	
           
	<?php		while($c=mysql_fetch_array($a))
			{?>
            
		      <input type="text" name="itname[]" value="<?php echo $c['itname'] ?>" readonly="readonly" /><input type="text" style="display:none" name="count[]" />
              	      <input type="text" name="prc[]"  id="prc" value="<?php echo $c['price'] ?>" readonly="readonly"/>
                      	      <input type="text" name="qnt[]"  id="qnt"  value="1"/>
                                <input type="text"  id="total" name="total[]" readonly="readonly" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="remove.php?x=<?php echo $c['id'];?>" style="text-decoration:none" id="an">Remove<span class="glyphicon glyphicon-remove"></span></a>
              
    <br /><br />
<br />

 <?php

}?>
  

 <div class="col-md-3" style="margin-left:75%;">
        <input type="submit" class="btn btn-success btn-lg btn-block"  value="total" onclick="sum1()" > 
        
        </div>
         <div class="col-md-6" style="margin-left:25%;">
             <h2>Total Amount<span> ₹<input type="text" readonly="readonly" name="tot" id="tot" size="8" style="padding-left:25px;"/></span></h2> 
              
           
              
              <input type="submit" class="btn btn-info  btn-block"  name="sub" value="checkout" data-toggle="modal" data-target="#myModal"  />
             <br />

              <button type="button" class="btn btn-primary" style="margin-left:30%" onclick="bill()">print bill</button> 
             </div>
             
             
        </div>

<script>
function sum1()
{
var a,b,c,sum=0;
var y=document.getElementsByName("count[]").length;
for(var x=0;x<y;x++)
{
a=document.getElementsByName("prc[]").item(x).value;
b=document.getElementsByName("qnt[]").item(x).value;
c=Number(a)*Number(b);
document.getElementsByName("total[]").item(x).value=""+c;
sum=sum+c;	
}
document.getElementById("tot").value=""+sum+" /-";

}
</script> 



        
         <div class="container">
   
 <!-- Modal -->
 
 <?php
 $q=mysql_query("select *from signup where email='$user'");
 if($u=mysql_fetch_array($q))
 {
	}
 else{
	 echo mysql_error();}
 
 ?>
 
 
 
 
  <div class="modal fade" id="myModal" role="dialog" >
    <div class="modal-dialog" >
     <!-- Modal content-->
      <div class="modal-content">
        
        
        <div class="modal-body">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="panel panel-primary">
<div class="panel-body">

<div class="form-group">
            <label class="control-label"> Name</label>
      <input  type="text"  class="form-control" value="<?php echo $u['Name'];?>" name="nam"  />
          </div>
          
          <div class="form-group">
            <label class="control-label">Phone</label> 
   <input  type="text" class="form-control"  name="mob" />
          </div>
          
          
            <div class="form-group">
            <label class="control-label">Pincode</label>
            <input type="text" required="required" class="form-control" placeholder="Enter  Pincode."name="pin" />
          </div>
          
          <div class="form-group" >
              <label class="control-label">Select City</label>
      <select class="form-control" name="cities">
    <option><b>Select City</b></option>
    <option>Morena</option>
    <option>Gwalior</option>
    </select>
 </div>
          
           
  <div class="form-group">
            <label class="control-label">Address</label>
            <input type="text" class="form-control" style="min-height:60px"   placeholder="Enter your address" name="address" ></input>
          </div>
          
           <div class="form-group">
            <label class="control-label">Landmark</label>
            <input type="text"  style="min-height:40px" class="form-control" placeholder="Enter land mark" name="landmark"></input>
          </div>
          
          
          <div class="form-group">
         <input type="checkbox"  name="checkbox">Use as default </input>
          </div>
          
          
           <input type="submit" class="btn btn-primary nextBtn btn-lg pull-right" name="next" value="next" />
           
 
</div>
</div>
</div>
 </div>
        
      </div>
      
    </div>
  </div></form>
        
        
        <!--CREAT NEW TABLE FOR INSERTING DATA FROM CART-->
        
        
                 <?php
if(isset($_POST['next']))
{
	
$nm=$_POST['nam'];
$mb=$_POST['mob'];
$pn=$_POST['pin'];
$cit=$_POST['cities'];
$add=$_POST['address'];
$lnk=$_POST['landmark'];
$item=$_POST['itname'];
	$pri1=$_POST['prc'];
	$qnt1=$_POST['qnt'];
	$tot=$_POST['tot'];
	$gt=$_POST["total"];
	$tid=rand(10,1000);
	$d=date('d/m/y');
if(mysql_query("insert into checkout(name,mobile,pincode,city,address,landmark,userid,pid,status) VALUES('$nm','$mb','$pn','$cit','$add','$lnk','$user',$tid,'unpaid')"))	
{
	
	for($k=0;$k<count($item);$k++)
	{
		$it=$item[$k];
		$pr=$pri1[$k];
		$qt=$qnt1[$k];
		$to=$tot[$k];
				if(mysql_query("insert into order1(itnm, price, quantity, total,userid,transid,status,date) values('$it',$pr,$qt,'$tot','$user',$tid,'unpaid','$d')"))
		{
			}
				else
				echo mysql_error();
				

	}
	
	}


else

{
echo mysql_error();	
	}

	header('location:order.php');
	}
?>




        


   
</body>
</html>