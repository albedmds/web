<?php
session_start();
$Lieu = isset($_POST["lieu"])? $_POST["lieu"]: "";
$Activite = isset($_POST["act"])? $_POST["act"]: "";
$database = "prjet_web";
$db_handle = mysqli_connect('localhost','root','');
$db_found = mysqli_select_db($db_handle, $database);
if ($db_found) {
$sql = "SELECT * FROM `entreprise`";
$result = mysqli_query($db_handle, $sql);
while($resultat=mysqli_fetch_assoc($result)){
if ($resultat['Nom_Entreprise']==$Activite){
echo $resultat['Adresse_Entreprise'];
echo $resultat['Nom_Entreprise'];
}
}
}
else {
echo "Connexion impossible.";
}
mysqli_close($db_handle);
?>