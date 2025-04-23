<?php

// exo 5.1
$i = 1;

for ($i ; $i <= 10 ; $i++) {
    echo $i . PHP_EOL;
};

// exo 5.2
$somme = 0;
$i =1;

while ($i <= 10) {
    $somme += $i;
    ++$i;
};

echo $somme . PHP_EOL;

// exo 5.3
$i = 0;

do {
    echo ++$i . ""  . PHP_EOL;
}while ($i < 5);

// exo 5.4
$fruits = ["pomme", "banane", "orange", "kiwi"];

for ($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i] . PHP_EOL;
};

// exo 5.5
$personne = [
    "nom" => "thang",
    "age" => 44
];

foreach ($personne as $index => $personne ) {
    echo "$index: $personne" . PHP_EOL;
};

