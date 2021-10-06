<?php
  if(isset($_GET["view"])) {
    if(strcmp($_GET["view"], "home") == 0) include "controller/home.php";
    else if(strcmp($_GET["view"], "login") == 0) include "controller/login.php";
    else if(strcmp($_GET["view"], "register") == 0) include "controller/register.php";
    else if(strcmp($_GET["view"], "forgotPass") == 0) include "controller/forgotPass.php";
    else echo "<h1>Page NOT FOUND!</h1>";
   } 
  else include "view/home.php";
?>