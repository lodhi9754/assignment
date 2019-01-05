<?php
session_start();
if(isset($_SESSION['usr']))
{
include('connection.php');
$x=$_REQUEST['id'];
$sql=mysql_query("select * from additem where ID='$x'");
$a=mysql_fetch_array($sql);

$itid=$a['ID'];
$itnm=$a['ITEMNAME'];
$pr=$a['PRICE'];
$ur=$_SESSION['usr'];
$dt=date('d/m/y');
$sql1=mysql_query("insert into cart(itmid,itname,price,userid,date,status)values($itid,'$itnm',$pr,'$ur','$dt','unpaid')");
if($sql)
{?><script> window.location='userpanel.php';</script>
<?php
	
	}





}




else
{?><script>alert("login first");
window.location='books fair.php';
</script>
<?php
 
echo mysql_error();	
	}



?>