<?php  include ('connect.php');?>
<?php include ("modals.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | PYC</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<?php include("admin-head-links.php"); ?>

<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">



    <!-- Material Design Bootstrap -->
    <link href="layout/styles/mdb.min.css" rel="stylesheet">

    <!-- Your custom styles (optional) -->
    <link href="layout/styles/style.css" rel="stylesheet">
        <link href="layout/styles/simple-sidebar.css" rel="stylesheet">





<script type="text/javascript">
$(document).ready(function(){
    $(".show-text").click(function(){
      $('#myModal').find(".lots-of-text").toggle();
        $('#myModal').modal('handleUpdate');
    });
});
</script>
        <style type="text/css">

#panel {
  
    display: none;
    margin-left: 20px;
    margin-right: 20px;

}
button 
{
  text-decoration: none !important;
}
label
{
  font-size:1em;
  margin-left: 20px;
}
img 
{
  width: 60px;
  height: 60px;
}
</style>














</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php include("admin-header.php"); ?>
  <?php include("main-sidebar.php"); ?>

<div class="content-wrapper">




<br><br>
<div class="wrapper" style="background-color: transparent;">

<div class="wrapper" style="margin:10px; width:98%">
<button id="addbtn" type='button'  style="width:99%;" class="btn btn-success">Add Venue +</button>



<div id="panel">

 
  <form  role="form" action="sub_venue.php" method="post"  enctype="multipart/form-data">
    <div class="form-group">
      <label >  Venue Name:</label>
      <input type="text" class="form-control btn btn-success" name="venue" required>
    </div>
    <div class="form-group">
      <label >  Address :</label>
      <input type="text" class="form-control btn btn-success"  name="address" required>
    </div>





  

 <input type="submit" style="float:right" name="add_venue" id="submit" class="btn btn-success" value="Submit" />  

  </form>




<!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
  </div>
</div>


</div>

<br><br>
<div class="wrapper" style="background-color: white;">



<div class="col-md-12">

  <!--Table-->
<table class="table">

    <!--Table head-->
    <thead class="blue-grey lighten-4">
        <tr>
            <th>#</th>
            <th>Event Name</th>
            <th>Address</th>


            <th>Action</th>     
        </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
    <?php 
   
    $fetch=mysqli_query($c1,'SELECT * From venue_tbl'); 
    while($row=mysqli_fetch_assoc($fetch))
    {

  ?>
        <tr>
            <th scope="row" style="vertical-align: middle;"><?php echo $row['venue_id']; ?></th>
            <th style="color: black;background-color: white; vertical-align: middle;"><?php echo $row['venue_name']; ?></th>


            <th style="color: black;background-color: white;vertical-align: middle;"><?php echo $row['address']; ?></th>

            <?php    
      echo "<th style='color: black;background-color: white;vertical-align: middle;' >";
  
  $Mymodal="Mymodal".$row['venue_id'];
$Yourmodal="Yourmodal".$row['venue_id'];
    echo '<center>



     <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#'.$Mymodal.'" ><i class="glyphicon glyphicon-edit"></i></button>
     <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#'.$Yourmodal.'"><i class="glyphicon glyphicon-remove"></i></button></center>';




  echo "</td>";



   
echo
"
    
    <!-- Modal HTML -->
    <div id='".$Mymodal."' class='modal fade'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                    <h4 class='modal-title'>EDIT FORM </h4>
                </div>
                <div class='modal-body'>
        


 <form  role='form' action='edit_announcement.php' method='post' enctype='multipart/form-data'>

";



echo "
  <div class='form-group'>
      <label >Venue :</label>
      <input type='text' class='form-control'  name='venue_name' placeholder='".$row['venue_name']."' >
    </div>

      <div class='form-group'>
      <label >Address :</label>
      <input type='text' class='form-control'  name='address' placeholder='".$row['address']
  ."' >
    </div>



 



                </div>
                <div class='modal-footer'>
                    <button type='submit' name='submit' class='btn btn-success'>Save</button>
                    <button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>
  </form>
                </div>
            </div>
        </div>
    </div>
";


//==========================================================================
echo
"
    
    <!-- Modal HTML -->
    <div id='".$Yourmodal."' class='modal fade'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                    <h4 class='modal-title'>DELETE FORM </h4>
                </div>
                <div class='modal-body'>
                 
 <form  role='form' action='del_announcement.php' method='post' >
    <div class='form-group'>
      <input type='text' class='form-control'  name='delID'  style='opacity:0;display:none;' value='".$row['venue_id']."'>
      <label ><center>Are you sure you want to delete '".$row['venue_name']."' ?</center></label>
      
    </div>
                </div>
                <div class='modal-footer'>
                    <button type='submit' name='submit'  class='btn btn-success'>Yes</button>
                    <button type='button' class='btn btn-danger' data-dismiss='modal'>No</button>
  </form>
                </div>
            </div>
        </div>
    </div>
";
  
  echo "</tr>";




  ?>
      <?php
       }

    ?>
    </tbody>
    <!--Table body-->
</table>
<!--Table-->
</div>
</div>




</div>











<?php include("admin-footer.php"); ?>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<?php include("admin-scripts.php"); ?>
<script>
$(document).ready(function(){

    $("#addbtn").click(function(){
        $("#panel").slideToggle("slow");
    });


});
</script> 
</body>
</html>
