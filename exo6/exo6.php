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
    echo "$index: $personne" . PHP_EOL;
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
$nombres = [5, 2, 9, 1, 7];

sort($nombres);
echo json_encode($nombres) . PHP_EOL;

// exo 6.6
$fruits = ["pomme", "banane", "kiwi", "orange"];

echo count($fruits) . PHP_EOL;

// exo 6.7
$sports = ["football", "basketball", "tennis"];

if (in_array("basketball" , $sports)) {
    echo "le basketball fait parti des sports de la liste" . PHP_EOL;
}else {
    echo "désolé le basketball n'est pas présent dans la liste" . PHP_EOL;
};

// exo 6.8
$tableau1 = ["a", "b"];
$tableau2 = ["c", "d"];

$tableau3 = array_merge($tableau1 , $tableau2);
echo json_encode($tableau3) . PHP_EOL;

