<?php
session_start();
include("conn.php");

$email=$conn->real_escape_string(htmlentities($_POST["email"],ENT_QUOTES));
$password=$conn->real_escape_string(htmlentities($_POST["password"],ENT_QUOTES));
$request= mysqli_query($conn,"SELECT * FROM accounts WHERE email='$email' && password='$password'");
if($request->num_rows==0) {
    header("location:../login/");
}else{
  $display=mysqli_query($conn,"SELECT * FROM accounts WHERE email='$email'");
  while ($row =mysqli_fetch_assoc($display)) {
    $id=$row['id'];

  }
  $_SESSION["id"]=$id;
 header("location:../");

}



 ?>
