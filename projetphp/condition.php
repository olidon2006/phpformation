<?php
/*système: la condition est une variable booléenne
if(condtion){action}
elseif(condtion2){action2}
else{action par defaut}
*/
//créer une variable salutation avec les données suivantes: -bonjour,-bon après midi, -bonsoir, -bonne nuit.

$salutations= ["bonjour","bon après midi","bonsoir","bonne nuit" ];
$heures= 24;

if(0<=$heures && $heures<12){
    //Bonjour
    echo $salutations [0];

    }
    elseif(12<=$heures && $heures<15){
        //bon après midi
        echo $salutations [1];
    }
   
    elseif(15<=$heures && $heures<20){
        // Bonsoir
        echo $salutations [2];
    }
    else{
        // Bonne nuit
        echo $salutations [3];
    }

//opérantes php
/*
> supérieur
< inférieur
<=inférieur ou égal
>= supérieur ou égal
== égale
=== égal et de même type
!= différent
=== est un

//les opérateurs ET et OU
&& ET
|| OU
(vrai) et (faux) = faux
(faut) et (vrai) = faux
(vrai) et (vrai) = vrai
(faux) et (faux) = faux

(vrai) ou (faux) = vrai
(faut) ou (vrai) = vrai
(vrai) ou (vrai) = vrai
(faux) ou (faux) = faux
*/