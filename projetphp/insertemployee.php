<?php
session_start();
/***
 * 
 **/
if(!isset($_SESSION["user"])){
    header('Location: login.php');   
    return;  
}

try
{
	$db = new PDO(
        'mysql:host=localhost;port=3308;dbname=cdsp_db;charset=utf8',
        'root',
        ''
    );
}
catch (Exception $e)
{
        die('Impossible de se connecter, erreur : ' . $e->getMessage());
}

//var_dump($_SESSION["user"]);
if(isset($_POST["createemp"])){
  if (!isset($_POST['nom']) || !isset($_POST['prenom']) || !isset($_POST['email'])  || !isset($_POST['matricule']) || !isset($_POST['naissance'])   || !isset($_POST['poste'])  || !isset($_POST['biblio'])  || !isset($_FILES['photo']) || $_FILES['photo']['error'] > 0)
{
	$error = "Rassurez-vous de fournir Toutes les informations";
    return;
}
else{

  //var_dump($_FILES['photo']);
  // Testons si l'extension est autorisée
  $fileInfo = pathinfo($_FILES['photo']['name']);
  //var_dump($fileInfo);
  $extension = $fileInfo['extension'];
  $allowedExtensions = ['jpg', 'png', 'jpeg'];
  if (!in_array($extension, $allowedExtensions))
  {
    echo("Extension non autorisée");
    return;
  }
    // valider le fichier et le stocker définitivement
    move_uploaded_file($_FILES['photo']['tmp_name'], strip_tags('photos/' . basename($_FILES['photo']['name'])));
    $photo =  strip_tags('photos/' . basename($_FILES['photo']['name']));
    $nom = strip_tags($_POST['nom']);
    $prenom = strip_tags($_POST['prenom']);
    $email = strip_tags($_POST['email']);
    $matricule = strip_tags($_POST['matricule']);
    $naissance = new DateTime(strip_tags($_POST['naissance']));
    $poste = strip_tags($_POST['poste']);
    $biblio = strip_tags($_POST['biblio']);

    $querry = 'INSERT INTO employees(nom, prenom, matricule, naissance, email, poste, biblio, photo) VALUES (:nom, :prenom, :matricule, :naissance, :email, :poste, :biblio, :photo)';

    $insertrow = $db->prepare($querry);

    $insertrow->execute([
            "nom"=>$nom,
            "prenom" => $prenom, 
            "matricule" => $matricule, 
            "naissance"=>$naissance->format('Y-m-d'), 
            "email"=>$email, 
            "poste"=>$poste,
            "biblio"=>$biblio,
            "photo"=>$photo,
    ]);

    echo '
    
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="..." class="rounded me-2" alt="...">
      <strong class="me-auto">Bootstrap</strong>
      <small>11 mins ago</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      Hello, world! This is a toast message.
    </div>
  </div>
    
    ';

   // $req=$db->prepare('INSERT INTO users (email, name, password) VALUES (:email, :name, :password)');
    //$req->execute(array(':email' => $email, ':name' => $name, ':password' => $pass));
    $notif = "Employée créée";
    $_SESSION['notif'] = $notif;



}



  }


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if(!$_SESSION["user"]["is_staff"]) echo "disabled"?>" href="insertemployee.php">Ajouter un employer</a>
        </li>


    </ul>
      <!--form class="d-flex ">
        <input class="form-control me-2" type="search" placeholder="Nom de l'employer" aria-label="Search">
        <button class="btn btn-outline-warning" type="submit">Rechercher</button>
      </form-->      
      <form class="d-flex" method="post" action="logout.php">
        <button class="btn btn-outline-danger" type="submit" nmae="logout">Deconnexion</button>
      </form>
    </div>
  </div>
</nav>

<div class="container py-5">
  <div>
  <?php if(isset($_SESSION['notif'])): ?>

  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Congratulations!</strong> <?php if(isset($_SESSION['notif']) && ($_SESSION['notif']) != "") {echo $_SESSION['notif']; $_SESSION['notif'] = null;} ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <?php endif; ?>

  <?php if(isset($_SESSION['erreur'])): ?>

  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Damn!</strong> <?php if(isset($_SESSION['erreur'])){ echo $_SESSION['erreur']; $_SESSION['erreur'] = null;} ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <?php endif; ?>

</div>


  <!--div>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Congratulations!</strong> <?php if(isset($_SESSION['notif']) && ($_SESSION['notif']) != "") {echo $_SESSION['notif']; $_SESSION['notif'] = null;} ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Damn!</strong> <?php if(isset($_SESSION['erreur'])){ echo $_SESSION['erreur']; $_SESSION['erreur'] = null;} ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

</div-->


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