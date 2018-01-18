<?php 
include_once("connect.php");



if(isset($_POST["sub_events"]))


{



$event_name = $_POST["event_name"];
$description = $_POST["event_description"];
$event_date = $_POST["event_date"];
$event_time = $_POST["event_time"];
$event_venue = $_POST["event_venue"];
$tmp_name1 =$_FILES['newsimg']['tmp_name'];



        $table2 = "select MAX(event_id) from event_tbl";
	            $run_query2b = mysqli_query($c1,$table2);         

	 		$row = mysqli_fetch_row($run_query2b);
	   $IMGID = "P ".$event_name.$row[0];


if ($_FILES['newsimg']['size'] == 0)
{
 $image = "";
}

else

{
		if($_FILES['newsimg']['name'] = "image/jpeg")
		{


		    $filetype1 = ".jpeg";

		}
		elseif($_FILES['newsimg']['name'] = "image/jpg")
		{

		    $filetype1 = ".jpg";
		}
		elseif($_FILES['newsimg']['name'] = "image/png")
		{

		    $filetype1 = ".png";
		}
		else
		{
		        echo "<script>alert('Error!')</script>";
		     
    		    echo"<script>window.location.href='admin_events.php';</script>";	
		}



		$_FILES['newsimg']['name'] = $IMGID.$filetype1;
		        $filename1 = $_FILES['newsimg']['name'];

		        $tmp_name1 = $_FILES['newsimg']['tmp_name'];
		        
		        $local_image = 'images/';
		        move_uploaded_file($tmp_name1,$local_image.$filename1);
		        $newsimg = "images/".$_FILES['newsimg']['name'];




}



  



  $table2c = "INSERT INTO event_tbl (event_name, description, event_date, event_time, venue_name, event_image) VALUES ('$event_name','$description','$event_date','$event_time','$event_venue','$newsimg')";
   $run_query2d = mysqli_query($c1,$table2c);
  
       echo"<script>window.location.href='admin_events.php';</script>";	












}





?>