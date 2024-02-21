<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul de la médiane d'un tableau d'entiers</title>
</head>
<body>
    <h1>Calcul de la médiane d'un tableau d'entiers</h1>

    <?php
    // Fonction pour calculer la médiane d'un tableau d'entiers
    function calculerMedian($tableau) {
        // Trier le tableau dans l'ordre croissant
        sort($tableau);
        $count = count($tableau);
        // Calcul de l'index médian
        $mid = floor(($count - 1) / 2);
        // Si le tableau a un nombre impair d'éléments
        if ($count % 2) {
            return $tableau[$mid];
        } else { // Si le tableau a un nombre pair d'éléments
            return ($tableau[$mid] + $tableau[$mid + 1]) / 2.0;
        }
    }

    // Exemple d'utilisation de la fonction
    $monTableau = array(1, 2, 6, 5, 4, 3);
    $median = calculerMedian($monTableau);

    // Afficher la médiane du tableau
    echo "<p>La médiane du tableau est : $median</p>";
    ?>

</body>
</html>
