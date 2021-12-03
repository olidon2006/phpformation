<?php
session_start();
/***
 * 
 **/
if(!isset($_SESSION["user"])){
    header('Location: login.php');   
    return;  
}

//var_dump($_SESSION["user"]);

  
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

$empstsmt = $db->prepare('SELECT * FROM employees');
$empstsmt->execute();
$employees = $empstsmt->fetchAll();


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

        <li class="nav-item">
          <a class="nav-link <?php if(!$_SESSION["user"]["is_staff"]) echo "disabled"?>" href="dashboard.php">Dashboard</a>
        </li>



    </ul>
      <!--form class="d-flex ">
        <input class="form-control me-2" type="search" placeholder="Nom de l'employer" aria-label="Search">
        <button class="btn btn-outline-warning" type="submit">Rechercher</button>
      </form-->      
      <form class="d-flex" method="post" action="logout.php">
        <button class="btn btn-outline-danger" type="submit" name="logout">Deconnexion</button>
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

<div class="container py-5">


<div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4">
  <?php 
    foreach ($employees as $employee) {
        ?>
              <div class="col">
    <div class="card h-100">
      <img src="<?php echo $employee["photo"] ?>" style="max-height:250px" class="card-img-top" alt="<?php echo $employee["prenom"] ?>">
      <div class="card-body">
        <h5 class="card-title"><?php echo $employee["prenom"] ?> <?php echo strtoupper($employee["nom"]) ?></h5>
        <p class="card-text"><?php echo $employee["biblio"] ?></p>
      </div>
      <div class="card-footer">
      <small class="text-muted"><?php echo $employee["poste"] ?></small>
      </div>
    </div>
  </div>
        <?php
    }
  ?>



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