<?php
include("12work3con.php");

$sql=mysql_query("select * from 12work2");

while($a=mysql_fetch_array($sql)){

?>

   <h3> <?php   echo $a['name']     ?>    </h3>
    <h3> <?php   echo $a['email']     ?>    </h3>
     <h3> <?php   echo $a['password']     ?>    </h3>
    



<?php





}



$sql1=mysql_query("select count(*) as tot from 12work2 ");
$tot1=mysql_fetch_array($sql1);
$count=$tot1['tot'];

if($count){


	?>


   <h2 style="color: red;font-weight: 900">  <?php  echo $count  ?>  </h2>

	<?php





}






?>












