<?php
$Email = isset($_POST["email"])? $_POST["email"]: "";
$database = "prjet_web";
$db_handle = mysqli_connect('localhost','root','');
$db_found = mysqli_select_db($db_handle, $database);
if ($db_found) {
$sql = "SELECT * FROM `personne`";
$result = mysqli_query($db_handle, $sql);
while($resultat=mysqli_fetch_assoc($result)){
if ($resultat['Email']==$Email){
$testconnex=$resultat['Code_Personne'];
}
}
$sql2 = "INSERT INTO `utilisateur`(`Numero_Perso`, `Droit`) VALUES ('$testconnex','Auteur')";
$result2 = mysqli_query($db_handle, $sql2);
header ('Location: web.html');
}
else {
echo "Connexion impossible.";
}
mysqli_close($db_handle);
?>