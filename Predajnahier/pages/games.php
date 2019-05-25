<?php
    error_reporting(0);

    if(isset($_POST["vyhladaj"])) {
        $vyhladaj = $_POST["hladaj"];
        $sql = "SELECT * FROM games WHERE Nazov LIKE '%".$vyhladaj."%'";
        $result = $conn->query($sql);
    }
    else{
        $sql = "SELECT * FROM games";
        $result = $conn->query($sql);
    }
?>
<div class="row">
<div class="col-sm-9"></div>
<div class="col-sm-3">
<form action="./index.php?link=games.php" method="post">
    <input type="text" name="hladaj" placeholder="Zadaj hľadané slovo">
    <button name="vyhladaj" type="hladanie" class="btn btn-primary">Hľadať</button><br><br>
</form>
</div>
</div>

<div class="row">
<?php while($row = $result->fetch_assoc())
{
	?>
    <div class="col-sm-3">
        <div class="card" style="width: 320px;" style="max-height: 150px">
            <form method="post" action="./index.php?link=hra.php">
                <input type="image" class="card-img-top" width=320px height=320px src="images/produkty/<?php echo $row["Obrazok"]; ?>" class="card-img" alt="obrazok"></a>
                <input hidden placeholder="id" type="text" name="ID" value="<?php echo $row["ID"]; ?>"><br>
            </form>
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

<style>
.container {
  position: relative;
  width: 50%;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: #008CBA;
}

.container:hover .overlay {
  opacity: 1;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
</style>