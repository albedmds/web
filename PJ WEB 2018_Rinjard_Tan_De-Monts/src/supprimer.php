<?php
session_start();
$id  = $_GET["idPersonne"] ;
$database = "prjet_web";
$db_handle = mysqli_connect('localhost','root','');
$db_found = mysqli_select_db($db_handle, $database);
if ($db_found) {
	$sql = "DELETE FROM `personne` WHERE Code_Personne=$id";
	$result = mysqli_query($db_handle, $sql);
	
	
}
echo "<script>
alert('Suppression faite');
window.location.href='admin.php';  
</script>";
?>