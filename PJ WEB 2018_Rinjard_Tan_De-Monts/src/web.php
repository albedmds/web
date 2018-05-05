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
  <?php
  session_start();
  $connect=$_SESSION['Nom'];
  define('MAX_FILE_SIZE', 10000);    
  ?>
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
          <li><form class="navbar-form"  action="recherche.html">
            <div class="input-group" >
              <input type="text" class="form-control" name="nom" id="nom" placeholder="Rechercher">
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
              <li><a class="dropdown-item" href="profil.php">Profil</a></li>
              <li><a class="dropdown-item" href="parametre.html">Parametre</a></li>
              <li><a class="dropdown-item" href="deconnexion.php">Se déconnecter</a></li>
            </ul>
          </li>
        </ul>

      </div>
    </div>
  </nav>

  <div class="col-md-3 post "  style="background-color: #e3f2fd;">
    <h1>Publier</h1>
    <form id="Form"  action="publication.php" method="POST">
      <label for="publication">Ecrivez votre message</label>
      <textarea type="text" name="publication" id="publication" class="form-control"></textarea>
       <button type='submit' class="btn btn-primary">Publier</a></button>
      <div class="row">
        <form enctype="multipart/form-data" action="piecejointe.php" method="post">
          <fieldset>
            <p>

              <label for="publier" title="publication">Ajouter une pièce jointe</label>
              <input type="hidden" name="MAX_FILE_SIZE">
              <input name="fichier" type="file" id="publier" />
              <input type="submit" width="auto" height="28" class="d-inline-block align-top" name="submit" value="Valider" />     
            </p>
          </fieldset>
        </form>
      </div>
    </div>
    <div class="col-md-5 sidebar" style="background-color: #e3f2fd;">
      <h1>Fil d'actualité</h1>
      <p class="publication">
        
       <img src="../ressources/logoece.png" width="auto" height="28" class="d-inline-block align-top">
       : Bonjour, bienvenue sur notre site  <?php echo $connect;?>
     </p>
   </div>
 </div>
 <div class="col-md-3 contact"    style="background-color: #e3f2fd;">
  <h1>Amis</h1>
  <div class="panel" style="height:500px">

  </div>

</div>


</div>

</html>

