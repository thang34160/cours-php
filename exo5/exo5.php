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

// exo 5.6
$i = 1;

for ($i; $i <= 10; $i++) {
    if ($i == 5) {
        continue;
    }
    echo $i . PHP_EOL;
}

//exo 5.7
$nombres = [1, 2, 3, 4, 5, 6];

foreach($nombres as $num) {
    if ($num % 2 == 0) {
        echo $num . PHP_EOL;
    }
};

// exo 5.8
$i = 10;

for ($i; $i > 0; $i-- ) {
    echo $i . PHP_EOL;
};

// exo 5.9
$i = $_GET[] ?? null;
$total = 1;

while ($i > 0) {
    $total *= $i;
    $i--;
}

echo $total . PHP_EOL;

// exo 5.10










