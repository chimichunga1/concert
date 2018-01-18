<?php 
include_once("connect.php");

$event_id = $_POST["event_name"];
$seat_id = $_POST["seat_class"];


if($seat_id == 1)
{
$seat_class = "VIP";
}
elseif($seat_id == 2)
{
$seat_class = " UPPER BOX";
}
elseif($seat_id ==3)
{

$seat_class = "LOWER BOX";
}
elseif($seat_id ==4)
{
$seat_class = "GENERAL ADMISSION";
}

else
{
	$seat_class="unknown";
}
$seat_quantity = $_POST["seat_quantity"];
$seat_price = $_POST["seat_price"];








  $xQx_seats = "SELECT * FROM zone_tbl WHERE zone_name = '$seat_class' AND event_id = '$event_id'";
  $query_seats=mysqli_query($c1,$xQx_seats);
   while($row_seats=mysqli_fetch_assoc($query_seats))
            {


            		$check = $row_seats["zone_id"];
            }










            		if(!empty($check))



           {



            echo "error!";
           //DO STUFF 
            echo"<script>window.location.href='admin_seats.php';</script>";	
			}


elseif(empty($row_seats))

{
	  $table2c = "INSERT INTO zone_tbl (zone_name, zone_price, seat_quantity, event_id) VALUES ('$seat_class','$seat_price','$seat_quantity','$event_id')";
  $run_query2d = mysqli_query($c1,$table2c);
  
  echo"<script>window.location.href='admin_seats.php';</script>";	
}



/*

  $table2c = "INSERT INTO zone_tbl (zone_name, zone_price, seat_quantity, event_id) VALUES ('$seat_class','$seat_price','$seat_quantity','$event_id')";
  $run_query2d = mysqli_query($c1,$table2c);
  
  echo"<script>window.location.href='admin_seats.php';</script>";	
*/






?>