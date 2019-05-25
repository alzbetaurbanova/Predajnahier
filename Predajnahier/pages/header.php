<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="./bootstrap.css" />
        <title>GAMESKY</title>
        <div class="container-fluid" style="width: 75%; margin: 0 auto;">
            <div class="row">   
            <div class="col-md-2"><br><img src="images/logo.png" alt="Logo" title="Logo" width="75%" /></div> 
            <div class="col-md-6"><br><br><h2>GAMESKY - lacnejšie, výhodnejšie</h2></div>
            
        </div>
        <br><br>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item">
        <h3><a class="nav-link" href="./index.php?link=home.php">Home</a></h3>
      </li>
      <li class="nav-item">
        <h3><a class="nav-link" href="./index.php?link=games.php">Hry</a></h3>
      </li>
      <li class="nav-item">
        <h3><a class="nav-link" href="./index.php?link=faq.php">FAQ</a></h3>
      </li>
      <?php if(isset($_SESSION['ID'])) { ?>
      <li class="nav-item">
        <h3><a class="nav-link" href="./index.php?link=pridajhru.php">Pridaj Produkt</a></h3>
      </li>
      <?php } ?>
    </ul>
    <div class="col-md-2">
    <h4><?php if(isset($_SESSION['ID'])){ echo("Vitaj "); echo($_SESSION['username']); ?> <a class="prihlasenie" href="./index.php?link=logout.php">Odhlásenie</a> <?php } 
    else { ?> <a class="prihlasenie" href="./index.php?link=login.php">Prihlásenie</a> <?php } ?></h4>
    <div class="col-md-4"><!--
          <form action="index.php" method="get">
			      <div class="form-row">
				      <div class="col-md-8">
					      <input type="text" class="form-control" name="hladaj" placeholder="Zadaj hľadané slovo">
				      </div>
              <div class="col-md-4">
                <button name="vyhladaj" type="hladanie" class="btn btn-primary">Hľadať</button>
              </div>
          </form>  
			  </div>-->
    </div>
</nav>
<br><br> 
</head>


<body>
<style>
    .prihlasenie{
        color: white;
    }
</style>