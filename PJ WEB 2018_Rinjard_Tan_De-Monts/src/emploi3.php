<?php
session_start();
$Rechjob = isset($_POST["recj"])? $_POST["recj"]: "";
$database = "prjet_web";
$db_handle = mysqli_connect('localhost','root','');
$db_found = mysqli_select_db($db_handle, $database);
if ($db_found) {
	$sql = "SELECT * FROM `offre_emploi`";
	$result = mysqli_query($db_handle, $sql);
	while($resultat=mysqli_fetch_assoc($result)){
		if ($resultat['Intitule']==$Rechjob){
			echo $_SESSION['Nom_Ent'];
			echo $resultat['Intitule'];
		}
	}
}
else {
	echo "Connexion impossible.";
}
mysqli_close($db_handle);
?>