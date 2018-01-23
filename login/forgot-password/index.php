<?php session_start();
?>
<!DOCTYPE html>
<html >
<head>

  <meta charset="UTF-8">
  <title>StudiHUB | Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- logo -->
  <link rel="apple-touch-icon" sizes="57x57" href="../images/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="../images/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="../images/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="../images/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="../images/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="../images/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="../images/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="../images/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="../images/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="../images/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="../images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="../images/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="../images/favicon-16x16.png">
<link rel="manifest" href="../images/manifest.json">
<meta name="StudiHUB|LOGIN" content="#ffffff">
<meta name="StudiHUB|LOGIN" content="../images/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<!-- end of logo -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
@import url(https://fonts.googleapis.com/css?family=Montserrat);
* {margin: 0; padding: 0;}


html {

	/*Image only BG fallback*/

	/*background = gradient + image pattern combo*/
  background:
		linear-gradient(rgba(111, 197, 294, 0.6), rgba(21, 57, 113, 0.6));
}

body {
  padding-top: 50px;
  height: 100vh;
  background-color:  #153971;
  /*background:
		linear-gradient(rgba(111, 197, 294, 0.6), rgba(21, 57, 113, 0.6));
	font-family: montserrat, arial, verdana;*/
}
#msform {
	width: auto;
	margin: 50px auto;
	text-align: center;
	position: relative;
}
#msform fieldset {
	background: white;
	border: 0 none;
	border-radius: 3px;
	box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
	padding: 20px 30px;
	box-sizing: border-box;
	width: 80%;
	margin: 0 10%;

	/*stacking fieldsets above each other*/
	position: relative;
}
/*Hide all except first fieldset*/
#msform fieldset:not(:first-of-type) {
	display: none;
}
/*inputs*/
#msform input, #msform textarea {
	padding: 15px;
	border: 1px solid #ccc;
	border-radius: 3px;
	margin-bottom: 10px;
	width: 100%;
	box-sizing: border-box;
	font-family: montserrat;
	color: #2C3E50;
	font-size: 13px;
}
/*buttons*/
#msform .action-button {
	width:auto;
	background: #27AE60;
	font-weight: bold;
	color: white;
	border: 0 none;
	border-radius: 1px;
	cursor: pointer;
	padding: 10px 5px;
	margin: 10px 5px;
}
#msform .action-button:hover, #msform .action-button:focus {
	box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
}
/*headings*/
.fs-title {
	font-size: 15px;
	text-transform: uppercase;
	color: #2C3E50;
	margin-bottom: 10px;
}
.fs-subtitle {
	font-weight: normal;
	font-size: 13px;
	color: #666;
	margin-bottom: 20px;
}
.container-fluid#c{
  top:200px;
  position: absolute;
  background-color:  rgb(255, 0, 24);/* green stuff rgba(135,169,71,0.7); */
  width: 100%;
  margin: 0;
  z-index: ;
  height: 50px;
}
a{
  text-decoration: none;
	font-weight: normal;
	font-size: 12px;


}
body .navbar{
  background: #fff;
  padding: 0px 16px;
     position: absolute;
    width: 100%;
    top: 0;
      z-index: 99;
    box-shadow: 0px 2px 20px -5px}

</style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="../"><img src="../../images/logoc.png" width="150px"></a>
    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="../../" style="font-size: 16px;font-weight:bold;"> Home <span class="sr-only">Home</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="font-size: 16px;font-weight:bold;">About</a>
        </li>


      </ul>
      <!--<form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>-->
    </div>
  </nav>
<?php
  if (@$_SESSION['accessdenied']) {
    echo"<div class=\"alert alert-warning\" style='text-align:center;'>";

    echo"<strong>";echo @$_SESSION['accessdenied'];
  echo "</strong>
</div>";
}elseif (@$_SESSION['accessgranted']) {
  echo"<div class=\"alert alert-success\" style='text-align:center;'>";

  echo"<strong>";echo @$_SESSION['accessgranted'];
echo "</strong>
</div>";
}?>
  <div class="container-fluid" id="c"></div>
  <div class="container-fluid">
<form id="msform" action="../../php/sendemailauth.php" method="post">

      <fieldset>
        <h2 class="fs-title"><i class="fa fa-graduation-cap" aria-hidden="true"></i>StudyHUB</h2>
        <h3 class="fs-subtitle"><small>A Student's Paradise</small></h3>
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="123@example.com" autocomplete="" autofocus/>

        <input type="submit" name="next" class="next action-button" value="SEND PASSWORD LINK" />

      </fieldset>
    </form>
  </div>
  <script>
  form.addEventListener("submit", function(evt) {
  if (form.checkValidity() === false) {
    evt.preventDefault();
    alert("Form is invalid - submission prevented!");
    return false;
  } else {
    // To prevent data from being sent, we've prevented submission
    // here, but normally this code block would not exist.
    evt.preventDefault();
    alert("Form is valid - submission prevented to protect privacy.");
    return false;
  }
});
var inputs = document.getElementsByTagName("input");
var inputs_len = inputs.length;
var addDirtyClass = function(evt) {
  sampleCompleted("Forms-order-dirty");
  evt.srcElement.classList.toggle("dirty", true);
};
for (var i = 0; i < inputs_len; i++) {
  var input = inputs[i];
  input.addEventListener("blur", addDirtyClass);
  input.addEventListener("invalid", addDirtyClass);
  input.addEventListener("valid", addDirtyClass);
}</script>
  <?php include("../../php/javascriptlinks.php"); ?>
</body>
</html>
<?php $_SESSION['accessdenied']=""; ?>
