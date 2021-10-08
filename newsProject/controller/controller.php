<?php
  if(isset($_GET["view"])) {
    if(strcmp($_GET["view"], "dashboard") == 0) include "controller/dashboard.php";
    else if(strcmp($_GET["view"], "login") == 0) include "controller/login.php";
    else if(strcmp($_GET["view"], "register") == 0) include "controller/register.php";
    else if(strcmp($_GET["view"], "forgotPass") == 0) include "controller/forgotPass.php";
    else if(strcmp($_GET["view"], "news") == 0) include "controller/news.php";
    else if(strcmp($_GET["view"], "logout") == 0) include "controller/logout.php";
    else echo "<h1>Page NOT FOUND!</h1>";
   } 
  else include "view/dashboard.php";
?>