<?php
//tableau à index
$participants = ["Remi","Albert","Glawdys"];

for($i=0; $i=2;$i++){
    echo "$i-".$participants[$i], "\10";
    }
echo $participants[0];

echo $participants[1];
echo $participants[2];
$nom_etudiant="Albert MAHOUGBE";
$filière_etudiants="GL";
//tableau associatif
$note_etudiant= [10,20,15,9,14,12,];

$notes=["math"=>15, "biologie"=>20, "statistique"=>17];
echo $notes["statistique"];
echo $notes["math"];
echo $notes["biologie"];

echo"\n ma note en statistique est:".$notes["statistique"];
echo"\n ma note en math est:".$notes["math"];
echo"\n ma note en biologie est:".$notes["biologie"];

echo "calculons la moyenne des notes des filieres suivantes qui est";

$moyenne = ($notes["statistique"]+ $notes["math"]+ $notes["biologie"])/3;


//concatenation
echo"\n ma moyenne est:".$moyenne;

