<?php session_start();
if (!$_SESSION["id"]) {
header("location:../login");
}else {


?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Create Course</title>
<style>
body{
  background-color: rgba(221,221,221,0.5);
}
.course-description div.price-input{
padding:0px 40px!important;
}
.ml-auto{
  display: none;
}
.course-description{
width: 100%;
height: auto;
margin-top: 30px;
font-family: 'Raleway', sans-serif;
background-color: white;
padding-top: 20px;
padding-bottom: 10px;
text-align: center;
box-shadow: 1px 1px 3px 0px grey;
}
.course-description h3{
  font-family: 'Libre Baskerville', serif;
}
.course-description .box{
margin: auto;
}
@import "bourbon";

  .course-description .button-file-upload {
  @include clearfix();
  display: block;
  overflow: hidden;
}
  input[type="file"] {
    left: -1000px;
    position: fixed;
  }

  .course-description  .fake-upload-button {
    margin: 12px auto;
    background-color: rgba(11, 49, 107, 0.96)!important;
    border-radius: 3px;
    color: #fff;
    cursor: pointer;
    display: inline-block;
    font-size: 12px;
    line-height: 3;
    overflow: hidden;
    padding: 0 30px;
    position: relative;
    text-align: center;
    vertical-align: middle;
  }

  .course-description .button-file-upload-text {
    color: grey;
    float: left;
    font-size: 12px;
    line-height: 3;
  }
 div#submit{
   margin-bottom: 10px;
   padding: 30px 0;
   margin-bottom: 0;
 }
 .btn-success{
   background-color:  rgba(11, 49, 107, 0.96)!important;
   border:none;
 }
 .course-description a{
   text-decoration: none!important;
   color: inherit;
 }
 nav{
   height: 40px;
 }.bg-dark{   background-color: rgba(11, 49, 107, 0.96)!important;
}
</style>
</head>
<body>
<?php
include("../php/header.php");

 ?>
     <div class="pos-f-t">

           <div class="collapse" id="navbarToggleExternalContent">
helo yellow
           </div>

    </div>
 <div class="course-description">
   <a href="" data-target="#uploadvideo" data-toggle="modal"><div class="box">
<h3><i class="fa fa-film" aria-hidden="true"></i> Video Description</h3>
Describe the content first
</div></a>
 </div>

 <div class="course-description">
   <div class="box">
<a href=""  data-target="#uploadtopics" data-toggle="modal"><div class="box"><h3><i class="fa fa-list-ol" aria-hidden="true"></i> Topics Featured</h3></a>
Describe the content first
</div>
</div>
</div>

<!-- form begins here-->
  <form action="../php/uploadvideo.php" method="post" enctype="multipart/form-data">


<!--
   <div class="course-description">
     <div class="input-group" style="padding-left:50px;padding-right:50px;">
<!--input--/> <input type="text" name="material_name"  class="form-control" value="" placeholder="Material e.g MTH123(summary)">
<!-- name="material" for material upload-/->
     </div>
     <label for="file" class="button-file-upload">
       <span class="fake-upload-button"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Upload Material</span><small style="color:red; font-size:11px;">(Optional)</small>
     <span class="js-button-file-upload-text button-file-upload-text"></span>
<!--input--/> <input type="file" id="file" name="materialfile" class="js-button-file-upload-input">
   </label>

   <span class="pan-description">
     PDFs/Word Docs ONLY!
   </span>


 </div>
-->
 <div class="course-description">
<h5>How do you Charge?</h5>
<div class="price-input input-group"><span class="input-group-addon">
   &#8358 </span>
  <!--input--> <input type="text" class="form-control" placeholder=" &#8358 50 - &#8358 200 or FREE" maxlength="3" name="video_price">
 </div>
 <!--<small> naira symbol &#8358</small>-->
 </div>

  <div class="course-description" id="submit">
    <button type="submit" class="btn btn-success" name="createcourse">Finish</button>
  </div>

  <!-- modal popup for video upload -->
  <div class="modal fsde" id="uploadvideo" tabindex="-1" role="dialog" aria-labelledby="uploadvideo" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="uploadvideo">What's in the video?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
            </div>
            <div class="modal-body"><label for="video_name">Title of video:</label>
              <input type="text" class="form-control" name="video_name" placeholder="Video Tittle?"/><br/>
<!-- input text area for video decription --><label for="description">Describe your Content <a style="font-size:12px;font-weight:bold;"href="#">Learn more.</a></label>
              <textarea name="video_decription" rows="4" cols="80" placeholder="Tell us what is in the video...." class="form-control"></textarea>
            <!--<input type="file" class="form-control" name="video" id="html_btn" accept="video/*"/>-->
              <br>  <label for="video_link">Paste the Video's link here <a style="font-size:12px;font-weight:bold;"href="#">Learn more.</a></label>
              <input type="text" class="form-control" name="video_link" placeholder="Add Video link here..(Vimeo/Youtube)"/>
          <!--<button type="button" class="btn btn-dark new_Btn">Upload Video</button>-->


            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal" name="button">Continue</button>
              <!--<button type="button" class="btn btn-secondary" name="save">Save</button>-->
            </div>
          </div>
        </div>
      </div>



      <div class="modal fsde" id="uploadtopics" tabindex="-1" role="dialog" aria-labelledby="uploadtopics" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="uploadvideo">What Topic/Topics were discussed?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="close">
                <span aria-hidden="true">&times;</span>
              </button>
                </div>
                <div class="modal-body">
    <!-- input text area for video decription -->
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-check" style="color:green;"></i></span>
                  <input type="text" name="topics[]"  class="form-control" value="">
                </div>
                <div class="input_fields_wrap">
                <button type="button"style="margin-top:5px;"class="form-control btn-success add_field_button" onclick="">+ Add more Topics</button>
                <br/>
              </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal" name="button">Continue</button>
                  <!--<button type="button" class="btn btn-secondary" name="save">Save</button>-->
                </div>
              </div>
            </div>
          </div>


</form>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script>
 $('.new_Btn').bind("click" , function () {
         $('#html_btn').click();
     });
 $(function() {

     function customUploadButton() {
         $('.js-button-file-upload-input').on('change', function () {
             var val = $(this).val().split(/(\\|\/)/g).pop();
             if (val !== "") {
                 $(".js-button-file-upload-text")
                     .text(val)
                     .parent()
                     .removeClass("not-selected");
             } else {
                 $(".js-button-file-upload-text")
                     .text('')
                     .parent()
                     .addClass("not-selected");
             }
         });
     }

     customUploadButton();

 });
 </script>
<script>
//script for adding new input fields in topics
$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div><div class="input-group"><span class="input-group-addon"><i class="fa fa-check"></i></span><input type="text" name="topics[]"  class="form-control" value="">&nbsp<button  class="btn btn-danger remove_field">&times;</button></div></div><br/>'); //add input box
        }
    });

    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});

</script>
 </body>
</html>
<?php } ?>
