<?php session_start();
include("../../php/conn.php");
$materialid=$_GET["id"];
$result=mysqli_query($conn,"SELECT * FROM materials WHERE id='$materialid'");
if (mysqli_num_rows($result)> 0) {
  //echo "$materialid";
  //print_r($result);
  while ($row=mysqli_fetch_assoc($result)) {
    $path=$row['path'];
    $course_code=$row['course_code'];
    //echo "$path";
  }
  $sesid=$_SESSION["id"];
  $resultid=mysqli_query($conn,"SELECT * FROM accounts WHERE id='$sesid'");
  if (mysqli_num_rows($resultid)> 0) {
    //echo "$sesid";
    //print_r($result);
    while ($row=mysqli_fetch_assoc($resultid)) {
      $fname=$row['first_name'];
      //echo "$path";
    }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/style.css">
   <link rel="icon" sizes="192x192" href="../../images/icon.png">
    <?php include("../../php/csslinks.php");?>
    <title>StudiHUB|READ Materials</title>

  </head>
  <body>
    <?php include("../../php/header.php");

    if($path){
?>
<!-- checking the dropdown menu

<div class="collapse navbar-collapse"  id="navbarToggleExternalContent">
   <ul class="navbar-nav">
     <li class="nav-item active">
       <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="#">Save</a>
     </li>
       <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Share
       </a>
       <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
         <a class="dropdown-item" href="#">WhatsApp</a>
         <a class="dropdown-item" href="#">Facebook</a>
         <a class="dropdown-item" href="#">Twitter</a>
       </div>
     </li>
   </ul>
 </div>
 <-- End of checking the dropdown menu-->

 <ul id="webSocialList">
   <li id="webSocialTwitter"><i class="fa fa-twitter"></i>
     <a href="https://www.twitter.com/mlegrix" >Share on Twitter</a>
   </li>
   <li id="webSocialGoogle"><i class="fa fa-whatsapp"></i>
     <?php $whatsappmsg="Hi there, ";
           $whatsappmsg.=$fname;
           $whatsappmsg.=" is reading this ";
           $whatsappmsg.=$course_code;
           $whatsappmsg.=" on StudiHUB,
            You have been invited, join us for free! and get your school materials on
            http://cersl.com.ng/materials
            Register and inform your friends";
     $enccodedmsg=urlencode($whatsappmsg);
               ?>
     <a  href="whatsapp://send?text=<?php echo $enccodedmsg;?>">Share on WhatsApp</a>
   </li>
   <li id="webSocialLinkedin"><i class="fa fa-linkedin"></i>
     <a href="https://www.linkedin.com/in/mlegrix" >Follow me on linkedIn</a>
   </li>
   <li id="webSocialIcon"><i class="fa fa-share-alt"></i>
   </li>
 </ul>
<!-- End of checking the dropdown menu-->
    <iframe src="http://docs.google.com/gview?url=http://cersl.com.ng<?php echo $path;?>&embedded=true" style="width:100%; height:1000px;" frameborder="0">
    </iframe>
    <?php }else{ ?>
    <div class="Alert" >Path not found</div>
    <?php
  }

include("../../php/javascriptlinks.php");
    ?>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js'></script>
<script  src="js/index.js"></script>
  </body>
</html>
