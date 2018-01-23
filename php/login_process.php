<?php
session_start();
include("conn.php");

$_SERVER['REQUEST_URI'];
$email=$conn->real_escape_string(htmlentities($_POST["email"],ENT_QUOTES));
$password=$conn->real_escape_string(htmlentities($_POST["password"],ENT_QUOTES));
if (empty($email) || empty($password)) {
  $_SESSION['error']="EMPTY FIELD DETECTED";
header("location:../login");
} else{
$request= mysqli_query($conn,"SELECT * FROM accounts WHERE email='$email' && password='$password'");
if($request->num_rows==0) {
  $_SESSION['error']="Email or Password incorrect";
    header("location:../login/");
}else{
  $display=mysqli_query($conn,"SELECT * FROM accounts WHERE email='$email'");
  while ($row =mysqli_fetch_assoc($display)) {
    $id=$row['id'];
    $email=$row['email'];

  }
  $SESSION["hash"]=md5($email);
  $SESSION["email"]=$email;
  $_SESSION["id"]=$id;
 header("location:../");

}
}



 ?>
