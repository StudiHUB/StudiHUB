<?php session_start();
if (isset($_SESSION["id"])) {

include("../../php/conn.php");
$materialid=$_GET["id"];

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$materialid=test_input($materialid);
$result=mysqli_query($conn,"SELECT * FROM materials WHERE id='$materialid'");
if (mysqli_num_rows($result)> 0) {
  //echo "$materialid";
  //print_r($result);
  while ($row=mysqli_fetch_assoc($result)) {
    $path=$row['path'];
    $course_code=$row['course_code'];
    //echo "$path";
  }}
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
    <title>StudiHUB | READ Materials</title>
    <meta charset="utf-8">
    <!-- logo -->
    <link rel="apple-touch-icon" sizes="57x57" href="../../images/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="../../images/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="../../images/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="../../images/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="../../images/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="../../images/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="../../images/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="../../images/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="../../images/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="../../images/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../../images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="../../images/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../images/favicon-16x16.png">
  <link rel="manifest" href="../../images/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="../../images/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <!-- logo ending -->
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/style.css">
   <link rel="icon" sizes="192x192" href="../../images/icon.png">
    <?php include("../../php/csslinks.php");?>



    <style>
    .no-js #loader { display: none;  }
    .js #loader { display: block; position: absolute; left: 100px; top: 0; }
    .se-pre-con {
    	position: fixed;
    	left: 0px;
    	top: 0px;
    	width: 100%;
    	height: 100%;
    	z-index: 9999;
    	background: url(../images/studi.gif) center no-repeat #fff;
    }
    </style>
  </head>
  <body>
    <div class="se-pre-con"></div>
    <?php include("../../php/header.php");

    if($path){
?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.11';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
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

 <ul id="webSocialList" class="w">
   <?php $appmsg="Hi there, ";
         $appmsg.=$fname;
         $appmsg.=" is reading this ";
         $appmsg.=$course_code;
         $appmsg.=" on StudiHUB,
You have been invited, join us for free! and get your school materials on
http://cersl.com.ng/materials
Register and inform your friends";
   $enccodedmsg=urlencode($appmsg);
             ?>
   <li id="webSocialTwitter"><i class="fa fa-twitter l"></i>
     <a href="https://twitter.com/intent/tweet?text=<?php echo $enccodedmsg;?>" > Share on Twitter</a>
   </li>
   <li id="webSocialGoogle"><i class="fa fa-whatsapp l"></i>

     <a  href="whatsapp://send?text=<?php echo $enccodedmsg;?>">Share on WhatsApp</a>
   </li>
   <li id="webSocialLinkedin"><i class="fa fa-facebook l"></i>

       <a class="fb-xfbml-parse-ignore" target="_blank"
        href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fstudihub.com.ng%2F&amp;src=sdkpreparse">
      Share on Facebook
    </a>

     </li>
   <li id="webSocialIcon"><i class="fa fa-share-alt l"></i>
   </li>
 </ul>
<!-- End of checking the dropdown menu-->
    <iframe id="document" src="http://docs.google.com/gview?url=http://cersl.com.ng<?php echo $path;?>&embedded=true" style="width:100%; height:1000px;" frameborder="0">
    </iframe>
    <script type='text/javascript'>


    //paste this code under the head tag or in a separate js file.
    	// Wait for window load
    	$('#document').ready(function() {
    		// Animate loader off screen
    		$(".se-pre-con").fadeOut("slow");;
    	});

    </script>
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
<?php }else{ ?>

  <!DOCTYPE html>
  <html lang="en" >

  <head>
    <meta charset="UTF-8">
    <title>StudiHUB|404 Error page</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="ecss/style.css">

<style>
.link{
  font-size: 50px;
}
</style>
  </head>

  <body>
  <div class="link"><a href="studihub.com.ng/signup">Home</a></div>





  </body>

  </html>

<?php } ?>
