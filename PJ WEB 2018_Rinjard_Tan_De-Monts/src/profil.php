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
  <body>
  <?php
  session_start();
  $Nom=$_SESSION['Nom']; 
  $Email=$_SESSION['Email'];
  $Pseudo=$_SESSION['Pseudo']; 
  
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
          <li class="active"><a href="web.php">Accueil</a></li>
          <li><a href="reseau.html">Mon réseau</a></li>
          <li><a href="emploi.html">Emplois</a></li>
          <li><form class="navbar-form"  action="recherche.html">
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
              <li><a class="dropdown-item" href="profil.php">Profil</a></li>
              <li><a class="dropdown-item" href="parametre.html">Parametre</a></li>
              <li><a class="dropdown-item" href="deconnexion.php">Se déconnecter</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="row">
    <div class="col-xs-5 col-sm-4 col-md-3 photo "  style="background-color: #e3f2fd;">
      <h1 class="text-center"><?php echo $Nom;?></h1>
      <div class="cadre">
        <img  src="../ressources/image.jpg" width="100%" class="img-circle">
      </div>
      <div class="row" style="height: 30px">
      </div>
      <div class="container-fluid">
        <form enctype="multipart/form-data" action="joindre.php" method="post">
          <fieldset>
            <p>
              <label for="fichier" title="Recherchez le fichier à uploader !">Modifier la photo de profil:</label>
              <input type="hidden" name="MAX_FILE_SIZE">
              <input name="fichier" type="file" id="fichier" />
              <input type="submit" name="submit" value="Changer" />
            </p>
          </fieldset>
        </form>
      </div>
    </div>

    <div class="col-xs-9 col-sm-8 col-md-7 resume" style="background-color: #e3f2fd;">
      <h1 class="text-center">Résumé du profil</h1>
      <p class="publication">
       Je suis un élève ingénieur. J'étudie à l'ECE Paris
     </p>
     <p>
       <label>Pseudo : <?php echo $Pseudo;?> </label>
        <br \>
       <label>Email : <?php echo $Email;?> </label>
     </p>

   </div>
 </section>


 <section class="row">

  <div class="col-xs-5 col-sm-4 col-md-3 contact"    style="background-color: #e3f2fd;">
    <h1 class="text-center">Amis</h1>
    <div class="panel" style="height:500px">

    </div>

  </div>

  <div class="col-xs-9 col-sm-8 col-md-7 cv"    style="background-color: #e3f2fd;">
    <h1 class="text-center">CV</h1>

    <div class="panel" style="height:auto">

      <h3 style ="font-weight : bold"> Formation</h3>
      <p>
        2017 3eme année d’école d’ingénieur ECE (Ecole Centrale d’Electronique) Paris
        • Formation généraliste en 5 ans menant à un diplôme d’ingénieur en 2020
        2017 Heriot-Watt University, Edimbourg (septembre à décembre 2017)
        2015 Lycée Saint Louis de Gonzague – Franklin : Baccalauréat scientifique option mathématiques
        <h3 style ="font-weight : bold">Expérience</h3>
        <h4 style ="font-weight : bold">Projet scolaire :</h4>
        2016-2017 - Projet par équipe : La Flypresso : Création d’une cafetière portable
        - Projet d’informatique : Création d’un jeu sur PC en langage C++
        - Projet d’électronique : utilisation d’une carte VHDL
        2015-2016 - Projet Scientifique et Technique en Equipe (PSTE) : Le SD 200 : Création d’un trépied photographique automatique intelligent
        - Projet d’informatique : Création d’un jeu sur PC en langage C et avec la bibliothèque graphique allegro
        <h4 style ="font-weight : bold">Professionnel :</h4>
        2017 Safran Electronics & Défense Stage d’exécution d’un mois
        • Dans le service support technique de la division avionique
        Etude du banc de test Sigma STE 40, installation de cartes électroniques et de logiciels
        2015-2017 Mission de Street-Marketing chez Globe Group et chez Job Service ECE
        2015 Vendanges pour le Château de Vaurenard à Gleize
        2013 Paragon Identification Stage de deux semaines
        • Découverte du monde de l’entreprise
        <h4 style ="font-weight : bold">Associatif :</h4>
        2013 Association Pierre Claver (5 mois)
        • Alphabétisation aux réfugiés
        Association : SUF (Scout Unitaire de France) :
        2017 Chef assistant Troupe (trésorier), responsable encadrant de 40 jeunes âgés de 12 à 17 ans
        2014-2017 Routier, participation au montage de camps de services et/ou humanitaire sur plan financier, humain et pédagogique.
        • 2017 : Tsakhkadzor, Arménie, budget 8k€ (trésorier)
        • 2015 : Elgin, Ecosse, budget de 3,2k€ (secouriste)
        <h3 style ="font-weight : bold"> Compétences </h3>
        Langue : Anglais : lu, écrit et parlé (IELTS niveau 6)
        Allemand : lu, écrit et parlé (niveau B1)
        Informatique : Suite office, C++, C, VHDL, logiciel photo
        Secourisme : diplôme de PSC1 (prévention et secours civique de niveau 1)
        <h3 style ="font-weight : bold">Intérêt</h3>
        Voyages : Découvrir d’autres cultures et autonomie :
        Echange linguistique : Graz, Cologne, Düsseldorf
        Touristique : Royaume-Uni, Etats-Unis, Allemagne, Italie, Mexique, Israël, Pologne, Maroc
        Sports :
        Équitation, galop 5
      </p>

    </div>

  </div>

</section>

</html>

