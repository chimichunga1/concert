<?php 
session_start();
if(isset($_POST["login_user"]))


{

$username = $_POST["username"];

$password = $_POST["password"];



  $xQx_user = "SELECT * FROM account_tbl WHERE user_name = '$username' AND user_password = '$password'";
  $query_user=mysqli_query($c1,$xQx_user);



   while($row_user=mysqli_fetch_assoc($query_user))
            {



            $_SESSION["loggedin"] = "1";


            $get_user = $row_user["user_id"];


            }

$_SESSION["usermoto"] = $get_user;

}
?>