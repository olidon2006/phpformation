<?php

/**
 * 1-intégrer boostrap
 *2-créer un formulaire: nom, prenom, adresse,
 *adresse, telephone,
 *email, lettre de motivation (saisir), cv,
 *diplome
 *bouton:postuler (de couleur bleu)
 *recuperer les données et les afficher
 *à lutilisateur
*/


$n= $_POST["nom"];
$p= $_POST["prenom"];
$a= $_POST["adresse"];
$t= $_POST["telephone"];
$m= $_POST["email"];
$lt= $_POST["letrre de motivation"];
$diplome=$_FILE["diplome"];
$cv=$_FILE["cv"];

if(isset$_POST["nom"]||isset$_POST["prenom"]||isset$_POST["adresse"]||isset$_POST["telephone"]||isset$_POST["email"]||isset$_POST["letrre de motivation"]||isset$_FILE["diplome"]||isset$_FILE["cv"]{
$n= $_POST["nom"];
$p= $_POST["prenom"];
$a= $_POST["adresse"];
$t= $_POST["telephone"];
$m= $_POST["email"];
$lt= $_POST["letrre de motivation"];
$diplome=$_FILE["diplome"];
$cv=$_FILE["cv"];

}

else{

echo "Veuillez renseigner toutes les informations";
return
    }



*/
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>MAHOUGBE Coffi Albert!</title>
  </head>
  <body>
  
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    

 







<form method="post"enctype="multipart/form-data" action="#">
        Nom :
       <input type="text" id="nom" name="nom" placeholder="votre nom"/>
       Prenom :
       <input type="text" id="prenom" name="prenom" placeholder="votre prenom"/>
       adresse:
       <input type="text" id="adresse" name="adresse" placeholder="votre adresse"/>
       telephone:
       <input type="text" id="telephone" name="telephone" placeholder="telephone"/>
       email:
       <input type="text" id="email" name="email" placeholder="email"/>
       lettre de motivation:
       <input type="text" id=" lettre de motivation" name=" lettre de motivation" placeholder=" lettre de motivation"/>
       cv:

       <input type="file" id="cv" name="cv" placeholder="selectionner votre cv"/>
       diplome:
       <input type="file" id="diplome" name="diplome" placeholder="selectionner votre diplome"/>
       bouton: postuler
       <input type="file" id="bouton: postuler" name="bouton: postuler" placeholder="postuler"/>
       <textarea name="message"id="message" rows=5></textarea>

       <required= "required"/>
       <input type="submit" name"envoyer"/>
       <div class="container">
  <div class="row">
    <div class="col">
      1 of 2
    </div>
    <div class="col">
      2 of 2
    </div>
  </div>
  <div class="row">
    <div class="col">
      1 of 3
    </div>
    <div class="col">
      2 of 3
    </div>
    <div class="col">
      3 of 3
    </div>
  </div>
</div>
 </form>
 </body>
</html>
