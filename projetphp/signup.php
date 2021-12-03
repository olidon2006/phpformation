<?php
session_start();

///Liste de sutilisateurs

if(isset($_SESSION["user"])){
    header('Location: index.php');   
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



if (isset($_POST['email']) && trim($_POST['email']) != "" &&  isset($_POST['password']) && trim($_POST['password']) != "" &&  isset($_POST['name']) && trim($_POST['name']) != "") {
    
    $email = strip_tags($_POST['email']);
    $pass= strip_tags($_POST['password']);
    $name= strip_tags($_POST['name']);

    $req=$db->prepare('INSERT INTO users (email, name, password) VALUES (:email, :name, :password)');
    $req->execute(array(':email' => $email, ':name' => $name, ':password' => $pass));
    $notif = "Votre compte a été créé. Consultez votre boite email, un mail vous a été envoyé, ouvrez le et suivez les instruction afin d'activer votre compte.";
    $_SESSION['notif'] = $notif;
  /*  echo '<script>document.location.href="http://anslabs.net/signin/";</script>';*/
  header('Location: login.php');   
  return;

}
?>

<!--
   Si utilisateur/trice est non identifié(e), on affiche le formulaire
-->



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Contact</title>
  </head>
  <body>

  <div class="container">
        <div class="row align-items-center" style="height:100vh">
        <form method="post" action="" class="card p-5 col-md-6 offset-md-3">
            <h3 align="center">Inscription</h3>
        <div class="mb-3">
                <label for="name" class="form-label">Nom </label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Dans l'ordre de votre pièce d'identité</div>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email </label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" name="password" class="form-control" id="password">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <div class="mt-3">
                <small>Ancien utilisateur? <a href="login.php">Connectez-vous</a></small>
            </div>

        </form>

    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
