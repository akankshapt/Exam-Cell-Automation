<?php
session_start();
if(!(isset($_SESSION['email'])))
{
    echo "<script>";
echo 'window.location.href="index.php";';
echo "</script>";


    }
?>