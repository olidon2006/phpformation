<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Bienvenu sur le site du CDSP</title>
  </head>

  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="logo"> 
    <a class="navbar-brand" href="#"><img scr="Logo.png" alt="" width="50" height="50"/></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">A propos</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Formation</a></li>
            <li><a class="dropdown-item" href="#">Techniques</a></li>
            <!--li><hr class="dropdown-divider"></li-->
            <li><a class="dropdown-item" href="#">Materiels</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link">Recrutement<a>
        </li>
        <li class="nav-item">
          <a class="nav-link">Annonces<a>
        </li>
        <li class="nav-item">
          <a class="nav-link">Administration<a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Recherche" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Recherche</button>
      </form>
    </div>
  </div>
</nav>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    <div class="container"> 

<?php
if(isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["telephone"]) && isset($_POST["adresse"]) && isset($_POST["lm"])  && isset($_FILES["cv"]) && isset($_FILES["diplome"])){
//echo "jai recu les données";

//var_dump ($_FILES["cv"])."<br>";
//var_dump ($_FILES["diplome"])."<br>";

 // Testons si l'extension est autorisée
 $fileInfocv = pathinfo($_FILES['cv']['name']);
 $fileInfodiplome = pathinfo($_FILES['diplome']['name']);

 // array qui contient des infos du Cv et diplome
//var_dump($fileInfocv);
//var_dump($fileInfodiplome);

// recuperer les extenxionx
$extensioncv = $fileInfocv['extension'];
$extensiondiplome = $fileInfodiplome['extension'];

// Liste des extensions autorisées
$alloweddiplomeExtensions = ['pdf', 'doc', 'docx', 'jpg', 'jpeg'];
if (! in_array($extensioncv, $alloweddiplomeExtensions)){
    echo 'extenxion CV non autorisée';
    return;

}
if (! in_array($extensiondiplome, $alloweddiplomeExtensions)){
    echo 'extenxion diplome non autorisée';
    return;

}
 // valider le fichier et le stocker définitivement
 move_uploaded_file($_FILES['cv']['tmp_name'],'cvs/' . basename($_FILES['cv']['name']));
 move_uploaded_file($_FILES['diplome']['tmp_name'],'diplomes/' . basename($_FILES['diplome']['name']));

 try
 {
     $db = new PDO(
         'mysql:host=localhost;dbname=cdsp_db;charset=utf8',
         'root',
         ''
     );
 }
 catch (Exception $e)
 {
         die('Impossible de se connecter, erreur : ' . $e->getMessage());
 }
 echo $Nom

 ?> 
<h1> Votre dossier de candidature a été enregistré ! </h1><hr>
<h5><b>Récapitulatif </b></h5>
<?php
echo "<b>Nom :</b>"."  " .$_POST["nom"]."<br>";
echo "<b>Prénom :</b>"."  " .$_POST["prenom"]."<br>";
echo "<b>Téléphone :</b>"."  " .$_POST["telephone"]."<br>";
echo "<b>Adresse :</b>"."  " .$_POST["adresse"]."<br>";
echo "<b>Votre Motivation :</b>"."  " .$_POST["lm"]."<br>";
?>
<b>Votre CV :</b> 
    <a href="cvs/<?php echo $_FILES["cv"]["name"] ?>">Telecharger votre CV ici</a><br>
<b>Votre diplôme :</b>
    <a href="diplomes/<?php echo $_FILES["diplome"]["name"] ?>" target="_blank">Telecharger votre diplome ici</a><br>
<?php
}
else{
    echo "veuillez renseigner toutes les informations";
    return;
}
?> 

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</div>
  </body>

</html>