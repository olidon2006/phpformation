
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Bienvenue sur le site du CDSP</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Accueil</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></Apropos>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Apropos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Recrutement</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Services
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Formation</a></li>
            <li><a class="dropdown-item" href="#">Technique</a></li>
            <li><hr class="dropdown-divider">Annonce</li>
            <li><a class="dropdown-item" href="#">Autre</a></li>
            </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Anonnce</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Administration</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Rechercher">
        <button class="btn btn-outline-success" type="submit">Rechercher</button>
      </form>
    </div>
  </div>
</nav>
    <h1>Remplissez le formulaire ci-dessous pour postuler au poste d'expert IT</h1>
    <form>
    <div class="container">
    <div class="row">
        
    <form method="post"enctype="multipart/form-data" action="recup.php">
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
      
     

 </form>
    </label>
</div>
  <button type="postuler" class="btn btn-primary">postuler</button>
  </div>
</form>



<div class="row align-items-center" style="height:100vh">
        <form method="post" action="" class="card p-5 col-md-6 offset-md-3"  enctype="multipart/form-data">
            <h3 align="center">Ajouter un employer</h3>
            <div class="mb-3">
                <label for="nom" class="form-label">Nom </label>
                <input type="text" class="form-control" name="nom" id="nom" aria-describedby="emailHelp" required="required">
            </div>

            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom </label>
                <input type="text" class="form-control" name="prenom" id="prenom" aria-describedby="emailHelp" required="required">
            </div>

            <div class="mb-3">
                <label for="matricule" class="form-label">Matricule </label>
                <input type="text" class="form-control" name="matricule" id="matricule" aria-describedby="emailHelp" required="required">
            </div>

            <div class="mb-3">
                <label for="poste" class="form-label">Poste </label>
                <input type="text" class="form-control" name="poste" id="poste" aria-describedby="emailHelp" required="required">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email </label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" required="required">
            </div>

            <div class="mb-3">
                <label for="naissance" class="form-label">Date de naissance </label>
                <input type="date" value="1990-06-01" class="form-control" name="naissance" id="naissance" aria-describedby="emailHelp" required="required">
            </div>

            <div class="form-group mb-3">
              <label for="biblio">Biblio</label>
              <textarea class="form-control" id="biblio" name="biblio" rows="5" required="required"></textarea>
            </div>

            <div class="mb-3">
              <label for="photo" class="form-label">Votre photo (word, PDF)</label>
              <input class="form-control" type="file" id="photo" name="photo" accept=".png,.jpeg,.jpg"  required="required">
            </div>


            <button type="submit" class="btn btn-primary" name="createemp">Enregistrer</button>


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