<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ASK | StudiHUB</title>

    <?php include("../php/csslinks.php"); ?>
    <style>
    *{
      box-sizing: border-box;
    }
    body{padding: 0;margin: 0; background-color: #f1f0f0;}
    html{padding: 0;margin: 0;}
    .msg-input{padding: 0;}
    .askquestion{
      padding: 10px;
      background-color: #fff;
      position: fixed;
      bottom: 0;
      box-shadow: 0px -1px 5px -2px grey;
    }
    .header{
      padding-right: 1px;
      padding-left: 1px;
      background-color: #153971;
      position: fixed;
      top: 0;
      color: #fff;
      box-shadow: 0px 1px 5px -2px grey;

    }
    .header .link{
    border-right: 1px solid grey;
    }
    </style>
  </head>
  <body>

<div class="container-fluid header">
  <nav class="navbar navbar-dark">
  <a href="../"class="nav-link link"><i class="fa fa-arrow-left"></i></a>
  <a class="nav-link link"><i class="fa fa-search"></i></a>
  <a class="nav-link link"><i class="fa fa-comments-o"> Responses</i></a>
  <a class="nav-link lastlink"><i class="fa fa-stack-o">Tags</i></a>
  </nav>
</div>
    <!-- message input -->
  <div class="container-fluid msg-input">
      <form>
        <div class="input-group askquestion">
            <button type="button" class="btn btn-danger"
            data-target="#addtag" data-toggle="modal"
            ><i class="fa fa-plus 2x"></i></button>&nbsp
          <textarea name="question" class="form-control" placeholder="Ask someone..." rows="1" cols="80"></textarea>
        <!--  <input class="form-control" placeholder="Ask someone.."type="text" name="ask" value="">-->

            <button class="btn btn-primary" type="submit"><i class="fa fa-send"></i></button>
            <!-- remember to add ajax to prevent entire page reload -->

          </div>



          <!-- modal popup for adding tags -->
          <div class="modal fsde" id="addtag" tabindex="-1" role="dialog" aria-labelledby="addtag" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="addtag">Add Tags/categories</h5>
                  <button type="button" style="color:red;"class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                    </div>
                    <div class="modal-body">
                      <form

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary" data-dismiss="modal" name="button">Send <i class="fa fa-send"></i></button>
                      <!--<button type="button" class="btn btn-secondary" name="save">Save</button>-->
                    </div>
                  </div>
                </div>
              </div>
        <form>
    </div>




<?php include("../php/javascriptlinks.php"); ?>
  </body>
</html>
