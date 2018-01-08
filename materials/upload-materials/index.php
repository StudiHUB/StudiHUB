<?php session_start();?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>StudiHUB | Materials</title>
    <?php
    include("../../php/csslinks.php");
    ?>
    <style>
    .bg-dark
    {
      height: 40px;
    background-color: #004085!important;
    }
    .container-fluid{
      padding: 0;
    }
    .jumbotron{

      height:auto;

      width:100%;
      background-color: #e9ecef;
      margin:auto;
    }
    .form{
      margin:5px 10px;
      padding: 20px;
      border: 0.8px solid  #e9ecef;
      height: auto;
      width: auto;
      box-shadow: 0px 0px 9px -2px  #e9ecef;
      background:;
    }
    .input_file{
      padding: 5px;
      border: 0.8px solid  #e9ecef;
      background-color: #e9ecef;
      box-shadow: 0px 0px 9px -2px  #e9ecef;
    }
    input[type="text"]{
      margin-bottom: 10px;
    }
    .form-check{
      padding: 10px 20px;

    }
    .alert-success{
      font-size: 20px;
      font-family: sans-serif;
      padding: 10px;
    }
    div#navbarToggleExternalContent{
      z-index: 9999;
    }
      div#navbarToggleExternalContent a{padding: 5px;}
    </style>
  </head>
  <body>
    <?php
    include("../../php/header.php");
    ?>    <div class="container-fluid">
      <?php if(@$_SESSION["uploadsuccess"]!=""){

        echo "<div class=\"alert-success\">";
        echo @$_SESSION["uploadsuccess"];
        echo "</div>";

      }else{
        echo "<div class=\"alert-danger\">";
        echo @$_SESSION["uploadmsg"];
        echo "</div>";
      }

      ?>
      <div class="collapse" id="navbarToggleExternalContent">
&nbsp;&nbsp;&nbsp;<a href="../../" >Home</a>&nbsp;&nbsp;&nbsp;<a href="../">Materials</a>
</div>
      <div class="jumbotron">
        <h3>Share your materials..<br><small>Share with friends..<br> See what others are reading..</small></h3>
        </div>

        <div class="form">
        <form class="" action="../../php/materialuploads.php" method="post" enctype="multipart/form-data">

            <label for="material_name">Material Name/ Course title</label><br>
            <input type="text" style="width:100%;" class="form-control" name="material_name" required autofocus>
            <br>

            <select name="school"class="custom-select" required>
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



            </select><br><br>
            <input list="fac" placeholder="Faculty" class="form-control"  name="faculty" required>
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



            </datalist><br>
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

            </select><br><br>
            <label for="course_code">Course Code</label><br>
            <input type="text" style="width:100%;" class="form-control" name="course_code" required>

            <div class="input_file">
              <label for="material">Upload material</label>
              <input type="file" id="file" name="materialfile" class="js-button-file-upload-input">
            </div>
            <div class="form-check">
              <label for="science">
              <input class="form-check-input" type="radio" name="selection" value="science" required>
                Sciences
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

              <label for="art">
                <input class="form-check-input" type="radio" name="selection"  value="art" required>
                Art
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

              <label for="other"><input class="form-check-input" type="radio" name="selection" value="other" required>
              Others</label>
              </div>
            <center><button class="btn btn-primary" type="submit"><i class="fa fa-share"></i> Share</button></center>
        </form>
        </div>

    </div>
    <?php include("../../php/javascriptlinks.php");?>
  </body>
</html>
<?php $_SESSION["uploadmsg"]=""; $_SESSION["uploadsuccess"]="";?>
