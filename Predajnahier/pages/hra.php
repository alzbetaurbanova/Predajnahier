<?php 
$premenna = $_POST['ID'];
$sql = "SELECT * FROM games WHERE ID = $premenna";
$result = $conn->query($sql);
//$row = $result->fetch_assoc(); ?>
<?php while($row = $result->fetch_assoc())
{
?>
<!-- Výpis informácií z databázy na stránku -->
<div class="jumbotron">
<div class="row">
<div class="col-sm-11">
  <h1 class="display-3"><?php echo $row["Nazov"]; ?></h1><br> 
        <p class="lead"><?php echo $row["Popisok"]; ?></p><br>
        <center><img src="images/produkty/<?php echo $row["Obrazok"]; ?>" alt="obrazok"></img></center>
    <hr class="my-4">
</div>
</div>
  <h5>
  <p>
    Platforma: <?php echo $row["Platforma"]; ?><br>
    Typ: <?php echo $row["Typ"]; ?><br>
    Cena: <?php echo $row["Cena"]; ?>€<br>
  </p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="./index.php?link=kupit.php" role="button">Kúpiť</a>
  </h5>
</div>

<?php } ?>