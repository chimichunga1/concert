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
<!-- <button id="addbtn" type='button'  style="width:99%;" class="btn btn-success">Add  +</button> -->



<div id="panel">

 
  <form  role="form" action="sub_accounts.php" method="post"  enctype="multipart/form-data">
    <div class="form-group">
      <label >  Userame:</label>
      <input type="text" class="form-control btn btn-success" name="venue" required>
    </div>
    <div class="form-group">
      <label >  Password :</label>
      <input type="text" class="form-control btn btn-success"  name="address" required>
    </div>

<!--     <div class="form-group">
      <label >  Contact number :</label>
      <input type="text" class="form-control btn btn-success"   name="address" pattern="[0-9]{11}">
    </div>

    <div class="form-group">
      <label >  email :</label>
      <input type="text" class="form-control btn btn-success"   name="address" >
    </div> -->

<!--      <div class="form-group">
      <label >  Access Right :</label>


             <select name="seat_class"  class="form-control" required>
                 <option value="" Selected> </option> 

                       <option value="1">VIP</option>

                       <option value="2">Upper Box</option>

                       <option value="3">Lower Box</option>

                       <option value="4">General Admission</option>    

              </select>
    </div> -->


  

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
            <th>Username</th>
            <th>Password</th>
            <th>Transaction Id</th>
            <th>Transaction Number</th>


            <th>Action</th>     
        </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
    <?php 
   
    $fetch=mysqli_query($c1,'SELECT * From account_tbl'); 
    while($row=mysqli_fetch_assoc($fetch))
    {	

  ?>
        <tr>
            <th scope="row" style="vertical-align: middle;"><?php echo $row['user_id']; ?></th>
            <th style="color: black;background-color: white; vertical-align: middle;"><?php echo $row['user_name']; ?></th>


            <th style="color: black;background-color: white;vertical-align: middle;"><?php echo $row['user_password']; ?></th>
            <th style="color: black;background-color: white;vertical-align: middle;"><?php echo $row['transac_id']; ?></th>

            <th style="color: black;background-color: white;vertical-align: middle;"><?php echo $row['transac_number']; ?></th>
     <!-- <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#'.$Mymodal.'" ><i class="glyphicon glyphicon-edit"></i></button> -->
            <?php    
      echo "<th style='color: black;background-color: white;vertical-align: middle;' >";
    $Mahmodal="Mahmodal".$row['user_id'];
  $Mymodal="Mymodal".$row['user_id'];
$Yourmodal="Yourmodal".$row['user_id'];
    echo '<center>


     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#'.$Mahmodal.'" ><i class="fa fa-eye"></i></button>

     <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#'.$Yourmodal.'"><i class="glyphicon glyphicon-remove"></i></button></center>';




  echo "</td>";

echo
"
    
    <!-- Modal HTML -->
    <div id='".$Mahmodal."' class='modal fade'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                    <h4 class='modal-title'>VIEW FORM </h4>
                </div>
                <div class='modal-body'>
        


 <form  role='form' action='edit_announcement.php' method='post' enctype='multipart/form-data'>

";



echo "
  <div class='form-group'>
      <label >Contact Number :</label>
      <input type='text' class='form-control'  name='venue_name' placeholder='".$row['contact_number']."' disabled >
    </div>
  <div class='form-group'>
      <label >Email :</label>
      <input type='text' class='form-control'  name='venue_name' placeholder='".$row['email']."' disabled>
    </div>
      <div class='form-group'>
      <label >Accessright :</label>
      <input type='text' class='form-control'  name='venue_name' placeholder='".$row['accessright']."' disabled>
    </div>





 



                </div>
                <div class='modal-footer'>

                    <button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>
  </form>
                </div>
            </div>
        </div>
    </div>
";


   
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
      <input type='text' class='form-control'  name='venue_name' placeholder='".$row['user_name']."' >
    </div>

  <div class='form-group'>
      <label >Venue :</label>
      <input type='text' class='form-control'  name='venue_name' placeholder='".$row['user_password']."' >
    </div>
   <div class='form-group'>
      <label >Venue :</label>
      <input type='text' class='form-control'  name='venue_name' placeholder='".$row['user_name']."' >
    </div>
      <div class='form-group'>
      <label >Venue :</label>
      <input type='text' class='form-control'  name='venue_name' placeholder='".$row['user_name']."' >
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
      <input type='text' class='form-control'  name='delID'  style='opacity:0;display:none;' value='".$row['user_id']."'>
      <label ><center>Are you sure you want to delete '".$row['user_name']."' ?</center></label>
      
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
