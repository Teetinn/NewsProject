<?php
    session_start();

    unset($_SESSION["id"]);
    unset($_SESSION["userName"]);
    header("Location: ?view=dashboard");
    
?>