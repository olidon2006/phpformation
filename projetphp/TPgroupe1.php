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

      <div class="row">
        <h1>Remplissez le formulaire ci-dessous pour postuler au poste d'expert IT</h1>
      </div>

      <div class="row">
         <form method="post" enctype="multipart/form-data" action="recup.php">

            <div class="mb-3">
               <label for="nom" class="form-label">Nom</label>
              <input type="text" required="required"class="form-control" id="nom" name="nom" placeholder="Votre nom">
            </div>
            <div class="mb-3">
              <label for="prenon" class="form-label">Prénom</label>
              <input type="text" required="required" class="form-control" id="prenom" name="prenom" placeholder="Votre prénom">
            </div>
            <div class="mb-3">
              <label for="adresse" class="form-label">Adresses</label>
              <input type="text" required="required" class="form-control" id="adresse" name="adresse" placeholder="Votre adresse">
            </div>
            <div class="mb-3">
              <label for="telephone" class="form-label">Téléphone</label>
              <input type="text" required="required" class="form-control" id="telephone" name="telephone" placeholder="Votre contact">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="text" required="required" class="form-control" id="email" name="email" placeholder="Votre email">
            </div>
<div class="mb-3">
    <label for="cv" class="form-label">Votre CV (Word, PDF)</label>
    <input class="form-control" required="required" type="file" id="cv" name="cv"> 
  </div>

  <div class="mb-3">
    <label for="diplome" class="form-label">Votre Diplome (PDF)</label>
    <input class="form-control" required="required" type="file" id="diplome" name="diplome">
  </div>
  <div class="mb-3">
    <label for="lm" class="form-label">Votre lettre de motivation</label>
    <textarea class="form-control" id="lm" rows="3" name="lm"> </textarea>
  </div>

  <button type="submit" class="btn btn-success">Postuler</button>
</form>

      </div>

</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
  
  </body>

</html>