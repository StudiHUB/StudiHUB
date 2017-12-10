<!DOCTYPE html>
<html >
<head>

  <meta charset="UTF-8">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
	width: 100px;
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
</style>
</head>
<body>
  <div class="container-fluid" id="c"></div>
  <div class="container-fluid">
<form id="msform" action="../php/login_process.php" method="post">

      <fieldset>
        <h2 class="fs-title"><i class="fa fa-graduation-cap" aria-hidden="true"></i>StudyHUB</h2>
        <h3 class="fs-subtitle"><small>Every Student's Paradise</small></h3>
        <input type="email" name="email" placeholder="Email" />
        <input type="password" name="password" placeholder="Password" />
        <input type="submit" name="next" class="next action-button" value="Login" />
        <a href="../signup">Create Account?</a><p>
        <a href="">Forgot Password</a>
      </fieldset>
    </form>
  </div>
</body>
</html>
