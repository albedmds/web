<?php
$Email = isset($_POST["Email"])? $_POST["Email"]: "";
$Mot_de_Passe = isset($_POST["Mdp"])? $_POST["Mdp"]: "";
$database = "prjet_web";
$db_handle = mysqli_connect('localhost','root','');
$db_found = mysqli_select_db($db_handle, $database);
$testconnex=false;
if ($db_found) {
$sql = "SELECT * FROM `personne`";
$result = mysqli_query($db_handle, $sql);
while($resultat=mysqli_fetch_assoc($result)){
if (($resultat['Email']==$Email)&&($resultat['Mot_de_passe']==$Mot_de_Passe)){
$testconnex=true;
}
}
if($testconnex==true){
echo "Connexion établie. Bienvenue!!";
}
else {
echo "Connexion impossible, Identifiant ou Mot de Passe incorrect.";
}
}
else {
echo "Connexion impossible.";
}
mysqli_close($db_handle);
?>
