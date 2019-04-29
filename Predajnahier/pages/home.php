<?php
	// Set session variables
	//$_SESSION["datumDnes"] = date("l, d.m.Y");

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

<!--úvod box-->
<div class="jumbotron">
  <h1 class="display-3">Máš z čoho vyberať</h1>
  <p class="lead">
V každej našej predajni nájdeš širokú ponuku hraných konzolových hier so zárukou 24 mesiacov. 
Všetky predávané hry sú kontrolované našimi zamestnancami a v prípade potreby sú disky zbavené škriabancov, 
aby sa k tebe dostali v čo najlepšom stave</p>
  <hr class="my-4">
  <h5>
  <ul>
    <li>Tisíce hraných hier so zárukou 24 mesiacov.</li>
    <li>Výkup konzolových hier protiúčtom za iný tovar alebo za hotovosť.</li>
    <li>Výhodné akcie výmena, vďaka ktorým si zaobstaráš novinky už od 1 €.</li>
  </ul><br></p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Prejsť na hry</a>
  </h5>
</div>

<!-- Cards kategorie -->
<div class="card-group">
  <div class="card">
    <img class="card-img-top" src="/images/pc.jpg" alt="PC">
    <div class="card-body">
      <h5 class="card-title">PC</h5>
      <p class="card-text">Hry na počítač - CD/DVD, hry na steam, u-play, epic, origin...</p>
      <p class="card-text"><small class="text-muted"></small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="/images/xbox.jpg" alt="Xbox">
    <div class="card-body">
      <h5 class="card-title">X-Box</h5>
      <p class="card-text">Hry na X-Box 360 alebo X-Box One</p>
      <p class="card-text"><small class="text-muted"></small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="/images/ps.png" alt="PS">
    <div class="card-body">
      <h5 class="card-title">PlayStation</h5>
      <p class="card-text">Hry na PS2, PS3 alebo PS4</p>
      <p class="card-text"><small class="text-muted"></small></p>
    </div>
  </div>
</div>

<!-- boxy - zľavy -->
<br>
<div class="jumbotron">
  <h2 class="display-4">Zľava 45% na bazárovú hru pri predaji 5 a viac hier</h2>
  <p class="lead">Akcia sa vzťahuje iba na hry pre PlayStation 3 a Xbox 360. Je ju možné využiť iba na predajniach a na objednávky cez e-shop s osobným odberom v predajni a platbou v hotovosti. Ponuka platí do odvolania.</p>
</div>
<div class="jumbotron">
  <h3 class="display-4">Zľava 25% na bazárovú hru pri predaji 3 a viac hier</h3>
  <p class="lead">Akcia sa vzťahuje iba na hry pre všetky PlayStation a Xbox. Je ju možné využiť iba na predajniach a na objednávky cez e-shop s osobným odberom v predajni a platbou v hotovosti. Ponuka platí do odvolania.</p>
</div>