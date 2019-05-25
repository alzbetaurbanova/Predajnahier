<?php
    session_start();
    $_SESSION["datumDnes"] = date("l, d.m.Y");

    function checklogin()
    {
        if(!isset($_SESSION['ID'])) header("location: ../index.php");
    }
?>