<?php

/**
 * 1. Créez une constante contenant le nombre 12
 * 2. Créez une deuxième constante qui contient le nombre 2
 * 3. Affichez le résultat de la première constante multipliée par la deuxième constante
 * 4. Créez une constante contenant la chaîne: C'est cool PHP
 * 5. Calculez le résultat de la première constante additionnée de la deuxième constante, le tout multiplié par la
 *    longueur de la chaîne de la troisième constante ( attention aux priorités )
 */
// TODO Votre code ici.
define("constanteOne", 12);
define("constanteTwo", 2);
    echo constanteOne * constanteTwo;

echo "<br>";

define("myConstante", "c'est cool PHP");
    echo (constanteOne + constanteTwo)* strlen(myConstante);
/**
 * 6. Utilisez la bonne constante magique et éventuellement la bonne fonction pour afficher un maximum d'informations sur la page actuelle4
 */
// TODO Votre code ici.
echo "<br><br>";

echo basename(__DIR__) . "<br>"; // affiche : Exo-165-PHP-Les-constantes-et-constantes-magiques
echo basename(__FILE__) . "<br>"; // affiche : index.php
echo basename(__LINE__) . "<br>"; // affiche le numéro de ligne
echo basename(__TRAIT__) . "<br>";
echo ClassName::class . "<br>";
