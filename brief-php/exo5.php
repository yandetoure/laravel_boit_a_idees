

    <?php
    // Fonction pour trouver les éléments communs à deux tableaux
    function trouverElementsCommuns($tableau1, $tableau2) {

        $elementsCommuns = array();

        // Parcourir le premier tableau
        foreach ($tableau1 as $element) {
            
            // Vérifier si l'élément existe dans le deuxième tableau
            if (in_array($element, $tableau2)) {
                // Ajouter l'élément aux éléments communs
                $elementsCommuns[] = $element;
            }
        }
        return $elementsCommuns;
    }

    // Exemple d'utilisation de la fonction avec deux tableaux d'entiers
    $tableau1 = array(1, 2, 3, 4, 5);
    $tableau2 = array(3, 4, 5, 6, 7);
    $resultat = trouverElementsCommuns($tableau1, $tableau2);

    // Afficher les éléments communs
    echo "Les éléments communs sont : " . implode(", ", $resultat);
    ?>

