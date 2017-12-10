<?php
session_start();

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
body{
  margin: 0;
  padding: 0;
  }
.navbar#firstnav{
  height: 33px;
}
.container-fluid .navbar-expand-sm{
  box-shadow: 0px 2px 10px 0px #D3D4D5;
}
.stylish-input-group .input-group-addon{
    background: white !important;
}.stylish-input-group:hover{
  border: 0.932px solid #27a4e8;
  border-radius: 5%;
}
.stylish-input-group .form-control{
	border-right:0;
	box-shadow:0 0 0;
	border-color:#ccc;
}
.stylish-input-group{
  width: 100%;
}
.stylish-input-group button{
    border:0;
    background:transparent;
}
.navbar-dark .navbar-toggler-icon {
  border: none;
  width: 20px;

}
.navbar-dark{
padding: 0 0 0 15px;
border: none;
}


.navbar-nav .nav-item .dropdown-menu{
  margin-top: 18px;
  border: none;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  background-color: #343A40;
  border-radius: 0;
}
.navbar-nav .nav-item .dropdown-menu a{
color: #fff;
}
.navbar-nav .nav-item .dropdown-menu a:hover{
color: #343A40;
border-color: #fff;
}
.navbar-nav .nav-item .dropdown-menu .life-sciences-dropdown{
  position: ;
  display: inline-block;
}
.navbar-nav .nav-item .dropdown-menu .life-sciences-dropdown .life-sciences1{
  display: inline-block;
  position: relative;
  z-index: 1;
  margin-top: 0;
  background-color: #464F59;
}
.navbar-nav .nav-item .dropdown-menu .life-sciences-dropdown:hover .navbar-nav .nav-item .dropdown-menu .life-sciences1{
  display: none;
}

.navbar-nav .nav-item .dropdown-menu .dropdown-item:focus{
color: #343A40;
border-color: #fff;
}
.navbar .navbar-brand .fa-stack #fa-square-o{
  font-weight: 200;
}
.searchnav{
background-color: #ffffff!important;
}
#firstnav{
  background-color: rgba(11, 49, 107, 0.96)!important;
}
/************************
*************************
*** drop navigation o!***
*************************
*************************/
.droplist{
  position: absolute;
  z-index: 999;
  background-color: #fff;
  width: 100vw;
  padding: 0;
  height: 100vh;

}
.droplist ul{
  position: absolute;
  left: 0;
  right: 0;
  margin: auto;
    width: 100%;
  -webkit-padding-start: 0;
}
.droplist ul .list-group-item{
  padding-right:0;
}
.droplist ul .list-group-item a{
  padding-left: 0px;
  color: black;
}
/* The side navigation menu/
.sidenav {
    height: 100%; /* 100% Full-height/
    width: 0; /* 0 width - change this with JavaScript/
    position: fixed; /* Stay in place /
    z-index: 1; /* Stay on top /
    top: 0;
    left: 0;
    background-color: #343A40; /* Black/
    overflow-x: hidden; /* Disable horizontal scroll /
    padding-top: 60px; /* Place content 60px from the top /
    transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav /
}

/* The navigation menu links /
.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 18px;
    color: #818181;
    display: block;
    transition: 0.3s
}

/* When you mouse over the navigation links, change their color
.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}
*/
/* Position and style the close button (top right corner)
.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}
*/
/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
#main {
    transition: margin-left .5s;
    padding: 0;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */


/************************
*************************
**Profile navigation o!**
*************************
*************************/


/* The profile navigation menu */
.Profilenav {
    height: 100%; /* 100% Full-height */
    width: 0; /* 0 width - change this with JavaScript */
    position: fixed; /* Stay in place */
    z-index: 999999; /* Stay on top */
    top: 0;
    right: 0;
    background-color: #343A40; /* Black*/
    overflow-x: hidden; /* Disable horizontal scroll */
    padding-top: 60px; /* Place content 60px from the top */
    transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
}

/* The navigation menu links */
.Profilenav .input-group .form-control::placeholder{
  color: #fff;
}
.Profilenav .input-group .form-control{
  color: #fff;
  border: none;
  background-image: linear-gradient(to left, #BDBBBE 0%, #9D9EA3 100%), radial-gradient(88% 271%, rgba(255, 255, 255, 0.25) 0%, rgba(254, 254, 254, 0.25) 1%, rgba(0, 0, 0, 0.25) 100%), radial-gradient(50% 100%, rgba(255, 255, 255, 0.30) 0%, rgba(0, 0, 0, 0.30) 100%);
   background-blend-mode: normal, lighten, soft-light;
 }
.Profilenav .input-group {

    margin-top: 10px;
    margin-left: 5px;
    display: flex;
    margin-right: 5px;
    transition: 0.3s
}
.Profilenav .btn-primary{
  vertical-align: middle;
  margin: 10px 5px;
  width: 100%;
  background-color: #64696D;
  color: #fff;
  border: 0;
}
.Profilenav .btn-primary:hover{
  box-shadow: 0px 1px 10px 0px #969A9E;
      cursor:pointer;
}

/* When you mouse over the navigation links, change their color */
.Profilenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}
.Profilenav a{
  margin-left: 20px;
  color: #D3D4D5;
  font-family: open-sans;
  font-size: 13px;
}

/* Position and style the close button (top right corner) */
.Profilenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
#main {
    transition: margin-left .5s;
    padding: 0;
}
/* end of profile nav --*/

.card .card-reveal{
    padding: 20px;
    position: absolute;
    background-color:rgba(255,255,255,0.7);
    width: 100%;
    overflow-y: auto;
    /*top: 0;*/
    left:0;
    bottom:0;
    height: 100%;
    z-index: 9999;
    display: none;
}

.card .card-reveal p{
    color: rgba(0, 0, 0, 0.71);
    margin:20px ;
}


.row .card-group{
  margin: auto;
 margin-bottom: 30px;
  margin-top:40px;
}

.container-fluid#body{
  padding:;
}
.row .card-group .card .card-body .duration{
  position: absolute;
  background-color: black;
  opacity: .8;
  color: white;
  top:160px;
  right: 4px;
  font-size: 12px;
}
.row .card-group .card .card-body .views{
  position: ;
  font-size: 13px;
  right: 150px;
  font-family: inherit;
  color:#7f7f7f;
}
.row .card-group .card .card-body .price{
     position: relative;
    padding: 14px 0 10px;

  margin-top:20px;
  float: right;
  font-size: 14px;
  padding: 2px;
  font-family:;
  color: green;
  text-shadow: 1px;
  border-top: .5px solid #7f7f7f;
  /*border-radius: 5px;
  background-color: #7f7f7f;*/
}
.row .card-group .card .card-body button#show{
  background-color:transparent;
  border: none;
  position: absolute;
  top: 190px;
  right:5px;
}
.row .card-group .card{
  border: .7px solid rgba(127,127,127,0.5);;
  margin: 2px;

}
.row .card-group .card .card-img-top {
  width: 100%;
  height: 180px;
}
.row .card-group{


}

/*/////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////
/////////       FORM FOR SIGN UP                    ///////////////////////////
/////////                                          ////////////////////////////
///////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////*/

/*/////////////////////////////////////////////////////////////////////////////
///////////////// END OF FORM /////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////*/
@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}




@media (min-width: 576px){
_forms.scss:343
.form-inline .input-group {
    width: 100%;
}
}
/* query for mobile text SHOP, LOGIN, */
@media only screen and (max-width: 573px) {

  .navbar-nav .nav-item a.nav-link  span.lists
  {
  display: inline;
    }
}
@media only screen and (min-width: 573px) {

  .navbar-nav .nav-item a.nav-link  span.lists
  {
  display: none;
    }
}
@media only screen and (min-width: 573px) and (max-width: 721px) {

.navbar-nav .nav-item a.nav-link  span.categories
{
display: none;
  }

}
#body{
  position: absolute;
  top:55px;
/*  padding-top:50px;*/
}
.container-fluid#main{
  position: fixed;
  z-index: 999999;
}
.Userdropdown{
  position: absolute;
  right: 0px;
  margin: 10px 5px 0px 0px;
  padding: 0px;
  box-shadow: 0px 0px 10px 0px #bbbbbb;


}
.Userdropdown a{
text-decoration: none;
color: #153971;
}
</style>
</head>

<body>

  <div  class="container-fluid" id="main">

<nav class="navbar navbar-dark bg-dark" id="firstnav">

    <a class="navbar-brand" href="#">Studi<span class="hub" style="color:red;">HUB</span><!--<i class="fa fa-play-circle fa-2x" aria-hidden="true">--></i>


  <i class="fa fa fa-play-circle" ></i>
</a>
<!-- user link for login and signup -->
<a class="ml-auto" style="color:white; margin-right: 2px;"
data-toggle="collapse"
 data-target="#userContent"
aria-controls="userContent"
aria-expanded="false"
aria-label="Toggle navigation"
>
  <i class="fa fa-user-o" ></i>
</a>
<!-- end of link -->
<button class="navbar-toggler" style="border:none;" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>

 </nav>
  <nav class="navbar navbar-expand-sm navbar-light bg-light searchnav">
<!-- categories dropdown - -
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expande="false">
categories
  </button>
  <div class="dropdown-menu" aria-labeledby="dropdownMenuButton">
    <a class="dropdown-item">boy</a>
    <a class="dropdown-item">boy</a>
    <a class="dropdown-item">boy</a>
  </div>
</div>
-->
<!-- nav bar search -->
    <div class="col-sm-6 col-md-6 col-sm-offset-3">
      <form class="form-inline" role="search" action="to.php" method="post">
        <div class="input-group stylish-input-group input-group-sm">
                      <input type="text" class="form-control"  placeholder="What do you want to learn?" >
                      <span class="input-group-addon">
                          <button type="submit">
                                <i class="fa fa-search" ></i>
                          </button>
                      </span>
          </div>
      </form>
    </div>
<!-- end of search -->

<!-- list for dropdown on small screen -->
    <div class="collapse navbar-collapse" id="navbarText">

<!--      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="lists"> STORE</span><sup><span class="badge badge-success">3</span></sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa fa-newspaper-o" aria-hidden="true"></i><span class="lists"> NEWS/UPDATE</span><sup><span class="badge badge-success">3</span></sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa fa-user-o" aria-hidden="true"></i> LOGIN</a>
        </li>
      </ul>
      <!-- right of nav
      <a class="nav-link" href="#"  onclick="openProfile()"><i class="fa fa-user-circle" aria-hidden="true"></i><span class="lists"> Signup</span></a>
    </div>-->
    </nav>
    <div class="collapse userContent" id="userContent">
      <ul class="nav-link Userdropdown">
        <?php if (@$_SESSION["id"]) {
  echo "<li class=\"list-group-item\"><a href=\"users/profile/\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i><span class=\"lists\"> My Profile</span></a>";
  echo "<li class=\"list-group-item\"><a href=\"php/logout.php\"><i class=\"fa fa-user-o\" aria-hidden=\"true\"></i><span class=\"lists\"> Logout</span></a>";

        }
          else {
              echo "  <li class=\"list-group-item\"><a href=\"login\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i><span class=\"lists\"> Login</span></a>";
              echo "  <li class=\"list-group-item\"><a href=\"signup\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i><span class=\"lists\"> Sign Up</span></a>";
          }

              ?>
              <ul>
    </div>
    <div class="pos-f-t">
      <div class="collapse" id="navbarToggleExternalContent">

          <div id="" class="droplist">
            <ul class="nav-link">
                <!--  <li class="list-group-item"><a href="#"><i class="fa fa-home " aria-hidden="true"></i> Home</a>-->
                <li class="list-group-item list-group-item-primary"><i class="fa fa-folder " aria-hidden="true"></i> Course categories</li>
                <a href="#"><li class="list-group-item"><i class="fa fa-book " aria-hidden="true"></i> Study Material</li></a>
                <a href="ask"><li class="list-group-item"><i class="fa fa-stack-exchange " aria-hidden="true"></i> Ask</li></a>
                <a  href="#"><li class="list-group-item"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="lists"> STORE</span><sup><span class="badge badge-success">3</span></sup></li></a>
                <a href="#"><li class="list-group-item"><i class="fa fa-newspaper-o" aria-hidden="true"></i><span class="lists"> NEWS/UPDATE</span><sup><span class="badge badge-success">3</span></sup></li></a>
                <a href="#"><li class="list-group-item"><i class="fa fa-question " aria-hidden="true"></i> About Us</li></a>
              </ul>
            </div>
        </div>
      </div>
    </div>
<!-- content location-->

<div class="container-fluid" id="body">
  <div class="row">
      <div class="card-group">

              <div class="card" style="width: 20rem;">
                        <a href="video-details">
                        <img class="card-img-top img-responsive" src="images/gif.gif" alt="Card image cap"></a>
                        <div class="card-body">
                          <div class="duration">
                            2:06:01
                          </div>
                         <div class="card-text">
                          Thermo-Geo Physics class 1
                          </div>

                            <div class="price">
                              N500
                            </div>
                            <div class="views">
                              Views<b> 10</b>
                            </div>
                            <button type="button" id="show" class="btn btn-custom pull-right" aria-label="Left Align">
                                <i class="fa fa-ellipsis-v"></i>
                            </button>
                            <div class="card-reveal 1">
                              <span class="card-title">DESCRIPTION</span> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span style="color:red;"aria-hidden="true">x</span></button>
                              <p>Here is some more information about this product that is only revealed once clicked on.</p>
                            </div><!-- card reveal -->

                            <!-- the function opens the video description when clicked and it would have a
                            number generated by php script stored in a variable, which would be used to identify
                            each video to display its description -->
                            <script>
                            $("#show").click(function(){
                              $(".1").show();
                            });
                            $(".close").click(function(){
                              $(".1").hide();
                            });</script>
                    </div>
                  </div>


                  <div class="card" style="width: 20rem;">
                            <a href="#"><img class="card-img-top img-responsive" src="images/gif.gif" alt="Card image cap"></a>
                            <div class="card-body">
                              <div class="duration">
                                2:06:01
                              </div>
                             <div class="card-text">
                              Thermo-Geo Physics class 1
                              </div>

                                <div class="price">
                                  N500
                                </div>
                                <div class="views">
                                  Views<b> 10</b>
                                </div>
                                <button type="button" id="show" class="btn btn-custom pull-right" aria-label="Left Align">
                                    <i class="fa fa-ellipsis-v"></i>
                                </button>
                                <div class="card-reveal 2">
                                  <span class="card-title">DESCRIPTION</span> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span style="color:red;"aria-hidden="true">x</span></button>
                                  <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                </div><!-- card reveal -->
                        </div>
                      </div>


                      <div class="card" style="width: 20rem;">
                                <a href="#"><img class="card-img-top img-responsive" src="images/gif.gif" alt="Card image cap"></a>
                                <div class="card-body">
                                  <div class="duration">
                                    2:06:01
                                  </div>
                                 <div class="card-text">
                                  Thermo-Geo Physics class 1
                                  </div>

                                    <div class="price">
                                      N500
                                    </div>
                                    <div class="views">
                                      Views<b> 10</b>
                                    </div>
                                    <button type="button" id="show" class="btn btn-custom pull-right" aria-label="Left Align">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </button>
                                    <div class="card-reveal">
                                      <span class="card-title">DESCRIPTION</span> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span style="color:red;"aria-hidden="true">x</span></button>
                                      <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                    </div><!-- card reveal -->
                            </div>
                          </div>



                          <div class="card" style="width: 20rem;">
                                    <a href="#"><img class="card-img-top img-responsive" src="images/gif.gif" alt="Card image cap"></a>
                                    <div class="card-body">
                                      <div class="duration">
                                        2:06:01
                                      </div>
                                     <div class="card-text">
                                      Thermo-Geo Physics class 1
                                      </div>

                                        <div class="price">
                                          N500
                                        </div>
                                        <div class="views">
                                          Views<b> 10</b>
                                        </div>
                                        <button type="button" id="show" class="btn btn-custom pull-right" aria-label="Left Align">
                                            <i class="fa fa-ellipsis-v"></i>
                                        </button>
                                        <div class="card-reveal">
                                          <span class="card-title">DESCRIPTION</span> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span style="color:red;"aria-hidden="true">x</span></button>
                                          <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                        </div><!-- card reveal -->
                                </div>
                              </div>

            </div>
          </div>
<div class="row" id="row2">
        <div class="card-group">
                  <div class="card" style="width: 20rem;">
                        <img class="card-img-top img-responsive" src="images/me.gif" alt="Card image cap">
                        <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                  </div>

                  <div class="card" style="width: 20rem;">
                        <img class="card-img-top img-responsive" src="images/gif.gif" alt="Card image cap">
                        <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                  </div>


                  <div class="card" style="width: 20rem;">
                        <img class="card-img-top img-responsive" src="images/gif.gif" alt="Card image cap">
                        <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                  </div>


                  <div class="card" style="width: 20rem;">
                        <img class="card-img-top img-responsive" src="images/gif.gif" alt="Card image cap">
                        <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                  </div>

        </div>
</div>




















</div>
    <!-- side nav -->


    </div>
  <!-- end of side nav -->

  <div id="myProfile" class="Profilenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeProfile()">&times;</a>
          <form>
            <label class="custom-file">
              <input type="file" id="file2" class="custom-file-input">
              <span class="custom-file-control"></span>
            </label>
            <div class="input-group">
              <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-user-o " aria-hidden="true"></i></span>
              <input type="email" class="form-control" placeholder="Username/Email" aria-label="Username" aria-describedby="sizing-addon2">
            </div>
            <div class="input-group">
              <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-unlock-alt " aria-hidden="true"></i></span>
              <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="sizing-addon2">
            </div>
            <button class="btn btn-primary" type="submit">SIGN IN</button>

            <a href="../form" >Don't have an account? Register</a>
          </form>
    </div>

    <!--///////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////
    ////////////////// sign up form /////////////////////////////////
    ////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////-->

        </div>
    </div>

    </div>
</div>














<script>

  /*  $(document).ready(function()
    {
        $("div.life-sciences-dropdown").hover(function(){
            $(this).find(".life-sciences1").show()},
            function () {
            $(this).find(".life-sciences1").hide()
        });
    });

    $(document).ready(function()
  {
$('.life-sciences1').hide();
$('.physical-sciences1').hide();
$('.social-sciences1').hide();
    $("div.life-sciences-dropdown").click(function(){
        //slide up all the link lists
        $(".life-sciences1",$(".life-sciences1")).show();
      //  $(this).children('ul').slideToggle();
    })
});

*/

    /*$(document).ready(function()
{
    $('.life-sciences1').hide();
    $("div.life-sciences-dropdown").hover(function(){
        $(".life-sciences1",$(this)).show()},
        function () {
        $(".life-sciences1",$(this)).hide()
    });
});

$(document).ready(function()
{
$('.physical-sciences1').hide();
$("div.physical-sciences-dropdown").hover(function(){
    $(".physical-sciences1",$(this)).show();
  $(".physical-sciences1").css("background","linear-gradient(45deg, #737170 15%, #737170 55%, #008080 100%)")},
    function () {
    $(".physical-sciences1",$(this)).hide();
    $(".physical-sciences1").css("background","#343A40");
});
});
$(document).ready(function()
{
$('.social-sciences1').hide();
$("div.social-sciences-dropdown").hover(function(){
    $(".social-sciences1",$(this)).show();
  $(".social-sciences1").css("background","linear-gradient(45deg, #737170 15%, #737170 55%, #008080 100%)")},
    function () {
    $(".social-sciences1",$(this)).hide();
      $(".social-sciences1").css("background","#343A40")
});
});
*/
/*/////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////
//////////////////// FORM SCRIPT (SIGN UP) ////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////*/
var myApp = angular.module("myApp", []);
myApp.controller("RegisterCtrl", function ($scope) {

});
/* ///////////////////////////////////////////////////////////////////////////
///////////////////// END OF SIGN UP SCRIPT /////////////////////////////////
/////////////////////////////////////////////////////////////////////////// */


/* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
}
function openProfile(){
 document.getElementById("myProfile").style.width = "250px";
}
function closeProfile() {
    document.getElementById("myProfile").style.width = "0";
}
function openSignup(){
  closeProfile();
 document.getElementById("signupform").style.width = "100%";

}
function closeSignup(){
  openProfile();
 document.getElementById("signupform").style.width = "0";
}
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
