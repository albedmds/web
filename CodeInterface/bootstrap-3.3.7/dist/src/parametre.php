<?php
session_start();
$connect=$_SESSION['ID'];
$database = "prjet_web";
$db_handle = mysqli_connect('localhost','root','');
$db_found = mysqli_select_db($db_handle, $database);
$testdroit=false;
if ($db_found) {
	$sql = "SELECT Droit FROM `utilisateur`WHERE Numero_Perso = '$connect'";
	$result = mysqli_query($db_handle, $sql);
		echo "<script>
		alert('Autorisation Administrateur');
		window.location.href='admin.php';  
		</script>";
}

mysqli_close($db_handle);
?>
