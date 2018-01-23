<?php
session_start();
@$error=$_GET['error'];
 ?>
<!DOCTYPE html>
<html >

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <title>StudiHUB | Sign Up</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">


  <link rel="stylesheet" href="css/style.css">
<style>
html{
  background-color: #153971;
}
.custom-file input[type=file]{

background-color: red;

}
select.custom-select{
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
div.alert-danger{
  color: white;
  font-family: monospace;
  background-color:rgba(225,0,50,0.76);
  margin-bottom: 2px;
  border-radius: 20%;

}


.info{
  padding: 10px;
  background: #27ae60;
  width: 50%;
  color: white;
  text-decoration: none;
  border-radius: 5px;
  margin: 10px auto;
  font-size: 15px;
}
.info a{
  text-decoration: none;
  color: white;
  font-size: 12px;
}body .navbar{

  padding: 0px 16px;
     position: absolute;
    width: 100%;
    top: 0;
      z-index: 99;
    box-shadow: 0px 2px 20px -5px}

</style>

</head>

<body>
<?php include '../php/javascriptlinks.php';?>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="../"><img src="../images/logoc.png" width="150px"></a>
    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="../" style="font-size: 16px;font-weight:bold;"> Home <span class="sr-only">Home</span></a>
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
  <!-- multistep form -->
<form id="msform" action="../php/registration_process.php" method="post">
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Account Setup</li>
    <li>Student Profiles</li>
    <li>Personal Details</li>
  </ul>
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Create your account</h2>
    <h3 class="fs-subtitle">Login details</h3><?php if ($error) {
      # code...
     ?>
    <div class="alert alert-danger"><?php echo $error; ?></div><?php }?>
    <label for="email">Email</label>
    <input type="email" name="email" placeholder="123@example.com" autocomplete="email" required/>

    <input type="password" name="password" placeholder="Password" />
    <input type="password" name="confirm_password" placeholder="Confirm Password" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Student Profile</h2>
    <h3 class="fs-subtitle">Your academic presence</h3>
    <input list="uni" placeholder="University of .."class="form-control" name="school">
    <datalist id="uni" name="school">


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




    </datalist>
    <select name="level"class="form-control">
      <option selected>Level</option>
      <option value="100">100 Level</option>
      <option value="200">200 Level</option>
      <option value="300">300 Level</option>
      <option value="400">400 Level</option>
      <option value="500">500 Level</option>
      <option value="600">600 Level</option>
      <option value="700">700 Level</option>
      <option value="not_in_school">Not in School</option>

    </select><br>




    <input list="fac" placeholder="Faculty of .." class="form-control" name="faculty">
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

    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Personal Details</h2>
    <h3 class="fs-subtitle">We will never sell it</h3>
    <input type="text" name="first_name" placeholder="First Name" autocomplete="name"/>
    <input type="text" name="last_name" placeholder="Last Name" autocomplete="last name"/>
    <input type="tel" name="phone" placeholder="Phone" autocomplete="tel"/>

    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <button type="submit" name="submit" class="action-button"  />Submit</button>
  </fieldset>
<div class="info"><a href="../login/">Already registered? >> Login</a></div>
</form>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js' async></script>
  <script  src="index.js" async></script>

</body>
</html>
<?php $error="" ?>
