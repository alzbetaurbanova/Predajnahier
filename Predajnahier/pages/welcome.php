<?php
session_start();

if(!$_SESSION['user'])
{

    header("Location: login.php");//redirect to login page to secure the welcome page without login access.
}

?>


<h1>Vitajte</h1><br>
<?php
echo $_SESSION['user'];
?>


<h1><a href="logout.php">Odhlasenie</a> </h1>



