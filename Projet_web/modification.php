<?php
session_start();
//$id  = $_GET["idPersonne"] ;
$nom = isset($_POST["Nom"])? $_POST["Nom"]: "";
$prenom = isset($_POST["Prenom"])? $_POST["Prenom"]: "";
$pseudo = isset($_POST["Pseudo"])? $_POST["Pseudo"]: "";
$email = isset($_POST["Email"])? $_POST["Email"]: "";
$mdp = isset($_POST["Mdp"])? $_POST["Mdp"]: "";
$connect=$_SESSION['ID'];
$database = "prjet_web";
$db_handle = mysqli_connect('localhost','root','');
$db_found = mysqli_select_db($db_handle, $database);
if ($db_found) {
	$sql = "SELECT * FROM `personne`";
	$result = mysqli_query($db_handle, $sql);
	while($resultat=mysqli_fetch_assoc($result)){
		//if($resultat['Code_Personne']==$id){
		if($resultat['Code_Personne']==$connect){
			$sql2 = "UPDATE `personne` SET `Nom`='$nom',`Prenom`='$prenom',`Pseudo`='$pseudo',`Email`='$email',`Mot_de_passe`='$mdp' WHERE Code_Personne=$connect";
			$result2 = mysqli_query($db_handle, $sql2);
		}
	}
}
?>