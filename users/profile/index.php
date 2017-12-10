<?php
session_start();
include('../../php/conn.php');
if (!$_SESSION["id"]) {
header('location:../../login/');
}else {


?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Profile</title>
  <style>
body{
  margin: 0;
  padding: 0;
 background-color:rgba(0,0,0,0.5);
}
.hub{
  color: red;
}
  /* USER PROFILE PAGE */
   .card {
      margin-top: ;
      height: 275px;
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
      -webkit-filter: blur(3px);
      -moz-filter: blur(3px);
      -o-filter: blur(3px);
      background: linear-gr
      -ms-filter: blur(3px);
      filter: blur(3px);
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
.alert-success{
  border-left:3px solid green;
  height: 20px;
  font-size: 14px;
  font-variant: all-caps;
  padding: 0;
  text-align: center;
}
.create{
  border-radius: 3%;
    padding: 5px;
  width:100px;
  background-color:#49da37;
  margin-bottom: 5px;
  text-align: center;
}
.create a{
color: white;
text-decoration:none;
}
.create:hover{
box-shadow:0px 3px 2px -1px green;
}
.navbar#firstnav{
  background: transparent!important;
  box-shadow: 0px -1px 8px 0px black!important;
}.nav-link .nav-item{
  padding: inherit;
  color: white;
  text-decoration: none;
}
.nav-link .nav-item:hover{
  text-shadow: 2px 3px 12px #e67a7a;
}
.nav-link#menu{
  display: flex;
  flex-direction: row;

}

  </style>
</head>

<body><?php
// dark color-- #353535;
 ?>
 <nav class="navbar navbar-dark bg-dark" id="firstnav">

     <a class="navbar-brand" href="../../">Studi<span class="hub">HUB </span><i class="fa fa-play-circle" aria-hidden="true"></i>



 </a>
 <button class="navbar-toggler" style="border:none;" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  </nav>
      <div class="collapse" id="navbarToggleExternalContent">
        <div class="nav-link" id="menu">
          <a href="../../" class="nav-item" >Home</a>
          <a href="../../php/logout.php" class="nav-item" >Logout</a>
        </div>
      </div>
  <div class="col-lg-12 col-sm-12 col-xm-12 profilehead">
<!--<a href="../../php/logout.php" class="btn btn-warning" >logout</a>-->
    <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="profile_picture/bg.jpg">
            <!-- http://lorempixel.com/850/280/people/9/ -->
        </div>
        <div class="useravatar">
            <a href="profile_picture/"><img alt="" src="profile_picture/me2.jpg" class="img-responsive">
            <i style="font-size:13px;"class="fa fa-camera" aria-hidden="true"></i></a>
          </div>

      <?php
      $idc=$_SESSION['id'];
      $check="SELECT * FROM accounts where id='$idc'";
      $result=mysqli_query($conn,$check);
      while ($row = mysqli_fetch_array($result)) {
        $fname=$row['first_name'];
        $lname=$row['last_name'];
        $email=$row['email'];
        $institution=$row['institution'];
        $level=$row['level'];
        $department=$row['department'];
        $phone=$row['phone'];
  }  ?>
      <div class="card-info">
       <span class="card-title">
        <?php  echo $fname;?>
        </span><p></p><!--name in bold-->
        <span class="card-email"><?php  echo $email; ?></span>
          <div class="list">


          <div class="nav nav-link nav-pills mb-3" id="pills-tab" role="tablist">

          <a class="list-item active" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="true">Profile</a>
          <a class="list-item" id="pills-courses-tab" data-toggle="pill" href="#pills-courses" role="tab" aria-controls="pills-courses" aria-selected="false">My Courses</a>
          <a class="list-item" id="pills-notification-tab" data-toggle="pill" href="#pills-notification" role="tab" aria-controls="pills-notification" aria-selected="false">Notification</a>
          <a class="list-item" id="pills-explore-tab" data-toggle="pill" href="#pills-explore" role="tab" aria-controls="pills-explore" aria-selected="false">Explore</a>

        </div>
        </div>
        </div>

    </div>

    </div>
<div class="tab-content" id="pills-tabContent">
<div class="col-sm-12 tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
    <div class="profile">
        <div class="list">
          <ul class="list-group">
            <?php if(@$_SESSION["msg"]){
              echo "<div class=\"alert alert-success\" role=\"alert\">";
                 echo @$_SESSION["msg"];
            echo "</div>";
            }?>
            <div class="create"><a href="../../tutor"><i class="fa fa-plus" aria-hidden="true"></i> create</a></div>
            <li class="list-group-item"><span class="title">NAME</span><span class="title-item"><?php  echo $fname." ".$lname; ?></span></li>
            <li class="list-group-item"><span class="title">Phone</span><span class="title-item"><?php  echo $phone; ?></span></li>
            <li class="list-group-item"><span class="title">Email</span><span class="title-item"> <?php  echo $email; ?></span></li>
            <li class="list-group-item"><span class="title">School</span><span class="title-item"><?php  echo $institution; ?></span></li>
            <li class="list-group-item">
              <span class="title">CREDITS</span>
              <a href="#" class="btn btn-success buy"><i class="fa fa-money" aria-hidden="true"></i> Buy</a>
              <span class="title-item"> 21</span>
            </li>
          </ul>

            <a class="btn btn-success update" href="update_profile.php">
                <i class="fa fa-pencil" aria-hidden="true"></i>
              Edit</a>

        </div>
    </div>

</div>

              <div class="col-sm-12 tab-pane fade" id="pills-courses" role="tabpanel" aria-labelledby="pills-courses-tab">
                <div class="profile">
                my courses
              </div>
              </div>
                <div class="tab-pane fade" id="pills-notification" role="tabpanel" aria-labelledby="pills-notification-tab">
                  <div class="profile">
                  my Notification!
                </div>
                </div>
                <div class="tab-pane fade" id="pills-explore" role="tabpanel" aria-labelledby="pills-explore-tab">
                  <div class="profile">
                  <form>
                    <div class="input-group">
                      <input type="text" class="form-control" name="search">
                    </div>



                  </form>
                </div>
                </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
$(".btn-pref .btn").click(function () {
    $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
    // $(".tab").addClass("active"); // instead of this do the below
    $(this).removeClass("btn-default").addClass("btn-primary");
});
});
</script>
</body>
</html>
<?php
}
$_SESSION["msg"]="";
 ?>
