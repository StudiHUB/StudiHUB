<?php
session_start();
include('../php/conn.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow|Sansita|Source+Sans+Pro|Work+Sans" rel="stylesheet">
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


.container-fluid#body{
  padding:;
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
.ml-auto{
  display: none;
}
div.tab-pane{
  padding: 0;
}
.body .jumbotron{
margin-top: 40px;
padding-bottom: 5px;
    margin-bottom:0;
    box-shadow: inset 0px 1px 20px -8px black;
 }
 .body .jumbotron label{
   margin-right: 10px;
 }
.card,.wrapper{

   position: relative;
 }
 .card{
   margin-bottom: 15px;
   padding: 12px;
   -webkit-box-shadow: 0 4px 20px -10px black;
	   -moz-box-shadow: 0 4px 20px -10px black;
	        box-shadow: 0 4px 20px -10px black;
 }
 .searchwrapper{
   width: 100%;
 display: flex;
 flex-wrap: wrap;
 }
.wrapper{
  display: flex;
  width: 100%;
   top:50px;
   display: flex;
   flex-wrap: wrap;
    justify-content: space-between;
}
.card .pdflogo{
font-size: 40px;
color: #ff0000;
text-align: center;
}
*{font-family: 'Work Sans', sans-serif;}
h4{
  font-family: 'Source Sans Pro', sans-serif;
}
.submit{
  margin: 5px auto;
  width: 50px;
}
.submitbt{
  padding: 5px;
  background-color: #e9ecef;
  border: 2px solid grey;
  border-radius: 0;
}
.submitbt:hover{
  box-shadow: 0px 0px 14px -2px #143870;
}
.university{
 font-family: 'PT Sans Narrow', sans-serif;
 font-size: 11px;
     font-weight: bolder;
     color:#818182;
}
a:hover,a .card:hover{
  text-decoration: none;
  -webkit-box-shadow: 0 0px 55px -10px black;
    -moz-box-shadow: 0 0px 55px -10px black;
         box-shadow: 0 0px 55px -10px black;
}
a{
  text-decoration: none;
}
a .card .course-code{
color: Black;
}
</style>
</head>

<body>

  <div  class="container-fluid" id="main">
<nav class="navbar navbar-dark bg-dark header" id="firstnav">

   <a class="navbar-brand" href="../"><!-- Studi<span class="hub" style="color:red;font-weight:bold;">HUB</span><!--<i class="fa fa-play-circle fa-2x" aria-hidden="true">--></i>


  <!--<i class="fa fa fa-play-circle" ></i>-->
  <img src="../images/logo.jpg.png" width="150px">
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
      <form class="form-inline" role="search" action="search-results.php" method="post">
        <div class="input-group stylish-input-group input-group-sm">
                      <input type="search" class="form-control"  placeholder="Search materials.." name="search_material" >
                      <span class="input-group-addon">
                          <button type="submit" name="submit">
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
          echo "  <li class=\"list-group-item\"><a href=\"../login\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i><span class=\"lists\"> Login</span></a>";
          echo "  <li class=\"list-group-item\"><a href=\"../signup\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i><span class=\"lists\"> Sign Up</span></a>";

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
                echo  "<li class=\"list-group-item\" ><a href=\"../tutor\"style=\"text-align:center; padding:5px;color:#fff;\" class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"> Upload video</i></a>
                <a href=\"upload-materials\"style=\"text-align:center; padding:5px;color:#fff;\" class=\"btn btn-success\"><i class=\"fa fa-share\"> Share Material</i></a>
                </li>";
              }else {
                echo  "<li class=\"list-group-item\" ><a href=\"../login\"style=\"text-align:center; padding:5px;color:#fff;\" class=\"btn btn-warning\"><i class=\"fa fa-plus-circle\"> Upload video</i></a></li>";

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

  <div class="container-fluid body" id="body">
    <div class="jumbotron">
    <h4>Filter Results</h4>

        <form class="" method="get" action="search-results.php">
          <div class="searchwrapper">
<!-- selectlist for university -->
          <label for="university">School
          <!--<select class="form-control" name="university" >-->
            <input list="uni" placeholder="University" class="form-control" name="university">
            <datalist id="uni" name="school"class="">
              <option disabled selected>University</option>

              <option value="Abia State University"></option>

              <option value="Abubakar Tafawa Balewa University"></option>
              <option value="Achievers University"></option>
              <option value="Adamawa State University"></option>
              <option value="Adekunle Ajasin University"></option>
              <option value="Adeleke University"></option>
              <option value="Afe Babalola University"></option>
              <option value="African University of Science & Technology"></option>
              <option value="Ahmadu Bello University"></option>
              <option value="Ajayi Crowther University"></option>
              <option value="Al-Hikmah University"></option>
              <option value="Al-Qalam University"></option>
              <option value="Ambrose Alli University"></option>
              <option value="American University of Nigeria"></option>
              <option value="Anchor University Ayobo"></option>
              <option value="Arthur Javis University Akpoyubo"></option>
              <option value="Augustine University"></option>
              <option value="Babcock University"></option>
              <option value="Bauchi State University"></option>
              <option value="Bayero University"></option>
              <option value="Baze University"></option>
              <option value="Bells University of Technology"></option>
              <option value="Benson Idahosa University"></option>
              <option value="Benue State University"></option>
              <option value="Bingham University"></option>
              <option value="Bowen University"></option>
              <option value="Bornu State University"></option>
              <option value="Caleb University"></option>
              <option value="Caritas University"></option>
              <option value="CETEP City University"></option>
              <option value="Chrisland University"></option>
              <option value="Christopher University"></option>
              <option value="Chukwuemeka Odumegwu Ojukwu University"></option>
              <option value="Clifford University Owerrinta"></option>
              <option value="Coal City University"></option>
              <option value="Covenant University"></option>
              <option value="Crawford University"></option>
              <option value="Crescent University"></option>
              <option value="Crown Hill University Eiyenkorin"></option>
              <option value="Cross River State University of Science and Technology"></option>
              <option value="Delta State University"></option>
              <option value="Dominican University Ibadan"></option>
              <option value="Eastern Palm University Ogboko"></option>
              <option value="Ebonyi State University"></option>
              <option value="Edo University Iyamo"></option>
              <option value="Edwin Clark University"></option>
              <option value="Ekiti State University"></option>
              <option value="Elizade University"></option>
              <option value="Enugu State University of Science and Technology"></option>
              <option value="Evangel University"></option>
              <option value="Federal University Gashua"></option>
              <option value="Federal University of Agriculture"></option>
              <option value="Federal University of Petroleum Resources"></option>
              <option value="Federal University of Technology"></option>
              <option value="Federal University of Technology, Minna"></option>
              <option value="Federal University of Technology, Owerri"></option>
              <option value="Federal University, Birnin Kebbi"></option>
              <option value="Federal University, Dutse, Jigawa State"></option>
              <option value="Federal University, Dutsin-Ma, Katsina"></option>
              <option value="Federal University, Gusau Zamfara"></option>
              <option value="Federal University, Kashere, Gombe State"></option>
              <option value="Federal University, Lafia, Nasarawa State"></option>
              <option value="Federal University, Lokoja, Kogi State"></option>
              <option value="Federal University, Ndifu-Alike, Ebonyi State"></option>
              <option value="Federal University, Otuoke, Bayelsa"></option>
              <option value="Federal University, Oye-Ekiti, Ekiti State"></option>
              <option value="Federal University, Wukari, Taraba State"></option>
              <option value="Fountain Unveristy"></option>
              <option value="Godfrey Okoye University"></option>
              <option value="Gombe State University"></option>
              <option value="Gombe State University of Science and Technology"></option>
              <option value="Gregory University"></option>
              <option value="Hallmark University"></option>
              <option value="Hezekiah University"></option>
              <option value="Ibrahim Badamasi Babangida University"></option>
              <option value="Igbinedion University Okada"></option>
              <option value="Ignatius Ajuru University of Education"></option>
              <option value="Imo State University"></option>
              <option value="Joseph Ayo Babalola University"></option>
              <option value="Kaduna State University"></option>
              <option value="Kano University of Science and Technology"></option>
              <option value="Kebbi State University"></option>
              <option value="Kings University"></option>
              <option value="Kogi State University Anyigba"></option>
              <option value="Kola Daisi University Ibadan"></option>
              <option value="Kwararafa University"></option>
              <option value="Kwara State University"></option>
              <option value="Ladoke Akintola University of Technology"></option>
              <option value="Landmark University"></option>
              <option value="Lagos State University"></option>
              <option value="Lead City University"></option>
              <option value="Legacy University"></option>
              <option value="Madonna University"></option>
              <option value="Mcpherson University"></option>
              <option value="Micheal and Cecilia University"></option>
              <option value="Mountain Top University"></option>
              <option value="Michael Okpara University of Agriculture"></option>
              <option value="Modibbo Adama University of Technology"></option>
              <option value="Moshood Abiola University of Science and Technology"></option>
              <option value="Nasarawa State University"></option>
              <option value="National Open University of Nigeria"></option>
              <option value="Nigeria Police Academy Wudil"></option>
              <option value="Nigerian Defence Academy"></option>
              <option value="Niger Delta University"></option>
              <option value="Nile University of Nigeria"></option>
              <option value="Nnamdi Azikiwe University"></option>
              <option value="Northwest University"></option>
              <option value="Novena University"></option>
              <option value="Obafemi Awolowo University"></option>
              <option value="Obong University"></option>
              <option value="Oduduwa University"></option>
              <option value="Olabisi Onabanjo University"></option>
              <option value="Ondo State University of Medical Sciences"></option>
              <option value="Ondo State University of Science and Technology"></option>
              <option value="Osun State University"></option>
              <option value="Oyo State Technical University"></option>
              <option value="Pan-Atlantic University"></option>
              <option value="Paul University"></option>
              <option value="Plateau State University"></option>
              <option value="Redeemer's University"></option>
              <option value="Renaissance University"></option>
              <option value="Rhema University"></option>
              <option value="Ritman University"></option>
              <option value="River State University of Science and Technology"></option>
              <option value="Salem University"></option>
              <option value="Samuel Adegboyega University"></option>
              <option value="Southwestern University"></option>
              <option value="Sokoto State University"></option>
              <option value="Sule Lamido University"></option>
              <option value="Summit University"></option>
              <option value="Tai Solarin University of Education"></option>
              <option value="Tansian University"></option>
              <option value="Taraba State University"></option>
              <option value="University of Abuja"></option>
              <option value="University of Agriculture Makurdi"></option>
              <option value="University of Benin"></option>
              <option value="University of Calabar"></option>
              <option value="University of Ibadan"></option>
              <option value="University of Ilorin"></option>
              <option value="University of Jos"></option>
              <option value="University of Lagos"></option>
              <option value="University of Maiduguri"></option>
              <option value="University of Mkar"></option>
              <option value="University of Nigeria Nsukka"></option>
              <option value="University of Port-Harcourt"></option>
              <option value="University of Uyo"></option>
              <option value="University of Africa Toru Orua"></option>
              <option value="Umar Musa Yar' Adua University"></option>
              <option value="Usumanu Danfodiyo University"></option>
              <option value="Veritas University"></option>
              <option value="Wellspring University"></option>
              <option value="Wesley University of Science and Technology"></option>
              <option value="Western Delta University"></option>
              <option value=""></option>

            </datalist>
          </label>

          <label for="faculty">Faculty
            <input list="fac" placeholder="Faculty" class="form-control"  name="faculty">
            <datalist id="fac" name="faculty">

              <option value="not_in_school"></option>
              <option value="Faculty of Administration"></option>
              <option value="Faculty of agriculture"></option>
              <option value="Faculty of Arts & Humanities"></option>
              <option value="Faculty of education"></option>
              <option value="Faculty of Engineering, Environment & Technology"></option>
              <option value="Faculty of law"></option>
              <option value="Faculty of Medical, Pharmaceutical & Health Sciences"></option>
              <option value="Faculty of sciences"></option>
              <option value="Faculty of Social & Management Sciences"></option>
              <option value="College of education"></option>
              <option value="Polytechnics and Monotechnics"></option>



            </datalist>
        </label>
        <label for="department">Department
          <input list="department" placeholder="Department" class="form-control"  name="department">
          <datalist id="department" name="department">

            <option value="not_in_school"></option>

          </datalist>
      </label>

      <label for="level">Level
      <input list="level" placeholder="Level" class="form-control" name="level">
        <datalist id="level" name="level"class="">


        <option value="100">100 Level</option>
        <option value="200">200 Level</option>
        <option value="300">300 Level</option>
        <option value="400">400 Level</option>
        <option value="500">500 Level</option>
        <option value="600">600 Level</option>
        <option value="700">700 Level</option>
        <option value="not_in_school">Not in School</option>

      </datalist>
    </label>
    <!-- selectlist for Category -->
    <label for="category">Category
    <select class="form-control" name="category">
      <option value="Science">Science</option>
      <option value="art">Art</option>
      <option value="other">Other</option>
    </select>
  </label>
    <div class="submit">
      <button class="submitbt" type="submit" name="submit">Filter</button>
    </div>
        </div>
        </form>
    </div>
    <div class="wrapper">
      <?php
      if (isset($_GET["submit"])) {
        # code...

        $university=$conn->real_escape_string(htmlentities($_GET["university"],ENT_QUOTES)); /**/
         $pieces = explode(" ", $university);                                                  /**/
        $university=implode("_", $pieces);                                                    /**/
         $faculty=$conn->real_escape_string(htmlentities($_GET["faculty"],ENT_QUOTES));       /**/
         $fac = explode(" ", $faculty);                                                        /**/
         $faculty=implode("_", $fac);                                                           /**/
         $level=$conn->real_escape_string(htmlentities($_GET["level"],ENT_QUOTES));             /**/
         $category=$conn->real_escape_string(htmlentities($_GET["category"],ENT_QUOTES));       /**/




    //Do real escaping here

    $query = "SELECT * FROM materials WHERE ";

    //$conditions = array();

    if(! empty($university)) {
      $query .= "university='$university'";
      if ($university!="") {

              $query .=" AND ";
        }
    }

    if(! empty($faculty)) {

        $query .= "faculty='$faculty'";
        if ($faculty!="") {
              $query .=" AND ";
          }
    }

    if(! empty($level)) {

      $query .= "level='$level'";
      if ($level!="") {
            $query .=" AND ";
        }
    }
    if(! empty($category)) {

      $query .="cartegory='$category'";
    }

    $sql = $query;

//echo $sql;
    $filterresult = mysqli_query($conn,$sql);


    //return $result;



      if (mysqli_num_rows($filterresult) > 0){
        # code...

      while ($row=mysqli_fetch_assoc($filterresult)) {
        $materialid=$row['id'];
        $materialpath=$row['path'];
        $materialuniversity=$row['university'];
        $materiallevel=$row['level'];
        $materialcourse_code=$row['course_code'];
        //DISPLAYING THE Materials AFTER SEARCHING

    echo "<a href=\"view-material/index.php?id=$materialid\">";
        echo "<div class=\"card\">";
        echo "<div class=\"pdflogo\"><i class=\"fa fa-file-pdf-o\"></i></div>";
        echo "<span class=\"course-code\">".$materialcourse_code."</span>";
        echo "<span class=\"university\">".$materialuniversity."</span>";
      echo "</div>";
      echo "</a>";
      }
    }else {

          echo "<div class=\"card\">";
          echo "<span class=\"course-code\">No materials Found<br> from filter</span>";
          echo "<span class=\"university\">Please try using the Course code e.g AEE321</span>";
        echo "</div>";
    }


     }else {
       # code...
if (isset($_POST["submit"])) {
      $search_by_genericname=$conn->real_escape_string(htmlentities($_POST["search_material"],ENT_QUOTES));
      if(!empty($search_by_genericname)){

        //Nav bar input---///

        //$search_by_genericname=$conn->real_escape_string(htmlentities($_POST["search_material"],ENT_QUOTES));
        $find=$search_by_genericname;
        if (empty($find)) {
          header("location:index.php");
        }else {


      /////////////////////////////////////////////////////////////////////////////////////////////
       /* $university=$conn->real_escape_string(htmlentities($_POST["university"],ENT_QUOTES)); /**/
       /* $pieces = explode(" ", $university);                                                  /**/
       /* $university=implode("_", $pieces);                                                    /**/
       /* $faculty=$conn->real_escape_string(htmlentities($_POST["faculty"],ENT_QUOTES));       /**/
       /* $fac = explode(" ", $faculty);                                                        /**/
       /* $faculty=implode("_", $fac);                                                           /**/
       /* $level=$conn->real_escape_string(htmlentities($_POST["level"],ENT_QUOTES));             /**/
       /* $category=$conn->real_escape_string(htmlentities($_POST["category"],ENT_QUOTES));       /**/
       ////////////////////////////////////////////////////////////////////////////////////////////////

       $findbycourse_code="SELECT * FROM materials WHERE ";
       $findbycourse_code.="course_code LIKE '$find' OR ";
       $findbycourse_code.="course_code LIKE '%$find' OR ";
       $findbycourse_code.="course_code LIKE '$find%' OR ";
       $findbycourse_code.="course_code LIKE '%$find%'";
       $generic_searchbycourse_code=mysqli_query($conn,$findbycourse_code);

       if (!$generic_searchbycourse_code) {
         //echo mysqli_error($conn);
         die("query failed to execute:2");

       }

        $findbymaterial="SELECT * FROM materials WHERE ";
        $findbymaterial.="material_name LIKE '{$find}' OR ";
        $findbymaterial.="material_name LIKE '%{$find}' OR ";
        $findbymaterial.="material_name LIKE '{$find}%' OR ";
        $findbymaterial.="material_name LIKE '%{$find}%'";
        $generic_searchbymaterialname=mysqli_query($conn,$findbymaterial);

        if (!$generic_searchbymaterialname) {
          //echo mysqli_error($conn);
          die("query failed to execute:1");
        }
        $checkmname=$generic_searchbymaterialname;
        $checkccode=$generic_searchbycourse_code;
      }

      $countname=mysqli_num_rows($checkmname);
      $countcode=mysqli_num_rows($checkccode);
    echo "<div style='padding:5px; font-size:12px;'>we found <b>".$countcode."</b> results searching the Course Code and</div>";
    echo "<div style='padding:5px;  font-size:12px;'>we found <b>".$countname."</b> results searching the Material name</div>";?>

      <?php if (isset($_SESSION["id"])) {
          //DISPLAYING THE Materials AFTER SEARCHING
      //$checkmname
      //$checkccode

      if (mysqli_num_rows($checkccode) > 0){
        # code...

      while ($row=mysqli_fetch_assoc($checkccode)) {
        $materialid=$row['id'];
        $materialpath=$row['path'];
        $materialuniversity=$row['university'];
        $materiallevel=$row['level'];
        $materialcourse_code=$row['course_code'];
        //DISPLAYING THE Materials AFTER SEARCHING

    echo "<a href=\"view-material/index.php?id=$materialid\">";
        echo "<div class=\"card\">";
        echo "<div class=\"pdflogo\"><i class=\"fa fa-file-pdf-o\"></i></div>";
        echo "<span class=\"course-code\">".$materialcourse_code."</span>";
        echo "<span class=\"university\">".$materialuniversity."</span>";
      echo "</div>";
      echo "</a>";
      }
    }else {

          echo "<div class=\"card\">";
          echo "<span class=\"course-code\">No materials Found<br> searching course codes</span>";
          echo "<span class=\"university\">Please try using the Course code e.g AEE321</span>";
        echo "</div>";
    }
    if (mysqli_num_rows($checkmname) > 0){
      # code...

    while ($row=mysqli_fetch_assoc($checkmname)) {
      $materialid=$row['id'];
      $materialpath=$row['path'];
      $materialuniversity=$row['university'];
      $materiallevel=$row['level'];
      $materialcourse_code=$row['course_code'];
      //DISPLAYING THE Materials AFTER SEARCHING

  echo "<a href=\"view-material/index.php?id=$materialid\">";
      echo "<div class=\"card\">";
      echo "<div class=\"pdflogo\"><i class=\"fa fa-file-pdf-o\"></i></div>";
      echo "<span class=\"course-code\">".$materialcourse_code."</span>";
      echo "<span class=\"university\">".$materialuniversity."</span>";
    echo "</div>";
    echo "</a>";
    }
  }else {

        echo "<div class=\"card\">";
        echo "<span class=\"course-code\">No materials Found <br>searching material names</span>";
        echo "<span class=\"university\">Please try using the Course code e.g AEE321</span>";
      echo "</div>";
  }
  }
}
}else {
  echo "<div class=\"card\">";
  echo "<span class=\"course-code\">No materials Found <br>searching material names</span>";
  echo "<span class=\"university\">Please try using the Course code e.g AEE321</span>";
echo "</div>";
}
}

      ?>

</div>
</div>

</div>

<script src="bootstrap-tour.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
<?php  ?>
