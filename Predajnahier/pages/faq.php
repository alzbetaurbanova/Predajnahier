<?php
	// Set session variables
	$_SESSION["datumDnes"] = date("l, d.m.Y");

	$conn->query("SET CHARACTER SET utf8");
	//alebo v xampp/mysql/bin/my.ini   doplnit:
	//[mysqld]
	//character-set-server=utf8
	//collation-server=utf8_slovak_ci

	$sql = "SELECT * FROM games";
	$result = $conn->query($sql);

    if($_GET["hladaj"]) $sql = "SELECT * FROM games WHERE Nazov LIKE '%".$_GET["hladaj"]."%'";	//ak obsahuje hľadaný reťazec
	else $sql = "SELECT * FROM games";
	$result = $conn->query($sql);
?>
<br><br>
<!-- navigácia -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item">
        <h3><a class="nav-link" href="../index.php?link=home.php">Home</a></h3>
      </li>
      <li class="nav-item">
        <h3><a class="nav-link" href="../index.php?link=games.php">Hry</a></h3>
      </li>
      <li class="nav-item">
        <h3><a class="nav-link" href="../index.php?link=faq.php">FAQ</a></h3>
      </li>
      <li class="nav-item">
        <h3><a class="nav-link" href="../index.php?link=login.php">Prihlásenie</a></h3>
      </li>
    </ul>
    <div class="col-md-4">
          <form action="index.php" method="get">
			  <div class="form-row">
				  <div class="col-md-8">
					<input type="text" class="form-control" name="hladaj" placeholder="Zadaj hľadané slovo">
				  </div>
                    <div class="col-md-4">
					<button type="submit" class="btn btn-primary">Hľadať</button>
				  </div>
			  </div>
   
  </div>
</nav>
<br><br> 


 

