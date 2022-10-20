<?php

/**
 * je récupère l'ensemble du contenue de mon dico contenu dans le fichier .txt
 */
$txt = file("anagram-master-dictionnaire.txt");


/**
 *  Si aucun parametre est entrer (anagram.php).
 */
if ($argc <= 1) {
    return;
}

/**
 *  Si un parametre uniquement est entrer (anagram.php + "string").
 */
if ($argc == 2) {
    echo "je suis la condition pour 1 argument passer en parametre\n";
    /**
     * $countArgv recupere la valeur de la chaine passer en parametre
     */
    $countArgv = strlen($argv[1]);

    foreach ($txt as $value) {

        $countValue = strlen($value) - 2; // -2 car il y a un retour a la ligne apres chaque mot

            //si la chaine de caractere mesure la meme longueur
        if ($countValue === $countArgv) {
            /**
             * je dois faire la comparaiser et l'affichage des mot ici
             */

            $value2 = str_split($value);
            //je met dans l'ordre alphabetique tout les mots du dico
            sort($value2);
            // print_r($value2);

            //je met en ordre alphabetique la string passer en parametre
            $argv1 = str_split($argv[1]);
            sort($argv1);
            // print_r($argv1);
            // je fais deux arrayshift pour supprimer les deux espace pris dans le tableau
            array_shift($value2);
            array_shift($value2);

            $res = $value2;
            //print_r($res);

        }
}
    echo "je suis arriver à la fin de la boucle argc == 2\n";
}