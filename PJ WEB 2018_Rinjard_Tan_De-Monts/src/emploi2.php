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
	$sql2 = "SELECT * FROM `entreprise`";
	$result2 = mysqli_query($db_handle, $sql2);
	while($resultat=mysqli_fetch_assoc($result2)){
		if($resultat['Nom_Entreprise']==$Activite){
			$_SESSION['ID_Ent']=$resultat['Code_Entreprise'];
			header ('Location: emploi4.html');
		}
	}
}
else {
	echo "Connexion impossible.";
}
mysqli_close($db_handle);
?>