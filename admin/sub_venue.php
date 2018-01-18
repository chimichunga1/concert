<?php 
include_once("connect.php");

if(isset($_POST["add_venue"]))
{


$venue = $_POST["venue"];
$address = $_POST["address"];


  $table2c = "INSERT INTO venue_tbl (venue_name, address) VALUES ('$venue','$address')";
   $run_query2d = mysqli_query($c1,$table2c);
  
       echo"<script>window.location.href='admin_venue.php';</script>";	





}



?>