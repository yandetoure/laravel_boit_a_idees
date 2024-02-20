<?php

// Variables
$i;
$nombre;
$produit = 1;
$N;

// Début
echo "Veuillez saisir la taille du tableau : ";
$N = (int) readline();

// Initialisation du compteur
$i = 0;

// Initialisation du produit à 1
$produit = 1;

// Pour i allant de 0 à N-1
while ($i < $N) {
    // Affichage pour la saisie
    echo "Veuillez saisir le nombre à multiplier : ";
    $nombre = (int) readline();

    // Calcul du produit
    $produit *= $nombre;

    // Incrémenter le compteur
    $i++;
}

// Afficher le produit des nombres donnés
echo "Le produit des nombres donnés est de : " . $produit . "\n";

// Fin
?>

