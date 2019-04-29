<?php
session_start();//session starts here

?>



<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <title>Login</title>
</head>
<style>
    .login-panel {
        margin-top: 150px;

</style>

<body>


<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Admin prihlasenie</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="get" action="../index.php?link=login.php">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="Meno" name="user" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Heslo" name="pass" type="password" value="">
                            </div>


                                <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" >

                            <!--<a href="index.php" class="btn btn-lg btn-success btn-block">Login</a> -->
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


</body>

</html>

<?php

include("database/db_conection.php");

if(isset($_GET['login']))
{
    $user_email=$_GET['user'];
    $user_pass=$_GET['pass'];

    $check_user="select * from admin WHERE user='$user' AND pass='$pass'";

    $run=mysqli_query($dbcon,$check_user);

    if(mysqli_num_rows($run))
    {
        echo "<script>window.open('welcome.php','_self')</script>";

        $_SESSION['user']=$user;//here session is used and value of $user store in $_SESSION.

    }
    else
    {
        echo "<script>alert('Používate¾ské meno alebo heslo je nesprávne. ')</script>";
    }
}
?>