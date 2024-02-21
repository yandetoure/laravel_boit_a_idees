    <?php

    // Fonction pour compter le nombre de voyelles dans une chaîne de caractères
    function compterVoyelles($chaine) {

        $voyelles = array('a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y');
        $nbVoyelles = 0;

        // Parcourir chaque caractère de la chaîne

        for ($i = 0; $i < strlen($chaine); $i++) {
            // Vérifier si le caractère est une voyelle
            if (in_array($chaine[$i], $voyelles)) {
                $nbVoyelles++;
            }
        }
        return $nbVoyelles;
    }

    // Exemple d'utilisation de la fonction avec un tableau de chaînes
    $tableauChaines = array("Bonjour", "Hello", "Comment ça va ?", "OpenAI");

    foreach ($tableauChaines as $chaine) {
        
        echo "Nombre de voyelles dans \"$chaine\": " . compterVoyelles($chaine);
    }
    ?>
