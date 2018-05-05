<?php
session_start();
$Recherche = isset($_POST["nom"])? $_POST["nom"]: "";
$database = "prjet_web";
$db_handle = mysqli_connect('localhost','root','');
$db_found = mysqli_select_db($db_handle, $database);
$test=" ";
$test2=" ";
if ($db_found) {
$sql = "SELECT * FROM `personne`";
$result = mysqli_query($db_handle, $sql);
while($resultat=mysqli_fetch_assoc($result)){
if ($resultat['Nom']==$Recherche){
$test=$resultat['Nom']." ".$resultat['Prenom'];

}
}
}
else {
echo "Connexion impossible.";
}
echo "<script>
alert('$test');
window.location.href='profil.php';  
</script>";
mysqli_close($db_handle);
?>