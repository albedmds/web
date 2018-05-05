<?php
session_start();
$Offre = isset($_POST["ofj"])? $_POST["ofj"]: "";
$connect=$_SESSION['ID_Ent'];
$database = "prjet_web";
$db_handle = mysqli_connect('localhost','root','');
$db_found = mysqli_select_db($db_handle, $database);
if ($db_found) {
	$sql = "INSERT INTO `offre_emploi`(`Intitule`, `Id_Entreprise`) VALUES ('$Offre','$connect')";
	$result = mysqli_query($db_handle, $sql);
	echo "Offre Ajouté";
}
else {
	echo "Connexion impossible.";
}
mysqli_close($db_handle);
?>