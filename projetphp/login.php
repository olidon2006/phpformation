<?php
session_start();

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

function authConnexion ($login, $mpass, $db)
{
	$bdd=$db;
	//we verify the identification
  $req=$bdd->prepare("SELECT id, email, is_staff, name, created_at FROM users WHERE email =:login AND password =:password"); 
  $req->bindParam(":login",$login,PDO::PARAM_STR);
  $req->bindParam(":password",$mpass,PDO::PARAM_STR);

    $req->execute();	
    $resultat=$req->fetch();
    return $resultat;

}

if (isset($_POST['email']) && trim($_POST['email']) != "" &&  isset($_POST['password']) && trim($_POST['password']) != "") {
    
    $email = strip_tags($_POST['email']);
    $pass= strip_tags($_POST['password']);


    $user = authConnexion($email, $pass, $db);
    var_dump($user);
 
    if (isset($user))
    {
         $notif = "session reconnectée";
         $_SESSION['notif'] = $notif;
        $_SESSION['user'] = $user;
        //header("Location: index.php");
        header('Location: index.php');   
        exit();

    }
    else 
    {
        $erreur = "erreur authentification";
        $_SESSION['erreur'] = $erreur;
        session_destroy();
        //header("Location: ../signin/");
      
    }
 
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
    
    <meta name="theme-color" content="#563d7c">


    
    <!-- Custom styles for this template -->
    <link href="floating-labels.css" rel="stylesheet">
    <title>Contact</title>
  </head>
  <body>

    <div class="container">
        <div class="row align-items-center" style="height:100vh">

        <form method="post" action="" class="card p-5 col-md-6 offset-md-3">
            <h3 align="center">Connexion</h3>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <div class="mt-3">
                <small>Nouvel utilisateur? <a href="signup.php">Inscrivez-vous</a></small>
            </div>
        </form>

    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
