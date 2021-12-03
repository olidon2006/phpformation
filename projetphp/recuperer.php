

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
        <?php
        
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
return;
    }
      </form>

      private $db_host = 'localhost';
    private $db_name = 'database_api';
    private $db_username = 'root';
    private $port = "3308";
    private $db_password = '';
    
    public function dbConnection(){
        
        try{
            $conn = new PDO('mysql:host='.$this->db_host.'; port=3308; dbname='.$this->db_name,$this->db_username,$this->db_password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
        catch(PDOException $e){
            echo "Connection error ".$e->getMessage(); 
            exit;
        }
          
    }
}

?>