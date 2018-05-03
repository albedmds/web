<?php
$Email = isset($_POST["Email"])? $_POST["Email"]: "";
$Nom = isset($_POST["Nom"])? $_POST["Nom"]: "";
$Pseudo = isset($_POST["Pseudo"])? $_POST["Pseudo"]: "";
$Mot_de_Passe = isset($_POST["Mot_de_Passe"])? $_POST["Mot_de_Passe"]: "";
$database = "web";
$db_handle = mysqli_connect('localhost','root','');
$db_found = mysqli_select_db($db_handle, $database);
if ($db_found) {
$sql = "INSERT INTO `auteur`(`Email`, `Nom`, `Pseudo`, `Mot de Passe`) VALUES ('$Email','$Nom','$Pseudo','$Mot_de_Passe')";
$result = mysqli_query($db_handle, $sql);
echo "Donnée rentrée.";
}
else {
echo "Database not found.";
}
mysqli_close($db_handle);
?>
