<?php
session_start();
$id=$_SESSION["id"];
include("conn.php");
if(isset($_POST["update_profile"])){
  $nphone=$conn->real_escape_string(htmlentities($_POST["new_phone"],ENT_QUOTES));
  $nlevel=$conn->real_escape_string(htmlentities($_POST["new_level"],ENT_QUOTES));
  $ndepartment=$conn->real_escape_string(htmlentities($_POST["new_department"],ENT_QUOTES));

  mysqli_query($conn,"UPDATE accounts SET phone='$nphone',level='$nlevel',department='$ndepartment' WHERE id='$id'");
  $_SESSION["msg"]="UPDATED!";
  header("location:../users/profile");
}
else{

  if ($_SESSION["id"]) {
      header("location:../users/profile/update_profile.php");
  }
  else{
    header("location:../login/");

  }

}


 ?>
