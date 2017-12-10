<?php
include('../../php/conn.php');
include("../../php/header.php");
session_start();
$id=$_SESSION["id"];
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <title>Profile</title>
  <style>
body{
  margin: 0;
  padding: 0;
 background-color:rgba(0,0,0,0.5);
}
  /* USER PROFILE PAGE */
   .card {
      margin-top: ;
      height: 230px;
      padding: 30px;
      background-color: rgba(214, 224, 226, 0.2);
      border: none;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
  }
  .card.hovercard {
      position: relative;
      padding-top: 0;
      overflow: hidden;
      text-align: center;
      background-color: #fff;
      background-color: rgba(255, 255, 255, 1);
  }
  .card.hovercard .card-background {
      height: 130px;
  }
  .card-background img {
      -webkit-filter: blur(10px);
      -moz-filter: blur(25px);
      -o-filter: blur(20px);
      background: linear-gr
      -ms-filter: blur(25px);
      filter: blur(10px);
      margin-left: -100px;
      margin-top: -200px;
      min-width: 130%;
  }
  .card.hovercard .useravatar {
      position: absolute;
      top: 55px;
      left: 0;
      right: 0;
  }
  .card.hovercard .useravatar img {
      width: 70px;
      height: 70px;
      max-width: 100px;
      max-height: 100px;
      -webkit-border-radius: 50%;
      -moz-border-radius: 50%;
      border-radius: 50%;
      border: 2px solid rgba(255, 255, 255,0.5);
  }

  .card.hovercard .card-info {
      position: relative;
      bottom: 0px;
      left: 0;
      right: 0;
  }
  .card.hovercard .card-info .card-title {
      padding:0 5px;
      font-size: 20px;
      line-height: 1;
      font-weight: bold;
      color: #fff;
      background-color: rgba(255, 255, 255, 0.1);
      -webkit-border-radius: 4px;
      -moz-border-radius: 4px;
      border-radius: 4px;
  }
  .card.hovercard .card-info .card-email {
      padding:0 5px;
      font-size: ;
      color: #cec6c6;
      margin: auto;
      line-height: 1;
      -webkit-border-radius: 4px;
      -moz-border-radius: 4px;
      border-radius: 4px;
  }
  .card.hovercard .card-info {
      overflow: hidden;
      font-size: 12px;
      line-height: 20px;
      color: #737373;
      text-overflow: ellipsis;
  }
  .card.hovercard .bottom {
      padding: 0 20px;
      margin-bottom: 17px;
  }
  .btn-pref .btn {
      -webkit-border-radius:0 !important;
  }
  .list{
    margin-top: 7px;

  }
.list .nav-link a{
  color: white;
  padding: 2px 3px;
  text-decoration: none;
  border-radius: 2%;
}
.list .nav-link .list-item:hover{
  -moz-border-radius:4px;
  -webkit-border-radius:4px;
  background-color: rgba(15, 23, 25, 0.72);
  /*background-color: rgba(0,0,0,0.14);*/
}
.list .nav-link .list-item{
  padding: 2px 3px;
  -moz-border-radius:4px;
  -webkit-border-radius:4px;

}
.profilehead{
  padding: 0; margin: 0;
}
.useravatar a i{
  color: #fff;
  position: absolute;
  bottom: 0;
  left: 54%;
}
.profile{
  background-color:#434648;
  color: #fff;
  margin:25px auto;
  padding:10px 5px;
  border: 0.7px solid #6f6e6e;
  border-radius: 2px;
}
.profile ul{
  list-style-type: none;
  font-size: 14px;
  display: flex;
  margin: auto;
  flex-direction: column;
}
.profile .list .list-group .list-group-item{
  background-color:#434648;

}
.profile .list .list-group .list-group-item .title{
  border-right: 1px dashed rgba(0,0,0,0.28);
  padding-right: 5px;
  color: #ada9a9;
}
.profile .list .list-group .list-group-item .title-item{
  position: absolute;
  right: 10px;
  font-weight: lighter;
    bottom: 4px;
}
.profile .list .list-group .list-group-item .title-item .form-control,.custom-select{
  width: 100%;
  color: white;
  border: ;
  background: transparent;

}
.custom-select option{
  background-color:#434648;

}

.profile .list .update{
  width: 100%;
  border: none;
  border-radius: none;
  height: 30px;
  font-size: 12px;
  cursor: pointer;
}
.profile .list .buy{
  height: 25px;
  font-size: 12px;
    cursor: pointer;
padding: 4px;
}
.profile .list .btn-success:hover{
  border:1px solid #1eec1e;
      box-shadow: 1px 1px 10px 0px #1eec1e;
}
  </style>
</head>

<body>
<?php
$res="SELECT * FROM accounts where id='$id'";
$display_result=mysqli_query($conn,$res);

while ($row = mysqli_fetch_array($display_result)) {
  $fname=$row['first_name'];
  $lname=$row['last_name'];
  $email=$row['email'];
  $institution=$row['institution'];
  $level=$row['level'];
  $department=$row['department'];
  $phone=$row['phone'];
}


 ?>

  <div class="col-lg-12 col-sm-12 col-xm-12 profilehead">

    <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="profile_picture/me2.jpg">
            <!-- http://lorempixel.com/850/280/people/9/ -->
        </div>
        <div class="useravatar">
            <a href="profile_picture/upload-profile-picture.php"><img alt="" src="profile_picture/me2.jpg" class="img-responsive">
            <i style="font-size:13px;"class="fa fa-camera" aria-hidden="true"></i></a>
          </div>


        <div class="card-info">
          <span class="card-title"><?php echo $fname." ".$lname;?></span><p></p><!--name in bold-->
          <span class="card-email"><?php echo $email;?></span>
          <div class="list">


        </div>
        </div>
        </div>

    </div>

    </div>

<div class="col-sm-12">
    <div class="profile">
        <div class="list">
          <ul class="list-group">
            <li class="list-group-item"><span class="title">NAME</span>
              <span class="title-item"><?php echo $lname." ".$fname;?></span>
            </li>
            <li class="list-group-item"><span class="title">Email</span>
              <span class="title-item"> <?php echo $email;?></span>
            </li>
    <form action="../../php/update_profile_process.php" method="post">
            <li class="list-group-item"><span class="title">Phone</span>
              <span class="title-item">
                <input type="tel" value="<?php echo $phone;?>" name="new_phone" class="form-control">
              </span>
            </li>
            <li class="list-group-item"><span class="title">Level</span>
              <span class="title-item">
                <select name="new_level"class="custom-select">
                  <option selected><?php echo $level;?></option>
                  <option value="100">100 Level</option>
                  <option value="200">200 Level</option>
                  <option value="300">300 Level</option>
                  <option value="400">400 Level</option>
                  <option value="500">500 Level</option>
                  <option value="600">600 Level</option>
                  <option value="700">700 Level</option>
                  <option value="not_in_school">Not in School</option>

                </select>
              </span>
            </li>
            <li class="list-group-item"><span class="title">Dept</span>
              <span class="title-item">
                <select name="new_department"class="custom-select">
                  <option selected><?php echo $department;?></option>
                  <option value="100">100 Level</option>
                  <option value="200">200 Level</option>
                  <option value="300">300 Level</option>
                  <option value="400">400 Level</option>
                  <option value="500">500 Level</option>
                  <option value="600">600 Level</option>
                  <option value="700">700 Level</option>
                  <option value="not_in_school">Not in School</option>

                </select>
              </span>
            </li>
            <li class="list-group-item"><span class="title">School</span>
              <span class="title-item"><?php echo $institution;?></span>
            </li>

          </ul>
          <div class="btn btn-group">
            <button class="btn btn-success update" name="update_profile" type="submit">
                <i class="fa fa-plus" aria-hidden="true"></i>
              Update</button>
              <a class="btn btn-danger update" href="index.php">
                  <i class="fa fa-times" aria-hidden="true"></i>
                Cancel</a>
            </div>
            </form>
        </div>
    </div>

</div>



<script>
$(document).ready(function() {
$(".btn-pref .btn").click(function () {
    $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
    // $(".tab").addClass("active"); // instead of this do the below
    $(this).removeClass("btn-default").addClass("btn-primary");
});
});
</script>
  </body></html>
