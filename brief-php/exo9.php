<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul de la fréquence des caractères dans une chaîne</title>
</head>
<body>
    <h1>Calcul de la fréquence des caractères dans une chaîne</h1>

    <?php
    // Fonction pour calculer la fréquence des caractères dans une chaîne
    function calculerFrequenceCaracteres($chaine) {
        $frequence = array();
        $longueur = strlen($chaine);

        // Parcourir la chaîne caractère par caractère
        for ($i = 0; $i < $longueur; $i++) {
            $caractere = $chaine[$i];
            // Si le caractère existe dans le tableau de fréquence, incrémenter son compteur
            if (isset($frequence[$caractere])) {
                $frequence[$caractere]++;
            } else { // Sinon, initialiser son compteur à 1
                $frequence[$caractere] = 1;
            }
        }

        return $frequence;
    }

    // Chaîne de caractères d'exemple
    $chaine = "Bonjour à tous !";

    // Calcul de la fréquence des caractères dans la chaîne
    $frequenceCaracteres = calculerFrequenceCaracteres($chaine);

    // Affichage des résultats
    echo "<p>Fréquence des caractères dans la chaîne \"$chaine\":</p>";
    echo "<ul>";
    foreach ($frequenceCaracteres as $caractere => $frequence) {
        echo "<li>Le caractère \"$caractere\" apparaît $frequence fois</li>";
    }
    echo "</ul>";
    ?>

</body>
</html>
