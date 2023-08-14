<?php
    session_start(); 
    session_unset();
    session_destroy();

    $_SESSION["message_success"] = "Successfully Logged Out";
    header("location: index.php");
    exit(0);
?>