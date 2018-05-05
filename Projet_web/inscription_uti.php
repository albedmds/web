<?php
session_start();
$connect=$_SESSION['ID'];
$database = "prjet_web";
$db_handle = mysqli_connect('localhost','root','');
$db_found = mysqli_select_db($db_handle, $database);
if ($db_found) {
$sql = "INSERT INTO `utilisateur`(`Numero_Perso`, `Droit`) VALUES ('$connect','Auteur')";
$result2 = mysqli_query($db_handle, $sql);
echo "Connexion établie. Bienvenue!!";
}
else {
echo "Connexion impossible.";
}
mysqli_close($db_handle);
?>