<html>
<head>
  <title>modification de données en PHP :: partie2</title>
</head>
<body>
  <?php
  $database = "prjet_web";
  $db_handle = mysqli_connect('localhost','root','');
  $db_found = mysqli_select_db($db_handle, $database);
  $id  = $_GET["idPersonne"]; 
  if ($db_found) {

    $sql = "SELECT * FROM personne
    WHERE Code_Personne = ".$id ;
    
    $requete = mysqli_query($db_handle, $sql);
    
  //affichage des données a l'aide de fetch
    if($result=mysqli_fetch_assoc($requete)){
      
      ?>
      <form name="insertion" action="modif2.php" method="POST">
        <input type="hidden" name="id" value="<?php echo($id) ;?>">
        <table border="0" align="center" cellspacing="2" cellpadding="2">
          <tr align="center">
            <td>Nom</td>
            <td><input type="text" name="nom" value="<?php echo($result['Nom']) ;?>"></td>
          </tr>
          <tr align="center">
            <td>Prenom</td>
            <td><input type="text" name="prenom" value="<?php echo($result['Prenom']) ;?>"></td>
          </tr>
          <tr align="center">
            <td>Pseudo</td>
            <td><input type="text" name="pseudo" value="<?php echo($result['Pseudo']) ;?>"></td>
          </tr>
          <tr align="center">
            <td>Email</td>
            <td><input type="text" name="email" value="<?php echo($result['Email']) ;?>"></td>
          </tr>
          <tr align="center">
            <td>Mot de passe</td>
            <td><input type="text" name="mdp" value="<?php echo($result['Mot_de_passe']);?>"></td>
          </tr>
          <tr align="center">
            <td colspan="2"><input type="submit" value="modifier"></td>
          </tr>
        </table>
      </form>
      <?php
  }//fin if 
}
?>
</body>
</html>