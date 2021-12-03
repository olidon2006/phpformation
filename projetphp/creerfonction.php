<?php
/**
 * Nomenclature: caractères alphanumériques, Under score, tiret
 * ils peuvent ou pas prendre des paramètres
 * ils peuvent retourner une valeur (objet de leur traitement) ou non(void)
 * on peut afficher leur resultat ou l'insérer dans uen varible
 * 
 */
//Exemple de fonction
function disbonjour($nom)
{
    echo "Bonjour $nom";
}

///Appel de la finction
disbonjour('Kader');

///On fait recours aux fonction pour éviter à réecrire le mem code de traitement plusieurs fois


?>