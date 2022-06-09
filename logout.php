<?php
    require 'index.php';
    session_start();
    unset($_SESSION['fb_id']);
    unset($_SESSION['fb_name']);
    unset($_SESSION['fb_email']);
    unset($_SESSION['fb_pic']);
    session_destroy();
    header("Location:index.php");
?>