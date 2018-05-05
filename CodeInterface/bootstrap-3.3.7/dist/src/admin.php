<!DOCTYPE html>
<html lang="fr">
<head>
  <title>ECE Connect</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../css/bootstrap.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.js"></script>
  <script src="../js/bootstrap.js"></script>
</head>

<body>
  <nav class="navbar navbar-light" style="background-color: #e3f2fd;"  role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand">
          <img src="../ressources/logoece.png" width="auto" height="28" class="d-inline-block align-top">
        </a>
      </div>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="nav navbar-nav">
          <li class="active"><a href="web.html">Accueil</a></li>
          <li><a href="reseau.html">Mon réseau</a></li>
          <li><a href="emploi.html">Emplois</a></li>
          <li><form class="navbar-form"  action="#">
            <div class="input-group" >
              <input type="text" class="form-control" placeholder="Rechercher">
              <div class="input-group-btn">
                <button class="btn btn-default" type="submit">
                  <i class="glyphicon glyphicon-search"></i></button>
                </button>
              </div>
            </div>
          </form></li>
          <li><a href="messages.html">Messages</a></li>
          <li><a href="notification.html">Notification</a></li>
          <li class="nav-dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Vous
            <span class="caret"></span></a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="profil.html">Profil</a></li>
              <li><a class="dropdown-item" href="parametre.html">Parametre</a></li>
              <li><a class="dropdown-item" href="deconnexion.php">Se déconnecter</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<?php
session_start();
$connect=$_SESSION['ID'];
$database = "prjet_web";
$db_handle = mysqli_connect('localhost','root','');
$db_found = mysqli_select_db($db_handle, $database);
if ($db_found) {
	$sql = "SELECT * FROM `personne`";
	$result = mysqli_query($db_handle, $sql);
	echo("<div align=\"center\" class=\"jumbotron\" style=\"background-color:#e3f2fd;\">"."<h2>Table des utilisateurs</h2>"." <br \>"."<h3>Code_Personne | Nom | Prenom | Pseudo | Email | Mot_de_passe</h3>"."<br \><br \>"." <a href=\"ajouter.php\" class=\"btn btn-default\">ajouter</a></div>"   );
	while($resultat=mysqli_fetch_object($result)){
		echo(
           "<div align=\"center\" class=\"jumbotron\" style=\"background-color:#e3f2fd;\">"
           .$resultat->Code_Personne."  ".$resultat->Nom." ".$resultat->Prenom." ".$resultat->Pseudo." ".$resultat->Email." ".$resultat->Mot_de_passe." "
           ." <a href=\"modification.php?idPersonne=".$resultat->Code_Personne."\" class=\"btn btn-default\">modifier</a>"."    "
           ." <a href=\"supprimer.php?idPersonne=".$resultat->Code_Personne."\" class=\"btn btn-default\">supprimer</a></div>"          
       ) ;		
	}	
}
?>

