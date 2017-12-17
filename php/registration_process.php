<?php
session_start();
include("conn.php");

if(!isset($_POST['submit'])) {
  header("location:../signup/");
}
else{
  $first_name=$conn->real_escape_string(htmlentities($_POST["first_name"],ENT_QUOTES));
  $last_name=$conn->real_escape_string(htmlentities($_POST["last_name"],ENT_QUOTES));
  $phone=$conn->real_escape_string(htmlentities($_POST["phone"],ENT_QUOTES));
  $email=$conn->real_escape_string(htmlentities($_POST["email"],ENT_QUOTES));
  $confirm_password=$conn->real_escape_string(htmlentities($_POST["confirm_password"],ENT_QUOTES));
  $password=$conn->real_escape_string(htmlentities($_POST["password"],ENT_QUOTES));
  $school=$conn->real_escape_string(htmlentities($_POST["school"],ENT_QUOTES));
  $faculty=$conn->real_escape_string(htmlentities($_POST["faculty"],ENT_QUOTES));
  $level=$conn->real_escape_string(htmlentities($_POST["level"],ENT_QUOTES));




$registration_date=date('l jS \of F Y h:i:s A');
/*$result=mysqli_query($conn, "select * from accounts where email='$email'") or die(mysqli_error($conn));
$check_email=mysqli_num_rows($result);
if($password == $confirm_password && $check_email!=0) {
  mysqli_query($conn, "insert into accounts set email='$email', institution='$school', password='$password', last_name='$last_name', first_name='$first_name', level='$level', department='$department', registration_date='$registration_date', phone='$phone'") or die(mysqli_error($conn));
  header("location:../login/");}


else{

header("location:../signup/index.php?=error");}*/
$result=mysqli_query($conn, "select * from accounts where email='$email'") or die(mysqli_error($conn));


if(mysqli_num_rows($result)>0) {
$_SESSION['msg']="<font color=red><b>Invalid operation... Email address already exist for another account!</b></font>";
echo $_SESSION['msg'];
header("location:../signup/index.php?error=Email+already+in+use");

}


else if($password!==$confirm_password) {
$_SESSION['msg']="<font color=\"red\"><b> Password confirmation did not match!</b></font>";
echo $_SESSION['msg'];
header("location:../signup/index.php?error=password+miss+match");

}
else {
  mysqli_query($conn, "insert into accounts set email='$email', institution='$school', password='$password', last_name='$last_name', first_name='$first_name', level='$level', faculty='$faculty', registration_date='$registration_date', phone='$phone'") or die(mysqli_error($conn));
$imgquery=mysqli_query($conn,"SELECT * FROM accounts WHERE email='$email'");
while ($row=mysqli_fetch_array($imgquery)) {
  $id=$row["id"];
}
$setquery=mysqli_query($conn,"INSERT into profileimage SET userid='$id'");
  header("location:../login/");

}

        }




















  ?>
