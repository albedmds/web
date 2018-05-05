<?php
session_start();
$Lieu = isset($_POST["lieu"])? $_POST["lieu"]: "";
$Activite = isset($_POST["act"])? $_POST["act"]: "";
$database = "prjet_web";
$db_handle = mysqli_connect('localhost','root','');
$db_found = mysqli_select_db($db_handle, $database);
if ($db_found) {
$sql = "INSERT INTO `entreprise`(`Adresse_Entreprise`, `Nom_Entreprise`) VALUES ('$Lieu','$Activite')";
$result = mysqli_query($db_handle, $sql);
echo "Offre Ajouté";
}
else {
echo "Connexion impossible.";
}
mysqli_close($db_handle);
?>