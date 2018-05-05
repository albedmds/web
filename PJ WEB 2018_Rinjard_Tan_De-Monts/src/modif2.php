<?php
$nom     = $_POST["nom"] ;
$prenom = $_POST["prenom"] ;
$pseudo = $_POST["pseudo"] ;
$email        = $_POST["email"] ;
$mdp        = $_POST["mdp"] ;
$id         = $_POST["id"] ;
$database = "prjet_web";
$db_handle = mysqli_connect('localhost','root','');
$db_found = mysqli_select_db($db_handle, $database);
if ($db_found) {
  $sql = "UPDATE personnes
  SET Nom         = '$nom', 
  Prenom     = '$prenom',
  Pseudo    = '$pseudo',
  Email           = '$email',
  Mot_de_passe = '$mdp'
  WHERE Code_Personne = '$id' " ;
  $requete = mysqli_query($db_handle, $sql); 
  if($requete)
  {
    echo "<script>
    alert('La modification à été correctement effectuée');
    window.location.href='admin.php';  
    </script>";
  }
  else
  {
    echo "<script>
    alert('La modification a échouée');
    window.location.href='admin.php';  
    </script>";
  }
}
mysqli_close($db_handle);
?>