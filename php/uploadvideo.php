<?php
include('conn.php');
echo "Well done!";
if (isset($_POST["createcourse"])) {
  # code...

echo "true talk!";
    $material_name=$conn->real_escape_string(htmlentities($_POST["material_name"],ENT_QUOTES));
    $video_price=$conn->real_escape_string(htmlentities($_POST["video_price"],ENT_QUOTES));
    $video_name=$conn->real_escape_string(htmlentities($_POST["video_name"],ENT_QUOTES));
    $video_decription=$conn->real_escape_string(htmlentities($_POST["video_decription"],ENT_QUOTES));
    $video_link=$conn->real_escape_string(htmlentities($_POST["video_link"],ENT_QUOTES));
    $topics=$_POST['topics'];

//material details.. seperate table database..

    $materialfile=$_FILES['materialfile'];
    $pdffileName=$_FILES['materialfile']['name'];
    $pdffiletype=$_FILES['materialfile']['type'];
    $pdffiletmplocation=$_FILES['materialfile']['tmp_name'];
    $pdffileerror=$_FILES['materialfile']['error'];
    $pdffilesize=$_FILES['materialfile']['size'];
$fileExt=explode('.',$pdffileName);
$fileActualExt= strtolower(end($fileExt));
    print_r($materialfile);
$allowed = array('pdf','doc','docx','ppt');

  if (in_array($fileActualExt, $allowed)) {
    if($pdffileerror===0){
      if ($pdffileSize < 100000) {

      }else {
        echo "FILE IS TOO LARGE!";
      }
    }else{echo "ERROR UPLOADING!";}
  }else{
    echo "You must upload a pdf or Word doc file";
  }
}

 ?>
