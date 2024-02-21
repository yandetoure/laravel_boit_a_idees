     <?php
    // Fonction pour effectuer une rotation à droite d'un tableau
    function rotationDroite($tableau, $positions) {
        $taille = count($tableau);
        // Vérifier si le tableau est vide ou s'il n'y a pas besoin de rotation
        if ($taille == 0 || $positions % $taille == 0) {
            return $tableau;
        }
        // Calculer le nombre réel de positions après une rotation
        $positions = $positions % $taille;
        // Extraire les éléments à déplacer
        $deplacement = array_splice($tableau, -$positions);
        // Effectuer la rotation à droite
        array_splice($tableau, 0, 0, $deplacement);
        return $tableau;
    }

    // Exemple d'utilisation de la fonction
    $monTableau = array(1, 2, 3, 4, 5);
    $positions = 2;
    $resultat = rotationDroite($monTableau, $positions);

    // Afficher le tableau d'origine et le tableau après la rotation
    echo "<p>Tableau d'origine : " . implode(", ", $monTableau) . "</p>";
    echo "Rotation de $positions positions à droite : " . implode(", ", $resultat);
    ?>


