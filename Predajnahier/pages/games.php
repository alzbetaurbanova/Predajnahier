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
                    <input type="hidden" name="link" value="games.php">
					<input type="text" class="form-control" name="hladaj" placeholder="Zadaj hľadané slovo">
				  </div>
                    <div class="col-md-4">
					<button type="submit" class="btn btn-primary">Hľadať</button>
				  </div>
			  </div>
   
  </div>
</nav>
<br><br> 

<div class="row">
<?php while($row = $result->fetch_assoc())
{
	?>
    <div class="col-sm-3">
        <div class="card" style="width: 320px;" style="max-height: 150px">
            <a href="#"><img class="card-img-top" width=320px height=320px src="images/produkty/<?php echo $row["Obrazok"]; ?>" class="card-img" alt="obrazok" ></a>
            <div class="card-body">
            <h5 class="card-title"><?php echo $row["Nazov"]; ?></h5>
            <p class="card-text">Na <?php echo $row["Platforma"]; ?></p>
            <p class="card-text">Cena: <?php echo $row["Cena"]; ?>€</p>
            <p class="card-text"><small class="text-muted"></small></p>
            </div>
        </div>
    </div>
   
        <?php } ?>
</div>

 

