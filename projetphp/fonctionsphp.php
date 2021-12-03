<?php
/***
 * https://www.php.net/manual/fr/funcref.php 
 * vous y trouverez les fonction internes de PHP que vous pourrez utiliser classées par catégorie
 * Vous utiliserez beaucouplus les fonctions relatives aux: Tableaux, chaines de caractères, date et heure
 * https://www.php.net/manual/fr/book.strings.php
 * https://www.php.net/manual/fr/book.array.php
 * https://www.php.net/manual/fr/book.datetime.php
 * recherche google
 * 
 * 
 */

 //Datetime
    $year = date('Y');
    echo $year;
    $day = date('d');
    $month = date('m');
    $year = date('Y');

    $hour = date('H');
    $minut = date('i');

    // Maintenant on peut afficher ce qu'on a recueilli
    echo 'Bonjour ! Nous sommes le ' . $day . '/' . $month . '/' . $year . 'et il est ' . $hour. ' h ' . $minut;


?>