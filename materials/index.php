<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>StudiHUB | Materials</title>
    <?php
    include("../php/csslinks.php");
    ?>
    <style>
    .bg-dark
    {
      height: 40px;
    background-color: #004085!important;
    }
    .container-fluid{
      padding: 0;
    }
    .jumbotron{

      height:auto;

      width:100%;
      background-color: #e9ecef;
      margin:auto;
    }
    .form{
      margin:5px 10px;
      padding: 20px;
      border: 0.8px solid  #e9ecef;
      height: auto;
      width: auto;
      box-shadow: 0px 0px 9px -2px  #e9ecef;
      background:;
    }
    .input_file{
      padding: 5px;
      border: 0.8px solid  #e9ecef;
      background-color: #e9ecef;
      box-shadow: 0px 0px 9px -2px  #e9ecef;
    }
    input[type="text"]{
      margin-bottom: 10px;
    }
    .form-check{
      padding: 10px 20px;

    }
    </style>
  </head>
  <body>
    <?php
    include("../php/header.php");
    ?>    <div class="container-fluid">
      <div class="jumbotron">
        <h3>Share your materials..<br><small>Share with friends..<br> See what others are reading..</small></h3>
        </div>
        <div class="form">
        <form class="" action="index.html" method="post">

            <label for="material_name">Material Name/ Course title</label><br>
            <input type="text" style="width:100%;" class="form-control" name="material_name">

            <label for="school">School</label><br>
            <input type="text" style="width:100%;" class="form-control" name="school">

            <label for="course_code">Course Code</label><br>
            <input type="text" style="width:100%;" class="form-control" name="course_code">

            <div class="input_file">
              <label for="material">Upload material</label>
              <input type="file" class="form-control"name="material">
            </div>
                <div class="form-check">
              <label for="science">
              <input class="form-check-input" type="radio" name="science">
                Sciences </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

              <label for="art"><input class="form-check-input" type="radio" name="art">
              Art</label>
              </div>
            <center><button class="btn btn-primary" type="submit"><i class="fa fa-share"></i> Share</button></center>
        </form>
        </div>

    </div>
  </body>
</html>
