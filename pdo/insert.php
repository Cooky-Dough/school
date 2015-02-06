<?php

$db = new PDO('mysql:host=localhost;dbname=restaurant', 'root', '');

echo $_POST['gerechten'];
echo $_POST['aantal'];

$sql = "INSERT INTO bestelde_gerechten(voedsel_ID, voedsel_AANTAL)
  VALUES ('".$_POST['gerechten']."','".$_POST['aantal']."')";


?>