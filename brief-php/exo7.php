
    <h1>Éléments sans doublons dans un tableau</h1>

    <?php
    // Fonction pour retourner les éléments sans doublons dans un tableau
    function elementsSansDoublons($tableau) {
        // Utilisation de la fonction array_count_values pour compter le nombre d'occurrences de chaque élément
        $occurrences = array_count_values($tableau);
        $elementsSansDoublons = array();
        // Parcourir le tableau d'occurrences
        foreach ($occurrences as $element => $count) {
            // Si l'élément n'a qu'une occurrence, il n'a pas de doublons
            if ($count === 1) {
                $elementsSansDoublons[] = $element;
            }
        }
        return $elementsSansDoublons;
    }

    // Exemple d'utilisation de la fonction
    $monTableau = array(1, 2, 2, 3, 4, 4, 5);
    $resultat = elementsSansDoublons($monTableau);

    // Afficher les éléments sans doublons
    echo "Éléments sans doublons : " . implode(", ", $resultat);
    ?>

