<?php
//safety
checklogin();
//Nevypisovanie notice-u
error_reporting(0);
$target_dir = "images/produkty/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    // Sem pride dalsi kod pre formular
    $nazovhry = $_POST['nazovhry'];
    $popisok = $_POST['popisok'];
    $platforma =$_POST['platforma'];
    $typ = $_POST['typ'];
    $cena = $_POST['cena'];
    $obrazok = basename($_FILES["fileToUpload"]["name"]);
    $sql = "INSERT INTO games (ID, Nazov, Popisok, Obrazok, Platforma, Typ, Cena) VALUES (NULL, '$nazovhry','$popisok','$obrazok','$platforma','$typ','$cena')";
    $result = mysqli_query($conn, $sql);
    if($result)
    {
        echo("Produkt vytvorený.");
    }
    else
    {
        echo("Chyba! Produkt nevytvorený!");
    }
}
?>
<body>

<form action="./index.php?link=pridajhru.php" method="post" enctype="multipart/form-data">
    Názov hry:<br>
    <input placeholder="max 30 znakov" type="text" name="nazovhry" required autofocus><br>
    Popisok:<br>
    <input placeholder="max 10 000 znakov" type="text" name="popisok" required><br>
    Platforma:<br>
    <select name="platforma" required>
        <option value="PC">PC</option>
        <option value="XBOX ONE">XBOX ONE</option>
        <option value="XBOX 360">XBOX 360</option>
        <option value="PS4">PS4</option>
        <option value="PS3">PS3</option>
        <option value="Nintendo">Nintendo</option>
        <option value="Android">Android</option>
    </select><br>
    Typ:<br>
    <select name="typ" required>
        <option value="Steam">Steam</option>
        <option value="CD">CD</option>
        <option value="Uplay">Uplay</option>
        <option value="Origin">Origin</option>
        <option value="Epic Store">Epic Store</option>
        <option value="Key">Key</option>
    </select><br>
    Cena:<br>
    <input type="range" min="1" max="100" value="20" class="slider" id="myRange" name="cena" required>
    <span id="demo"></span><br>
    Vyber obrázok produktu:
    <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
    <input type="submit" value="Vložiť produkt" name="submit">
</form>

</body>
<script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");

output.innerHTML = slider.value; 
slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>