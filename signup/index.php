<?php
@$error=$_GET['error'];
 ?>
<!DOCTYPE html>
<html >
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <title>Multi Step Form with Progress Bar using jQuery and CSS3</title>

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
}
</style>

</head>

<body>
  <!-- multistep form -->
<form id="msform" action="../php/registration_process.php" method="post">
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Account Setup</li>
    <li>Social Profiles</li>
    <li>Personal Details</li>
  </ul>
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Create your account</h2>
    <h3 class="fs-subtitle">Login details</h3>
    <div class="alert alert-danger"><?php echo $error; ?></div>
    <input type="email" name="email" placeholder="Email" />

    <input type="password" name="password" placeholder="Password" />
    <input type="password" name="confirm_password" placeholder="Confirm Password" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Student Profile</h2>
    <h3 class="fs-subtitle">Your academic presence</h3>
    <select name="school"class="custom-select">
      <option disabled selected>University</option>
      <option value="not_in_school">Not in School</option>
      <option value="Abia State University">Abia State University</option>

      <option value="Abubakar Tafawa Balewa University">Abubakar Tafawa Balewa University</option>
      <option value="Achievers University">Achievers University</option>
      <option value="Adamawa State University">Adamawa State University</option>
      <option value="Adekunle Ajasin University">Adekunle Ajasin University</option>
      <option value="Adeleke University">Adeleke University</option>
      <option value="Afe Babalola University">Afe Babalola University</option>
      <option value="African University of Science & Technology">African University of Science & Technology</option>
      <option value="Ahmadu Bello University">Ahmadu Bello University</option>
      <option value="Ajayi Crowther University">Ajayi Crowther University</option>
      <option value="Al-Hikmah University">Al-Hikmah University</option>
      <option value="Al-Qalam University">Al-Qalam University</option>
      <option value="Ambrose Alli University">Ambrose Alli University</option>
      <option value="American University of Nigeria">American University of Nigeria</option>
      <option value="Anchor University Ayobo">Anchor University Ayobo</option>
      <option value="Arthur Javis University Akpoyubo">Arthur Javis University Akpoyubo</option>
      <option value="Augustine University">Augustine University</option>
      <option value="Babcock University">Babcock University</option>
      <option value="Bauchi State University">Bauchi State University</option>
      <option value="Bayero University">Bayero University</option>
      <option value="Baze University">Baze University</option>
      <option value="Bells University of Technology">Bells University of Technology</option>
      <option value="Benson Idahosa University">Benson Idahosa University</option>
      <option value="Benue State University">Benue State University</option>
      <option value="Bingham University">Bingham University</option>
      <option value="Bowen University">Bowen University</option>
      <option value="Bornu State University">Bornu State University</option>
      <option value="Caleb University">Caleb University</option>
      <option value="Caritas University">Caritas University</option>
      <option value="CETEP City University">CETEP City University</option>
      <option value="Chrisland University">Chrisland University</option>
      <option value="Christopher University">Christopher University</option>
      <option value="Chukwuemeka Odumegwu Ojukwu University">Chukwuemeka Odumegwu Ojukwu University</option>
      <option value="Clifford University Owerrinta">Clifford University Owerrinta</option>
      <option value="Coal City University">Coal City University</option>
      <option value="Covenant University">Covenant University</option>
      <option value="Crawford University">Crawford University</option>
      <option value="Crescent University">Crescent University</option>
      <option value="Crown Hill University Eiyenkorin">Crown Hill University Eiyenkorin</option>
      <option value="Cross River State University of Science and Technology">Cross River State University of Science and Technology</option>
      <option value="Delta State University">Delta State University</option>
      <option value="Dominican University Ibadan">Dominican University Ibadan</option>
      <option value="Eastern Palm University Ogboko">Eastern Palm University Ogboko</option>
      <option value="Ebonyi State University">Ebonyi State University</option>
      <option value="Edo University Iyamo">Edo University Iyamo</option>
      <option value="Edwin Clark University">Edwin Clark University</option>
      <option value="Ekiti State University">Ekiti State University</option>
      <option value="Elizade University">Elizade University</option>
      <option value="Enugu State University of Science and Technology">Enugu State University of Science and Technology</option>
      <option value="Evangel University">Evangel University</option>
      <option value="Federal University Gashua">Federal University Gashua</option>
      <option value="Federal University of Agriculture">Federal University of Agriculture</option>
      <option value="Federal University of Petroleum Resources">Federal University of Petroleum Resources</option>
      <option value="Federal University of Technology">Federal University of Technology</option>
      <option value="Federal University of Technology, Minna">Federal University of Technology, Minna</option>
      <option value="Federal University of Technology, Owerri">Federal University of Technology, Owerri</option>
      <option value="Federal University, Birnin Kebbi">Federal University, Birnin Kebbi</option>
      <option value="Federal University, Dutse, Jigawa State">Federal University, Dutse, Jigawa State</option>
      <option value="Federal University, Dutsin-Ma, Katsina">Federal University, Dutsin-Ma, Katsina</option>
      <option value="Federal University, Gusau Zamfara">Federal University, Gusau Zamfara</option>
      <option value="Federal University, Kashere, Gombe State">Federal University, Kashere, Gombe State</option>
      <option value="Federal University, Lafia, Nasarawa State">Federal University, Lafia, Nasarawa State</option>
      <option value="Federal University, Lokoja, Kogi State">Federal University, Lokoja, Kogi State</option>
      <option value="Federal University, Ndifu-Alike, Ebonyi State">Federal University, Ndifu-Alike, Ebonyi State</option>
      <option value="Federal University, Otuoke, Bayelsa">Federal University, Otuoke, Bayelsa</option>
      <option value="Federal University, Oye-Ekiti, Ekiti State">Federal University, Oye-Ekiti, Ekiti State</option>
      <option value="Federal University, Wukari, Taraba State">Federal University, Wukari, Taraba State</option>
      <option value="Fountain Unveristy">Fountain Unveristy</option>
      <option value="Godfrey Okoye University">Godfrey Okoye University</option>
      <option value="Gombe State University">Gombe State University</option>
      <option value="Gombe State University of Science and Technology">Gombe State University of Science and Technology</option>
      <option value="Gregory University">Gregory University</option>
      <option value="Hallmark University">Hallmark University</option>
      <option value="Hezekiah University">Hezekiah University</option>
      <option value="Ibrahim Badamasi Babangida University">Ibrahim Badamasi Babangida University</option>
      <option value="Igbinedion University Okada">Igbinedion University Okada</option>
      <option value="Ignatius Ajuru University of Education">Ignatius Ajuru University of Education</option>
      <option value="Imo State University">Imo State University</option>
      <option value="Joseph Ayo Babalola University">Joseph Ayo Babalola University</option>
      <option value="Kaduna State University">Kaduna State University</option>
      <option value="Kano University of Science and Technology">Kano University of Science & Technology</option>
      <option value="Kebbi State University">Kebbi State University</option>
      <option value="Kings University">Kings University</option>
      <option value="Kogi State University Anyigba">Kogi State University Anyigba</option>
      <option value="Kola Daisi University Ibadan">Kola Daisi University Ibadan</option>
      <option value="Kwararafa University">Kwararafa University</option>
      <option value="Kwara State University">Kwara State University</option>
      <option value="Ladoke Akintola University of Technology">Ladoke Akintola University of Technology</option>
      <option value="Landmark University">Landmark University</option>
      <option value="Lagos State University">Lagos State University</option>
      <option value="Lead City University">Lead City University</option>
      <option value="Legacy University">Legacy University</option>
      <option value="Madonna University">Madonna University</option>
      <option value="Mcpherson University">Mcpherson University</option>
      <option value="Micheal and Cecilia University">Micheal & Cecilia University</option>
      <option value="Mountain Top University">Mountain Top University</option>
      <option value="Michael Okpara University of Agriculture">Michael Okpara University of Agriculture</option>
      <option value="Modibbo Adama University of Technology">Modibbo Adama University of Technology</option>
      <option value="Moshood Abiola University of Science and Technology">Moshood Abiola University of Science and Technology</option>
      <option value="Nasarawa State University">Nasarawa State University</option>
      <option value="National Open University of Nigeria">National Open University of Nigeria</option>
      <option value="Nigeria Police Academy Wudil">Nigeria Police Academy Wudil</option>
      <option value="Nigerian Defence Academy">Nigerian Defence Academy</option>
      <option value="Niger Delta University">Niger Delta University</option>
      <option value="Nile University of Nigeria">Nile University of Nigeria</option>
      <option value="Nnamdi Azikiwe University">Nnamdi Azikiwe University</option>
      <option value="Northwest University">Northwest University</option>
      <option value="Novena University">Novena University</option>
      <option value="Obafemi Awolowo University">Obafemi Awolowo University</option>
      <option value="Obong University">Obong University</option>
      <option value="Oduduwa University">Oduduwa University</option>
      <option value="Olabisi Onabanjo University">Olabisi Onabanjo University</option>
      <option value="Ondo State University of Medical Sciences">Ondo State University of Medical Sciences</option>
      <option value="Ondo State University of Science and Technology">Ondo State University of Science and Technology</option>
      <option value="Osun State University">Osun State University</option>
      <option value="Oyo State Technical University">Oyo State Technical University</option>
      <option value="Pan-Atlantic University">Pan-Atlantic University</option>
      <option value="Paul University">Paul University</option>
      <option value="Plateau State University">Plateau State University</option>
      <option value="Redeemer's University">Redeemer's University</option>
      <option value="Renaissance University">Renaissance University</option>
      <option value="Rhema University">Rhema University</option>
      <option value="Ritman University">Ritman University</option>
      <option value="River State University of Science and Technology">River State University of Science and Technology</option>
      <option value="Salem University">Salem University</option>
      <option value="Samuel Adegboyega University">Samuel Adegboyega University</option>
      <option value="Southwestern University">Southwestern University</option>
      <option value="Sokoto State University">Sokoto State University</option>
      <option value="Sule Lamido University">Sule Lamido University</option>
      <option value="Summit University">Summit University</option>
      <option value="Tai Solarin University of Education">Tai Solarin University of Education</option>
      <option value="Tansian University">Tansian University</option>
      <option value="Taraba State University">Taraba State University</option>
      <option value="University of Abuja">University of Abuja</option>
      <option value="University of Agriculture Makurdi">University of Agriculture Makurdi</option>
      <option value="University of Benin">University of Benin</option>
      <option value="University of Calabar">University of Calabar</option>
      <option value="University of Ibadan">University of Ibadan</option>
      <option value="University of Ilorin">University of Ilorin</option>
      <option value="University of Jos">University of Jos</option>
      <option value="University of Lagos">University of Lagos</option>
      <option value="University of Maiduguri">University of Maiduguri</option>
      <option value="University of Mkar">University of Mkar</option>
      <option value="University of Nigeria Nsukka">University of Nigeria, Nsukka</option>
      <option value="University of Port-Harcourt">University of Port-Harcourt</option>
      <option value="University of Uyo">University of Uyo</option>
      <option value="University of Africa Toru Orua">University of Africa Toru Orua</option>
      <option value="Umar Musa Yar' Adua University">Umar Musa Yar' Adua University</option>
      <option value="Usumanu Danfodiyo University">Usumanu Danfodiyo University</option>
      <option value="Veritas University">Veritas University</option>
      <option value="Wellspring University">Wellspring University</option>
      <option value="Wesley University of Science and Technology">Wesley University of Science & Technology</option>
      <option value="Western Delta University">Western Delta University</option>
      <option value=""></option>



    </select>
    <select name="level"class="custom-select">
      <option selected>Level</option>
      <option value="100">100 Level</option>
      <option value="200">200 Level</option>
      <option value="300">300 Level</option>
      <option value="400">400 Level</option>
      <option value="500">500 Level</option>
      <option value="600">600 Level</option>
      <option value="700">700 Level</option>
      <option value="not_in_school">Not in School</option>

    </select>
    <select name="faculty"class="custom-select">
      <option selected disabled>Faculty</option>
      <option value="not_in_school">Not in School</option>
      <option value="Faculty of Administration">Faculty of Administration</option>
      <option value="Faculty of agriculture">Faculty of agriculture</option>
      <option value="Faculty of Arts & Humanities">Faculty of Arts & Humanities</option>
      <option value="Faculty of education">Faculty of education</option>
      <option value="Faculty of Engineering, Environment & Technology">Faculty of Engineering, Environment & Technology</option>
      <option value="Faculty of law">Faculty of law</option>
      <option value="Faculty of Medical, Pharmaceutical & Health Sciences">Faculty of Medical, Pharmaceutical & Health Sciences</option>
      <option value="Faculty of sciences">Faculty of sciences</option>
      <option value="Faculty of Social & Management Sciences">Faculty of Social & Management Sciences</option>
      <option value="College of education">College of education</option>
      <option value="Polytechnics and Monotechnics">Polytechnics and Monotechnics</option>



    </select>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Personal Details</h2>
    <h3 class="fs-subtitle">We will never sell it</h3>
    <input type="text" name="first_name" placeholder="First Name" />
    <input type="text" name="last_name" placeholder="Last Name" />
    <input type="text" name="phone" placeholder="Phone" />

    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <button type="submit" name="submit" class="action-button"  />Submit</button>
  </fieldset>
<div class="info"><a href="../login/">Already registered? >> Login</a></div>
</form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>

    <script  src="index.js"></script>

</body>
</html>
<?php  ?>
