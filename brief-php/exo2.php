<?php

//La taille du tableau
echo "Veuillez saisir la taille du tableau d'entiers ";
$N =(INT) readline();

//la boucle 
For ($i = 0; $i < $N; $i++){
    echo "Veuillez saisir les entiers ligne après ligne ";
    $tableau[$i] = (INT) readline();

}

//aficchage du tableau avec doublons
echo "Voici le Tableau avec doublons :";
print_r($tableau);

//suppression des doublons
$tableauSansDoublons = array_unique($tableau);

//Affichage du tableau sans doublons
echo "Voici le Tableau sans doublons :";
print_r($tableauSansDoublons);


?>