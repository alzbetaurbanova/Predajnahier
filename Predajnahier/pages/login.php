<?php
if (isset($_POST['login'])) {
    $myusername = $_POST['username'];
    $mypassword = $_POST['password'];
    $sql = "SELECT id FROM user WHERE meno = '$myusername' and heslo = '$mypassword'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];
    $count = mysqli_num_rows($result);
    if($count == 1) {
        $_SESSION['username'] = $myusername;
        $_SESSION['ID'] = $row['id'];
        header("location: index.php?link=home.php");
        $smsg = "Používateľ prihlásený!";
    }else {
        $fmsg = "Vaše prihlasovacie meno alebo heslo niesú správne";
    }
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Admin prihlásenie</h3>
                </div>
                <div class="panel-body">
                    <form role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="Meno" name="username" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Heslo" name="password" type="password" value="">
                            </div>
                                <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" >
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
<body>
</body>

</html>