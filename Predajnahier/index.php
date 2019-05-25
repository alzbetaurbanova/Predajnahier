<?php
include 'session.php';
include 'pages/header.php';
include 'connect.php';

if (isset($_POST['login'])) include 'pages/login.php';
else if($_GET["link"]) include 'pages/'.$_GET["link"];
else include 'pages/home.php';

include 'pages/footer.php';

?>