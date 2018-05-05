<?php
session_start();
$id  = $_GET["idPersonne"] ;
$database = "prjet_web";
$db_handle = mysqli_connect('localhost','root','');
$db_found = mysqli_select_db($db_handle, $database);
if ($db_found) {
	$sql = "SELECT * FROM `personne`";
	$result = mysqli_query($db_handle, $sql);
	while($resultat=mysqli_fetch_object($result)){
		if($resultat['Code_Personne']==$id){
			$sql2 = "DELETE FROM `personne` WHERE Code_Personne=$id";
			$result = mysqli_query($db_handle, $sql2);
		}
	}
}
?>