<?php
session_start();

 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>video|StudiHUB</title>
</head>
<style>
body{
  background-color:rgba(234,230,230,0.84);
}
.image{
  width:100%;
  background-color: white;
  padding: 5px;
  margin-top: 15px;
  margin-bottom: 15px;
}
.details{
  padding:0;
}
.list-group{
  background-color: white;
  padding: 5px;
}
li{

}
.list-group ul li{
  list-style-type: none;
  padding: 5px;
}
.topics{
background-color: white;
margin-top: 15px;
padding: 10px 5px;
}
.topics legend{
  text-align: center;
}
.topics ul{
  padding-right:20px;
}
.topics ul li{
  padding: 10px;
  list-style-type: none;
  border-bottom: 0.5px solid grey;
}
.materials{
  margin-top: 15px;
  padding: 20px;
  height: 200px;
  background-color: white;
}
.materials #downloadmaterial{
  padding-left: 40px;
}
.row1{
  box-shadow: 0px 0px 10px -3px;
}
.nav{
      height: 40px;
  background-color: #153971!important;
}
/* User login */
.userContent .Userdropdown{
  position: absolute;
  z-index: 99999;
  right: 0px;
  margin: 10px 5px 0px 0px;
  padding: 0px;
  box-shadow: 0px 0px 10px 0px #bbbbbb;


}
.userContent .Userdropdown a{
text-decoration: none;
color: #153971;
}
</style>
<body>
  <?php
include("../php/header.php");
   ?>

      <div class="container-fluid image row1">
        <div class="col-sm-12 col-lg-6 col-md-6">
      <div class="image">
        <img src="../images/gif.gif" alt="new" width="100%" height="auto">
      </div>
      <div class="btn-group">
      <button class="btn btn-danger" style="background-color:red;"id="playButton">View <i class="fa fa-eye"></i></button>
      <button class="btn btn-success" style="font-size:12px;"><i class="fa fa-plus"> view later<!-- <i class="fa fa-save">--></i></button>
    </div>
    <button class="btn btn-warning"><i class="fa fa-flag"></i> Report</button>

    </div>
  </div>

<!--

<iframe src="https://player.vimeo.com/video/241923050" width="640" height="352"
 frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
  <script type="text/javascript">
      var myVideo = document.getElementById('myVideo');
      var playButton = document.getElementById('playButton');

      playButton.addEventListener('click', function () {
          if (myVideo.paused) {
              if (myVideo.requestFullscreen) {
                  myVideo.requestFullscreen();
              }
              else if (myVideo.msRequestFullscreen) {
                  myVideo.msRequestFullscreen();
              }
              else if (myVideo.mozRequestFullScreen) {
                  myVideo.mozRequestFullScreen();
              }
              else if (myVideo.webkitRequestFullScreen) {
                  myVideo.webkitRequestFullScreen();
              }
              myVideo.play();
          }
          else {
              myVideo.pause();
          }
      }, false);
      </script>-->
















    <div class="col-sm-12 col-lg-6 col-md-6 details row1">

        <div class="list-group">
          <ul >
            <li class="detaillist"><legend>CRS 321</legend></li>
            <li class="detaillist">Duration: 2hrs</li>
            <li class="detaillist">Price: N250</li>
            <li class="detaillist"><i class="fa fa-heart" style="color:red;"></i> 20 &nbsp <i class="fa fa-thumbs-down"></i> 3 &nbsp <i class="fa fa-eye"></i>19</li>
          </ul>

      </div>
    </div>

      <div class="topics row1">
        <legend><h4>Content</h4></legend>

        <ul class="">
          <li class="">Intoduction</li>
          <li class="">First Topic</li>
          <li class="">Second Topic</li>
        </ul>
      </div>

      <div class="materials row1">

        <div class="row">



          <div class="col-sm-6 col-md-6 " id="downloadmaterial">
            <h2><i class="fa fa-file-pdf-o"></i></h2>
            <span class="materialtitle">CRS 321</span>
            <button type="button" class="btn btn-warning" name="button">
              Download <i class="fa fa-arrow-down"></i>
              </button>
          </div>

          <div class="col-sm-6 col-md-6" id="downloadmaterial">
            <h2><i class="fa fa-file-pdf-o"></i></h2>
            <span class="materialtitle">CRS 321</span>
            <button type="button" class="btn btn-warning" name="button">
              Download <i class="fa fa-arrow-down"></i>
              </button>
              </div>


            </div>

          </div>
          </div>
          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
          </body>

  </html>
