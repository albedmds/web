<?php
$Nom = isset($_POST["Nom"])? $_POST["Nom"]: "";
$Prenom = isset($_POST["Prenom"])? $_POST["Prenom"]: "";
$Pseudo = isset($_POST["Pseudo"])? $_POST["Pseudo"]: "";
$Email = isset($_POST["Email"])? $_POST["Email"]: "";
$Mot_de_Passe = isset($_POST["Mdp"])? $_POST["Mdp"]: "";
$CMot_de_Passe = isset($_POST["CMdp"])? $_POST["CMdp"]: "";
$database = "prjet_web";
$db_handle = mysqli_connect('localhost','root','');
$db_found = mysqli_select_db($db_handle, $database);
if ($db_found) {
if($Mot_de_Passe==$CMot_de_Passe){
$sql = "INSERT INTO `personne`( `Nom`, `Prenom`, `Pseudo`, `Email`, `Mot_de_Passe`) VALUES ('$Nom', '$Prenom', '$Pseudo','$Email','$Mot_de_Passe')";
$result = mysqli_query($db_handle, $sql);
echo "Donnée rentrée.";
}
else{
	echo "Mot de Passe différent";
}
}
else {
echo "Donnée non rentrée.";
}
mysqli_close($db_handle);
?>
