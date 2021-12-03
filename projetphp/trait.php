<?php
/**+
 * Boostrap form
 * Differents éléments du formulaire
 * Attributs "name"
 */

 /**+
  * 1- intégrer boostrap
  * 2- Créer un formulaire: nom, prenom,
  * adresse, téléphone,
  * email, lettre de motivation(saisir), cv,
  * diplome,
  * Postuler (de couleur Rouge)
  * Récuperer les données et les afficher à l'utilisateur
  */

  $nom=$_POST["nom"];
  $prenom=$_POST["prenom"];
  $telephone=$_POST["telephone"];
  $adresse=$_POST["adresse"];
  $email=$_FILES["cv"];
  $diplome=$_FILES["diplome"];

if(isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["telephone"]) && isset($_POST["adresse"]) && isset($_FILES["cv"]) && isset($_FILES["diplome"]))  {
    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"];
    $telephone=$_POST["telephone"];
    $adresse=$_POST["adresse"];
    $email=$_FILES["cv"];
    $diplome=$_FILES["diplome"];
    
    var_dump($_FILES['cv']);
    var_dump($_FILES['diplome']);

 // Testons si l'extension est autorisée
 $fileInfocv = pathinfo($_FILES['cv']['name']);
 $fileInfodiplome = pathinfo($_FILES['diplome']['name']);

 // array qui contient des infos du Cv et diplome
var_dump($fileInfocv);
var_dump($fileInfodiplome);

// recuperer les extenxionx
$extensioncv = $fileInfocv['extension'];
$extensiondiplome = $fileInfodiplome['extension'];

// Liste des extensions autorisées
$allowedcvExtensions = ['pdf', 'doc', 'docx'];
$alloweddiplomeExtensions = ['pdf', 'doc', 'docx'];

if (!in_array($extensioncv, $allowedcvExtensions)){
    echo("Extention non autorisée");	
    return;
}
if (!in_array($extensiondiplome, $alloweddiplomeExtensions))
 {
    echo("Extention non autorisée"); 
    return;
}

      // valider le fichier et le stocker définitivement
      move_uploaded_file($_FILES['cv']['tmp_name'],'cvs/' . basename($_FILES['cv']['name']));
      move_uploaded_file($_FILES['diplome']['tmp_name'],'diplomes/' . basename($_FILES['diplome']['name']));

}
else{
    echo "éveuillew sqijhhj";
    return;
}

  ?>