
<?php

// Variables
$i = 0;
$nombre = 1;
$produit = 1;
$N = 0;

echo "Veuillez saisir la taille du tableau : ";

$N = (INT) readline();

$produit = 1;

while ($i < $N) {

    echo "Veuillez saisir les nombres à multiplier";

    $tableau[$i] = (INT) readline();

    $i++;

}

foreach ($tableau as $element)

$produit *= $element;

 echo "le produit du tableau est de : " . $produit ."  " ;
?>