<?php
session_start();
$Publication = isset($_POST["publication"])? $_POST["publication"]: "";
$date= date("Y-m-d");
$connect=$_SESSION['ID'];
$database = "prjet_web";
$db_handle = mysqli_connect('localhost','root','');
$db_found = mysqli_select_db($db_handle, $database);
if ($db_found) {
$sql = "INSERT INTO `media`(`Donnee_Media`, `Id_Perso_Publieur`, `Type_Media`, `Horaire_Publication`) VALUES ('$Publication','$connect','Texte','$date')";
$result = mysqli_query($db_handle, $sql);
echo "Publication faite";
}
else {
echo "Connexion impossible.";
}
mysqli_close($db_handle);
?>