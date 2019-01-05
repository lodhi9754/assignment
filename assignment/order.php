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

ORDER


</a> 
</div>

</div>
</nav>
<?php
include('connection.php');
session_start();

$user=$_SESSION["usr"];

?>
<body>
<?php

	
	$sql2=mysql_query("select * from order1 where userid='$user' and status='unpaid'");
	?>
    
    
      <div class="jumbotron" id="hm2" style="height:100px;background-color:#FFF">
         <h3 style="margin-top:45px;text-align:center">Your Orders</h3>
         </div>

<div class="container">  
              
    <table class="table-striped table-bordered table-hover table-responsive" style="width:100%;">
  welcome:-  <?php echo $user; ;?>
      <thead>
            <tr>
               <th>Order ID</th>
               <th>Item name</th>
               <th>Price</th>
               <th>Quantity</th>
               
               <th>status</th>
            </tr>
     </thead>
      <tbody>
            <?php while($ar=mysql_fetch_array($sql2))
	      {?>
           <tr>
               <td><?php echo $ar["transid"];?></td>
               <td style="text-transform:capitalize"><?php echo $ar["itnm"];?></td>
               <td><span class="fa fa-rupee"></span> <?php echo $ar["price"];?></td>
               <td><?php echo $ar["quantity"];?></td>
               
               <td><?php echo $ar["status"];?> </td> 
           </tr>
           
          
           
           
	     <?php
	  }?>
     </tbody>
     </table>
     
     
     
     <!-----------------------    Grand total --------->
     
     
<?php

	
	$sql2=mysql_query("select * from order1 where userid='$user' and status='unpaid'");
	?>
    
       <?php if($ar=mysql_fetch_array($sql2))
	      {?>
<br />

 <div class="col-lg-12 " style="font-weight:900;text-align:right;border:1px solid lightblue"> <br />
 GRAND TOTAL  :  ₹     <?php echo $ar["total"];?>
 <br />
</div>


<?php  }  ?>
<br />

  
     <br />

         <br />

             
             <div class="col-md-6">
            <form method="post" ><a href="#"><button type="submit" name="sub" class=" btn btn-success btn-lg" style="margin-left:95%">Pay Now</button></a>
             </form>
             
        </div>  
            
<?php
if(isset($_POST['sub']))

{   
	$s=mysql_query("delete from cart where userid='$user'");
	if($s)
	{
    header('location:payment.php');
	}
	
	}

?>






</div>
</body>
</html>

