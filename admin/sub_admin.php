<?php 

include_once("connect.php");




$username = $_POST["username"];
$password = $_POST["password"];









  $table2c = "INSERT INTO account_tbl (user_name, user_password, accessright) VALUES ('$username','$password', '1')";
  $run_query2d = mysqli_query($c1,$table2c);
  
       echo"<script>window.location.href='admin_admin.php';</script>";	










?>