<?php
// Constantes
define('TARGET', '../ressources/');    // Repertoire cible
define('MAX_SIZE', 1000000);    // Taille max en octets du fichier
define('WIDTH_MAX', 1500);    // Largeur max de l'image en pixels
define('HEIGHT_MAX', 1500);    // Hauteur max de l'image en pixels
// Tableaux de donnees
$tabExt = array('jpg','gif','png','jpeg');    // Extensions autorisees
$infosImg = array();

// Variables
$extension = '';


if( !empty($_FILES['fichier']['name']) )
{
    // Recuperation de l'extension du fichier
  $extension  = pathinfo($_FILES['fichier']['name'], PATHINFO_EXTENSION);

    // On verifie l'extension du fichier
  if(in_array(strtolower($extension),$tabExt))
  {
      // On recupere les dimensions du fichier
    $infosImg = getimagesize($_FILES['fichier']['tmp_name']);

      // On verifie le type de l'image
    if($infosImg[2] >= 1 && $infosImg[2] <= 14)
    {
      // Parcours du tableau d'erreurs
      if(isset($_FILES['fichier']['error']) 
        && UPLOAD_ERR_OK === $_FILES['fichier']['error'])
      {
        // On renomme le fichier pour remplacer l'ancien
        $nomImage ='image.png';

            // Si c'est OK, on teste l'upload
        if(move_uploaded_file($_FILES['fichier']['tmp_name'], TARGET.$nomImage))
        {
          $message = 'Upload réussi !';
        }
        else
        {
              // Sinon on affiche une erreur systeme
          $message = 'Problème lors de l\'upload !';
        }
      }
      else
      {
        $message = 'Une erreur interne a empêché l\'uplaod de l\'image';
      }
    }
    else
    {
        // Sinon erreur sur le type de l'image
      $message = 'Le fichier à uploader n\'est pas une image !';
    }
  }
  else
  {
      // Sinon on affiche une erreur pour l'extension
    $message = 'L\'extension du fichier est incorrecte !';

  }
}
else
{
    // Sinon on affiche une erreur pour le champ vide
  $message = 'Veuillez remplir le formulaire svp !';
}
echo "<script>
alert('$message');
window.location.href='profil.html';  
</script>";

?>