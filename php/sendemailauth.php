<?php
session_start();
include("conn.php");
//include("mailchimpapirequest.php");
$email=$conn->real_escape_string(htmlentities($_POST["email"],ENT_QUOTES));

if (empty($email)) {
  //header("location:../signup/");
  $_SESSION["accessdenied"]="EMPTY FIELD DETECTED";
  header("location:../login/forgot-password/");
}else {


$checkemail=mysqli_query($conn,"SELECT * FROM accounts WHERE email='$email'");
$row=mysqli_num_rows($checkemail);

if ($row > 0) {
while ($a=mysqli_fetch_array($row)) {
  $email=$a['email'];
}
/**
 * email script will go here. Qserver doesn't allow email function
 */

$_SESSION["accessgranted"]="You will recieve an email to reset your password if the email was found in our system";
header("location:../login/forgot-password/");
}else {

$_SESSION["accessgranted"]="You will recieve an email to reset your password if the email was found in our system";
header("location:../login/forgot-password/");
}
}
?>
