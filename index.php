<?php
session_start();
include('php/conn.php');

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="bootstrap-tour.min.css" rel="stylesheet">
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
    width: 0; /* f0 width - change this with JavaScript/
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
        background: linear-gradient(to left, #4a9ab9,#153971);
 /*    background-color: #153971; Black*/
    overflow-x: hidden; /* Disable horizontal scroll */
    overflow-y:;
    padding-top: 0px; /* Place content 60px from the top */
    transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
}
.nav-link .navlist{
  padding: 0;
}
.nav-link a{
  color: black;
}
/* The navigation menu links
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
*/
/* When you mouse over the navigation links, change their color
.Profilenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}
.Profilenav a{
  margin-left: 20px;
  color: #D3D4D5;
  font-family: open-sans;
  font-size: 13px;
}

/* Position and style the close button (top right corner)
.Profilenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

/* Style page content - use this if you want to push the page content to the right when you open the side navigation
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
.row .card-group .card .card-body{
  background-color: #e9ecef;

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
    margin-bottom: 20px;

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

div#top_part .img-container{
  padding: 0px;
  position: absolute;
  left: 0;
  right:0;
  top:25px;
  bottom:;
  width: 70px;
  height:70px;
  border-radius:50%;
  margin: auto;
  border:1px solid #fff;

}
div#top_part{
  width: 100%;
  height: 150px;
}
div#top_part .img-container img{
width: 100%;
height: 70px;
border-radius:50px;
box-shadow: 0 0 20px 0px #464a4e;
}

div#top_part .img-container .name{
  margin-top: 10px;
}
div#top_part .img-container span#fname{
  background: rgba(0, 0, 0, 0.5);
  padding: 2px 3px;
  color: #fff;
  border-radius: 5px;
  text-align: center;
  width: 80px;
}
div#bottom_part{
  padding: 0;
  padding-bottom: 20px;
  margin: 0;
}
div#bottom_part .basic-info{
  padding: 5px 10px;

}
div#bottom_part .basic-info .list-group-item.active {
    z-index: 2;
    font-weight: normal;
    color: #7b7777;
    background-color: #ddd;
    border-color: #f8f9fa;
}
div#bottom_part .basic-info .list-group-item.active .pencil{
  float: right;
}
div#bottom_part .basic-info .list-group{
box-shadow: 0px 0px 20px -6px black;
}
div#bottom_part .basic-info .list-group-item{
  color: #000;
  font-weight: bold;
}
div#bottom_part .basic-info .basic-list{
  color: #464a4e;
  font-size: 16px;
  font-weight: normal;
}
a.closebtn{
padding: 5px;
}
a.back{
position: absolute;
left: 0;
top: 5px;
color: #edf0f7;
}
a.back:hover{
 cursor:pointer;
}
div#myProfile .logout{
  position: absolute;
  right: 5px;
  top:0;
  color: #edf0f7;
  background-color: #11111126;
  font-family: cursive;
  box-shadow: 0px 0px 16px 0px #004085;
  font-family: cursive;
}
nav#profilenav{
background-color: #fff;
box-shadow: -1px -4px 16px 0px #1d1e11;
}
nav a{
  display: block;
  font-size: 20px;
  color: black;
}

div#bottom_part{
  height: auto;
  padding-bottom: 20px;
  width: 100%;
  /*ssoverflow-y: hidden;*/
  background-color:#ddd;
}
div#bottom_part .body-content{
margin-top: 20px;
height: auto;
width: 100%;


}
div.tab-pane{
  padding: 0;
}

</style>
</head>

<body>

  <div  class="container-fluid" id="main">
<nav class="navbar navbar-dark bg-dark header" id="firstnav">

    <a class="navbar-brand" href="#">Studi<span class="hub" style="color:red;font-weight:bold;">HUB</span><!--<i class="fa fa-play-circle fa-2x" aria-hidden="true">--></i>


  <i class="fa fa fa-play-circle" ></i>
</a>
<!-- user link for login and signup -->
<?php if (@$_SESSION["id"]) {
  echo "<a class=\"ml-auto\" onclick=\"openProfile()\"style=\"color:#5cf312; margin-right: 2px;\">
    <i class=\"fa fa-user-o\" ></i>
  </a>";
} else {

echo "
<a class=\"ml-auto\" style=\"color:white; margin-right: 2px;\"
data-toggle=\"collapse\"
 data-target=\"#userContent\"
aria-controls=\"userContent\"
aria-expanded=\"false\"
aria-label=\"Toggle navigation\"
>
  <i class=\"fa fa-user-o\" ></i>
</a>";
} ?>
<!-- end of link -->
<button class="navbar-toggler" style="border:none;" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
</button>
<script>
$(windows).scroll(
{
previousTop:0;
},
function(){
var currentTop =$(window).scrollTop();
if(currentTop < this.previousTop){
$(".header").show();
}else{
$(".header").hide();
}
this.previousTop = currentTop;
});



</script>
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
        <?php if (@!$_SESSION["id"]) {
          echo "  <li class=\"list-group-item\"><a href=\"login\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i><span class=\"lists\"> Login</span></a>";
          echo "  <li class=\"list-group-item\"><a href=\"signup\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i><span class=\"lists\"> Sign Up</span></a>";

        }
        ?>
      </ul>
    </div>
    <div class="pos-f-t">
      <div class="collapse" id="navbarToggleExternalContent">

          <div id="" class="droplist">
            <ul class="nav-link navlist">
                <!--  <li class="list-group-item"><a href="#"><i class="fa fa-home " aria-hidden="true"></i> Home</a>-->
<?php if (@$_SESSION["id"]) {
                echo  "<li class=\"list-group-item\" ><a href=\"tutor\"style=\"text-align:center; padding:5px;color:#fff;\" class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"> Upload video</i></a>
                <a href=\"materials\"style=\"text-align:center; padding:5px;color:#fff;\" class=\"btn btn-success\"><i class=\"fa fa-share\"> Share Material</i></a>
                </li>";
              }else {
                echo  "<li class=\"list-group-item\" ><a href=\"login\"style=\"text-align:center; padding:5px;color:#fff;\" class=\"btn btn-warning\"><i class=\"fa fa-plus-circle\"> Upload video</i></a></li>";

              }
?>
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
          <a href="video-details">
              <div class="card" style="width: 20rem;">

                        <img class="card-img-top img-responsive" src="images/camera.png" alt="Card image cap">
                        <div class="card-body">
                          <div class="duration">
                            2:06:01
                          </div>
                         <div class="card-text">
                            English class 1
                          </div>

                            <div class="price">
                              N500
                            </div>
                            <div class="views">
                              Views<b> 10</b>
                            </div>
                          </a>
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
                            <a href="#"><img class="card-img-top img-responsive" src="images/camera.png" alt="Card image cap"></a>
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
                                <a href="#"><img class="card-img-top img-responsive" src="images/camera.png" alt="Card image cap"></a>
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
                        <img class="card-img-top img-responsive" src="images/play.gif" alt="Card image cap">
                        <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                  </div>

                  <div class="card" style="width: 20rem;">
                        <img class="card-img-top img-responsive" src="images/pexel.jpeg" alt="Card image cap">
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



    <!--///////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////
    ////////////////// sign up form /////////////////////////////////
    ////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////-->

        </div>
    </div>

    </div>
</div>

        <?php
        if (@$_SESSION['id']) {
          # code...

        $idc=$_SESSION['id'];
        $check="SELECT * FROM accounts where id='$idc'";
        $result=mysqli_query($conn,$check);
        while ($row = mysqli_fetch_array($result)) {
            $id=$row['id'];
          $fname=$row['first_name'];
          $lname=$row['last_name'];
          $email=$row['email'];
          $institution=$row['institution'];
          $faculty=$row['faculty'];
          $level=$row['level'];
          $department=$row['department'];
          $phone=$row['phone'];
    }
  }?>

<!--[profile side navigation] -->
<div id="myProfile" class="Profilenav">
    <div class="container-fluid" id="top_part">
      <a href="php/logout.php" class="logout">Logout</a>
      <a href="javascript:void(0)" class="closebtn back" onclick="closeProfile()"><i class="fa fa-chevron-left"></i> Close</a>

          <div class="img-container">
            <a href="ajax-uploader" >

              <?php
              //php code for default image to show when the status of the db is 0
              $checkquery=mysqli_query($conn,"SELECT * FROM profileimage WHERE userid='$id'");
              while ($row=mysqli_fetch_array($checkquery)) {$res=$row["status"];}
                if ($res==0) {
                echo "<img src=\"users/profile/profile_picture/avatar.png\" alt=\"yellow\" class=\"img-fluid\">";
              }else {
                echo"<img src=\"users/user".$id."/".$id."_thump.jpg\" alt=\"yellow\" class=\"img-fluid\">";
              }

//php code for default image to show when the status of the db is 0

              ?>
            </a>
            <!-- name and school -->
            <div class="name">
              <div class="first_name"><center>
                <span id="fname">
                <?php  echo $fname;?>
              </span></center>
              </div>

            </div>
          </div>


        </div>
        <!-- profile nav navlink -->

        <div class="container-fluid" id="bottom_part">
              <nav class="nav justify-content-center" id="profilenav" role="tablist">
                <a href="tutor" class="closebtn"><i class="fa fa-plus"></i></a>

                <a class="nav-link"  id="pills-news-tab" data-toggle="pill" href="#pills-news" role="tab" aria-controls="pills-news" aria-selected="false"><i class="fa fa-newspaper-o"></i> </a>
                <a class="nav-link" id="pills-basic-info-tab" data-toggle="pill" href="#pills-basic-info" role="tab" aria-controls="pills-basic-info" aria-selected="false"><span class="list">
                  <span class="fa-stack fa-sm">
                        <i class="fa fa-user fa-stack-1x"></i>
                    <i class="fa fa-square-o fa-stack-2x"></i>
              </span>
                  </span>
                </a>
                <a class="nav-link" id="pills-events-tab" data-toggle="pill" href="#pills-events" role="tab" aria-controls="pills-events" aria-selected="false"><i class="fa fa-calendar-o"></i></a>
                <a class="nav-link" id="pills-people-tab" data-toggle="pill" href="#pills-people" role="tab" aria-controls="pills-people" aria-selected="false"><i class="fa fa-users" ></i></a>
                <a class="nav-link" id="pills-courses-tab" data-toggle="pill" href="#pills-courses" role="tab" aria-controls="pills-courses" aria-selected="false"><i class="fa fa-folder-open"></i></a>
              </nav>
      <!-- content of tabs -->
      <div class="tab-content" id="pills-tabContent">
  <!-- first active tab -->
  <div class="tab-pane fade show active" id="pills-basic-info" role="tabpanel" aria-labelledby="pills-basic-info-tab">
    <div class="body-content">

                <div class="basic-info">
                    <ul class="list-group">
                      <li class="list-group-item active"> Basic info <span class="pencil"><i class="fa fa-pencil-square-o"></i></span></li>
                      <li class="list-group-item"><span class="basic-list"><i class="fa fa-credit-card-alt"></i> HUBcash</span> <span style="color:#6cea2e;font-family: sans-serif;font-size:18px;">20.00</span> <span style="float:right"><button class="btn btn-success btn-sm" style="background-color: #6cea2e;">Buy</button></span></li>
                      <li class="list-group-item"><span class="basic-list"><i class="fa fa-envelope-o"></i> Email</span> <?php  echo $email;?></li>
                      <li class="list-group-item"><span class="basic-list"><i class="fa fa-graduation-cap"></i> School</span> <?php  echo $institution; ?></li>
                      <li class="list-group-item"><span class="basic-list"><i class="fa fa-institution"></i> Faculty</span> <?php  echo $faculty; ?></li>
                      <li class="list-group-item"><span class="basic-list"><i class="fa fa-female"></i><i class="fa fa-male"></i> Gender </span> MALE   </li>
                      <li class="list-group-item"><span class="basic-list"><i class="fa fa-heart"></i> Interested Topics</span> Maths, English, Animal Science</li>
                    </ul>
                </div>
                <div class="basic-info transaction">
                    <ul class="list-group">
                      <li class="list-group-item active"> Financial info <span class="pencil"><i class="fa fa-pencil-square-o"></i></span></li>
                      <li class="list-group-item"><span class="basic-list"><i class="fa fa-credit-card-alt"></i> HUBcash</span> <span style="color:#6cea2e;font-family: sans-serif;font-size:18px;">20.00</span> <span style="float:right"><button class="btn btn-success btn-sm" style="background-color: #6cea2e;">Buy</button></span></li>
                      <li class="list-group-item"><span class="basic-list"><i class="fa fa-envelope-o"></i> Email</span> Desezo@gmail.com</li>
                      <li class="list-group-item"><span class="basic-list"><i class="fa fa-graduation-cap"></i> School</span> UNIBEN</li>
                      <li class="list-group-item"><span class="basic-list"><i class="fa fa-female"></i><i class="fa fa-male"></i> Gender </span> MALE   </li>
                      <li class="list-group-item"><span class="basic-list"><i class="fa fa-heart"></i> Interested Topics</span> Maths, English, Animal Science</li>
                    </ul>
                </div>




      </div>
    </div>
      <div class="tab-pane fade" id="pills-events" role="tabpanel" aria-labelledby="pills-events-tab">
        <div class="body-content">
          news!
      </div>

    </div>
    <div class="tab-pane fade" id="pills-news" role="tabpanel" aria-labelledby="pills-news-tab">
      <div class="body-content">
        news!
    </div>
  </div>

  </div>









</div>

<!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
--><script>

//tour guide
var tour = new Tour({
  steps: [
  {
    nav: "#firstnav",
    title: "Title of my step",
    content: "this is the first nav"
  },
  {
    element: "#main",
    title: "This is the main",
    content: "<p>hffhhfkhfk</p>"
  }
]});

// Initialize the tour
tour.init();

// Start the tour
tour.start();

function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
    document.getElementById("main").style.marginLeft = "100%";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
}
function openProfile(){
 document.getElementById("myProfile").style.width = "100%";
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

<script src="bootstrap-tour.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
