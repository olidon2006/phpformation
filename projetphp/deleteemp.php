<?php

//
session_start();
/***
 * 
 **/

if(!isset($_GET["id"])){
    header('Location: index.php');   
    return;  
}
$id = intval($_GET["id"]);

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

if(isset($_POST["delete"]) && isset($_GET["id"])){
    $id = intval($_GET["id"]);
    
    $delquerry = 'DELETE FROM employees WHERE id = :id';
    $deletestmt = $db->prepare($delquerry);
    $deletestmt->execute([
        'id' => $id,
    ]) or die(print_r($db->errorInfo()));
    

    $notif = "L'employer a été supprimé";
    $_SESSION['notif'] = $notif;

    header('Location: dashboard.php');   
    return;  
}



?>