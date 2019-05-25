<?php 
$premenna = $_POST['ID'];
$sql = "SELECT * FROM games WHERE ID = $premenna";
$result = $conn->query($sql);
//$row = $result->fetch_assoc(); ?>
<?php while($row = $result->fetch_assoc())
{
?>

<div class="jumbotron">
  <h1 class="display-3"><?php echo $row["Nazov"]; ?></h1>
  <p class="lead"><?php echo $row["Popisok"]; ?></p>
  <hr class="my-4">
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