<?php
session_start();

include("conn.php");
    $level=$conn->real_escape_string(htmlentities($_POST["level"],ENT_QUOTES));
    $course_code=$conn->real_escape_string(htmlentities($_POST["material_name"],ENT_QUOTES));
    //material name made the course code because, of name confusions
    $university=$conn->real_escape_string(htmlentities($_POST["school"],ENT_QUOTES));
    $faculty=$conn->real_escape_string(htmlentities($_POST["faculty"],ENT_QUOTES));
    $fac = explode(" ", $faculty);
    $faculty=implode("_", $fac);
    $pieces = explode(" ", $university);
    $university=implode("_", $pieces);
    $material_name=$conn->real_escape_string(htmlentities($_POST["course_code"],ENT_QUOTES));
      //"material_name" accepts "course_code" while "course_code" accepts "material_name".
    $cartegory=$conn->real_escape_string(htmlentities($_POST["selection"],ENT_QUOTES));
    if (empty($university)||empty($course_code)||empty($cartegory)||empty($material_name)||empty($level)) {
      //if the fields are empty take them back to the page.
        $_SESSION["uploadmsg"]="All fields are compulsory (Required)!";
      header("location:../materials/upload-materials/");

    }else {


if(is_array($_FILES)) {
    if (isset($_FILES['materialfile']['name'])) {
      if (!empty($_FILES['materialfile']['name'])) {



    $materialfile=$_FILES['materialfile'];
    $pdffileName=$_FILES['materialfile']['name'];
    $pdffiletype=$_FILES['materialfile']['type'];
    $pdffiletmplocation=$_FILES['materialfile']['tmp_name'];
    $pdffileerror=$_FILES['materialfile']['error'];
    $pdffilesize=$_FILES['materialfile']['size'];
$fileExt=explode('.',$pdffileName);
$fileActualExt= strtolower(end($fileExt));
  //  print_r($materialfile);
$allowed = array('pdf','doc','docx','ppt');

  if (in_array($fileActualExt, $allowed)) {
    //print_r($materialfile);
    if($pdffileerror===0){
      if ($pdffilesize < 10000000) {
        $check="SELECT * FROM materials WHERE material_name='$material_name'";
        $result=mysqli_query($conn,$check);
        $rownum=mysqli_num_rows($result);
      //  echo "$rownum";
        if($rownum <= 0){

        $uploadwithextension=$material_name.".".$fileActualExt;
        $material_destination="../materials/".$cartegory."/".$university."/".$faculty."/";
        $material_destinationfordb="/materials/".$cartegory."/".$university."/".$faculty."/";
        if(!is_dir($material_destination)){//makes the directory with the user id
            mkdir($material_destination, 0777, true);
         }/*echo "$uploadwithextension";*/
         move_uploaded_file($pdffiletmplocation, "$material_destination/$uploadwithextension");
         $insert="INSERT into materials SET material_name='$course_code', path='$material_destinationfordb$uploadwithextension',university='$university', faculty='$faculty', course_code='$material_name', cartegory='$cartegory',level='$level'";
         $query=mysqli_query($conn,$insert);
         $_SESSION["uploadsuccess"]="Upload success!";
         header("location:../materials/upload-materials/");
       }else{
         $_SESSION["uploadmsg"]="A file with that exact name already exists";
         header("location:../materials/upload-materials/");
       }
      }else {
      $_SESSION["uploadmsg"]="FILE IS TOO LARGE!";
      header("location:../materials/upload-materials/");
      }
    }else{$_SESSION["uploadmsg"]="ERROR UPLOADING! File was too Large!";
      header("location:../materials/upload-materials/");}
  }else{
    $_SESSION["uploadmsg"]="You must upload a pdf or Word doc file";
    header("location:../materials/upload-materials/");
  }
}else {
  $_SESSION["uploadmsg"]="ie no gree upload!";
  header("location:../materials/upload-materials/");
}
}
else{echo "its empty why?";}
}else{echo "pls upload a file!";}
}
 ?>
