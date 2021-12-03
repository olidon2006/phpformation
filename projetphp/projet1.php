<?php
//comment créer une variable
//Nomenclature:caractères alphanumériques
$nom="MAHOUGBE";
$prenom="Albert";
$ordinateur="HP";
$age="10";
$prenom2="Coffi";
$taille="1,65";
$ethnie="Adja";
$nationalite="Beninoise";
$profession="Forestier";
$residence="Seme-Podji";
?>
bonjour et bienvenue & cette section de formation sur PHP

<?php
echo $nom;
echo $prenom;
echo $prenom2;
echo $age;
echo $taille;
echo $ethnie;
echo $nationalite;
echo $profession;
echo $residence;

$math="15";
$physique="17";
$biologie="13";
$moyenne=($math+$physique+$biologie)/3;

echo "calculons la moyenne";
echo $moyenne;
?>
<?php

//concatenation
$matricule=47781;

$mon_compte_en_banque="800000000";

//concatenation

echo"---------------------------------";
echo "ma note en math est:".$math;
$ph="ma note en math est: ".$math;
echo "$ph";
echo"ma note en physique est: ".$physique;
$pc="ma note en physique est: ".$physique;
echo "$pc";
echo"ma note en biologie est: ".$biologie;
$py="ma note en biologie est: ".$biologie;
echo "$py";
echo"mon matricule est: ".$matricule;
echo"\n.$mon_compte_en_banque";
echo"\n";
echo"\n";
echo "mon compte en banque est:".$mon_compte_en_banque;
