<?php
include("12work3con.php");
if(isset($_POST["sub"])){
	
  $a=$_POST['t1'];
  $b=$_POST['t2'];
  $c=$_POST['t3'];
  $sql=mysql_query("insert into 12work2(name,email,password)values('$a','$b','$c')");
  if($sql){

           ?>

      <script> alert("data inserted");
            window.location="12work3.php";
  </script>


           <?php






  }





}














?>