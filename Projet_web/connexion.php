<?php
$Email = isset($_POST["Email"])? $_POST["Email"]: "";
$Mot_de_Passe = isset($_POST["Mot_de_Passe"])? $_POST["Mot_de_Passe"]: "";
$database = "ece_connect_base";
$db_handle = mysqli_connect('localhost','root','');
$db_found = mysqli_select_db($db_handle, $database);
$testconnex=false;
if ($db_found) {
$sql = "SELECT * FROM `auteur`";
$result = mysqli_query($db_handle, $sql);
while($resultat=mysqli_fetch_assoc($result)){
if ($resultat['Email']==$Email){
$testconnex=true;
}
else{
$testconnex=false;
}
}
if($testconnex==true){
echo "Connexion établie. Bienvenue!!";
}
else{
echo "Le compte n'existe pas";
}
}
else {
echo "Connexion impossible.";
}
mysqli_close($db_handle);
?>
