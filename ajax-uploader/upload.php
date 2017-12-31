<?php
session_start();
$id=$_SESSION["id"];
include("../php/conn.php");
$sql="SELECT * FROM accounts WHERE id='$id'";
$result=mysqli_query($conn,$sql);
 while ($row=mysqli_fetch_array($result)) {
  $idc=$row['id'];
 }
 $stat=1;
 $profile_picture_destination="../users/user".$idc."/";
 $fileextention="_thump.jpg";

//checks for the dir existence and makes it
 if (!is_dir($profile_picture_destination)) {
   //makes the directory with the user id
    mkdir($profile_picture_destination, 0777, true);
 }
 //
 $pic=$profile_picture_destination.$idc.$fileextention;
if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
$file = $_FILES['userImage']['tmp_name'];
$source_properties = getimagesize($file);
$image_type = $source_properties[2];

if( $image_type == IMAGETYPE_JPEG ) {
  $image_resource_id = imagecreatefromjpeg($file);
  $target_layer = fn_resize($image_resource_id,$source_properties[0],$source_properties[1]);
  @unlink($pic);
  imagegif($target_layer,$profile_picture_destination.$idc . "_thump.jpg");
  $sql="UPDATE profileimage SET status='$stat' WHERE userid='$id'";
mysqli_query($conn,$sql);
}

elseif( $image_type == IMAGETYPE_GIF )  {
$image_resource_id = imagecreatefromgif($file);
$target_layer = fn_resize($image_resource_id,$source_properties[0],$source_properties[1]);
@unlink($pic);
imagegif($target_layer,$profile_picture_destination.$idc . "_thump.jpg");
$sql="UPDATE profileimage SET status='$stat' WHERE userid='$id'";
mysqli_query($conn,$sql);
}
elseif( $image_type == IMAGETYPE_PNG ) {
$image_resource_id = imagecreatefrompng($file);
$target_layer = fn_resize($image_resource_id,$source_properties[0],$source_properties[1]);
@unlink($pic);
imagepng($target_layer,$profile_picture_destination.$idc . "_thump.jpg");
$sql="UPDATE profileimage SET status='$stat' WHERE userid='$id'";
mysqli_query($conn,$sql);

}
}
}
function fn_resize($image_resource_id,$width,$height) {
$target_width =200;
$target_height =200;
$target_layer=imagecreatetruecolor($target_width,$target_height);
imagecopyresampled($target_layer,$image_resource_id,0,0,0,0,$target_width,$target_height, $width,$height);
return $target_layer;
}
//$targetPath = "images/".$_FILES['userImage']['name'];
//if(move_uploaded_file($file,$targetPath)) {
?>
<!--<img src="<?php //echo $targetPath; ?>" width="200px" height="200px" class="upload-preview" />-->
<?php
//}
//}
//}
//if(is_array($_FILES)) {
//$file = $_FILES['myImage']['tmp_name'];

?>
