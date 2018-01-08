<?php

echo "<nav class=\"navbar navbar-dark bg-dark nav\">
<a class=\"navbar-brand\" href=\"../\">

Studi<span style=\"color:red;font-weight:bold;\">HUB</span><!--<i class=\"fa fa-play-circle \" aria-hidden=\"true\">--></i>
</a>
<a class=\"ml-auto usericonlink\" style=\"color:white; margin-right: 2px;\"
data-toggle=\"collapse\"
 data-target=\"#userContent\"
aria-controls=\"userContent\"
aria-expanded=\"false\"
aria-label=\"Toggle navigation\">
  <i class=\"fa fa-user-o\" ></i>
</a>
<button class=\"navbar-toggler\" style=\"border:none;\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarToggleExternalContent\" aria-controls=\"navbarToggleExternalContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
     <span class=\"navbar-toggler-icon\"></span>
   </button>

 </nav>";
 echo "<div class=\"collapse userContent\" id=\"userContent\">
   <ul class=\"nav-link Userdropdown\">";
     if (@$_SESSION["id"]) {
 echo "<li class=\"list-group-item\"><a href=\"users/profile/\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i><span class=\"lists\"> My Profile</span></a>";
 echo "<li class=\"list-group-item\"><a href=\"../php/logout.php\"><i class=\"fa fa-user-o\" aria-hidden=\"true\"></i><span class=\"lists\"> Logout</span></a>";

     }
       else {
           echo "  <li class=\"list-group-item\"><a href=\"login\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i><span class=\"lists\"> Login</span></a>";
           echo "  <li class=\"list-group-item\"><a href=\"signup\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i><span class=\"lists\"> Sign Up</span></a>";
       }


          echo "<ul>";
 echo "</div>";

 ?>
