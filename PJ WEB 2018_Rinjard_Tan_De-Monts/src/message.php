<?php
session_start();
$Destinataire = isset($_POST["dest"])? $_POST["dest"]: "";
$Message = isset($_POST["mes"])? $_POST["mes"]: "";
$date= date("Y-m-d");
$connect=$_SESSION['ID'];
$database = "prjet_web";
$db_handle = mysqli_connect('localhost','root','');
$db_found = mysqli_select_db($db_handle, $database);
if ($db_found) {
	$sql = "SELECT * FROM `personne`";
	$result = mysqli_query($db_handle, $sql);
	while($resultat=mysqli_fetch_assoc($result)){
		if ($resultat['Nom']==$Destinataire){
			$connect2=$resultat['Code_Personne'];
		}
	}
	$sql2 = "INSERT INTO `message`(`Horaire_Envoi`, `Id_Perso_1M`, `Id_Perso_2M`, `Donnee_Message`) VALUES ('$date','$connect','$connect2','$Message')";
	$result2 = mysqli_query($db_handle, $sql2);
//header ('Location: web.html');
	echo "<script>
	alert('message envoye');
	window.location.href='messages.html';  
	</script>";
}
else {
	echo "Connexion impossible.";
}
mysqli_close($db_handle);
?>