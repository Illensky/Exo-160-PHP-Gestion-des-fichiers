<?php

/**
 * 1. Créez une variable contenant une chaîne de caractères contenant du texte lorem ( 1 seule ligne suffit )
 * 2. Ajouter le contenu de cette variable dans un fichier avec la méthode de votre choix.
 * --> Attention à bien fermer votre fichier si vous utilisez fopen()
 */
// TODO Votre code ici.
$string = "du texte lorem ( 1 seule ligne suffit )";
$file = fopen("string.txt", "xb");
fwrite($file, $string);
fclose($file);

/**
 * 3. Créez un tableau contenant au moins 10 chaînes de caractère au choix.
 * 4. Faites en sorte d'ajouter chaque chaîne de caractère de ce tableau au fichier créé dans la première partie ( point 2 )
 * --> N'oubliez pas de fermer vos fichiers.
 * --> Attention: les chaînes de caractères doivent s'ajouter à la suite du contenu déjà existant, pas d'écrasement.
 */
// TODO Votre code ici
$stringArray = [
    "chaînes de caractère au choix",
    "chaînes de caractère au choix",
    "chaînes de caractère au choix",
    "chaînes de caractère au choix",
    "chaînes de caractère au choix",
    "chaînes de caractère au choix",
    "chaînes de caractère au choix",
    "chaînes de caractère au choix",
    "chaînes de caractère au choix",
    "chaînes de caractère au choix",
    "chaînes de caractère au choix"
];

$file = fopen("string.txt", "ab");

foreach ($stringArray as $string) {
    fwrite($file, $string);
}

fclose($file);

/**
 * 5. Trouvez une solution pour afficher à l'aide d'un simple echo l'extension du fichier index.php
 */
// TODO Votre code ici

$info = pathinfo("index.php");
echo $info['extension'];


/**
 * 6. Testez si le fichier 'toto' existe, sil n'existe pas, afficher un texte distant que ce fichier n'existe pas !
 */
// TODO Votre code ici.

if (!file_exists("toto")) {
    echo "Le fichier 'toto' n'existe pas";
}
/**
 * Super bonus.
 * Parcourrez votre fichier, à chaque fois que vous rencontrez le caractère 'a', remplacez le par le caractère '@'
 * Attention, il y a un piège avec les pointeurs, et une manière très simple de procéder... réfléchissez...
 */
// TODO Votre code ici si vous faites le bonus.

$str = file_get_contents("string.txt");
$str = str_replace("a", "@", $str);
file_put_contents("string.txt",$str);
