<?php 

include_once("connect.php");


$del_id = $_POST["del_id"];



  $table2c = "DELETE FROM account_tbl WHERE user_id = '$del_id'";
  $run_query2d = mysqli_query($c1,$table2c);
  
       echo"<script>window.location.href='admin_admin.php';</script>";	











?>