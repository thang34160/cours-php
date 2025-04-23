<?php

//exo 6.1
$couleurs = ["rouge",
            "bleu",
            "vert"];

foreach($couleurs as $color) {
    echo $color . PHP_EOL;
}

// exo 6.2
$personne = ["nom" => "thang",
            "age" => 44 ];

foreach ($personne as $index => $personne) {
    echo "$index $personne" . PHP_EOL;
};

// exo 6.3
$fruits = [ "pomme", "banane"];
array_push($fruits, "mangue");

foreach($fruits as $fruit) {
    echo $fruit . PHP_EOL;
};

// exo 6.4
$animaux = ["chien",
            "chat",
           "lapin"];
unset($animaux[1]);

foreach ($animaux as $animal) {
    echo $animal . PHP_EOL;
};

// exo 6.5

