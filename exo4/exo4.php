<?php

// exo 4.1
$age = 17;

if ($age >= 18 ) {
    echo "vous etes majeur";
}else {
    echo "vous etes mineur" . PHP_EOL;
};

// exo 4.2
$nombre = 25;

if ($nombre > 0) {
    echo "nombre positif" . PHP_EOL;
}elseif ($nombre < 0) {
    echo "nombre négatif" . PHP_EOL;
}elseif ($nombre == 0) {
    echo "nombre nul" . PHP_EOL;
};

// exo 4.3
$nombre = 6;
$modulo = $nombre % 2;

if ($modulo == 0) {
    echo "c'est un nombre pair" . PHP_EOL;
}elseif ($modulo == 1) {
    echo "le nombre est impair" . PHP_EOL;
};

// exo 4.4
$age = 44;

if ($age >= 18 && $age <= 65) {
    echo "vous êtes dans la bonne tranche d'âge" . PHP_EOL;
}else {
    echo "vous n'êtes pas éligible" . PHP_EOL;
};

// exo 4.5
$password = "1234";

if ($password === "1234") {
    echo "mot de passe correct" . PHP_EOL;
}else {
    echo "mot de passe incorrect" . PHP_EOL;
};

// exo 4.6
$nombre = 25;
$divByThree = $nombre % 3;
$divByFive = $nombre % 5;

if ($divByThree == 0 && $divByFive == 0) {
    echo "ce nombre est bien divisible par 3 et 5" . PHP_EOL;
}else {
    echo "malheureusement ce nombre n'est pas divisible par 3 et 5" . PHP_EOL;
};

// exo 4.7
$temperature = 5;

if ($temperature > 0) {
    if ($temperature >= 30) {
        echo "il fait chaud" . PHP_EOL;
    }elseif ($temperature >= 15 && $temperature <= 30) {
        echo "temperature modérée" . PHP_EOL;
    }else {
        echo "temperature froide" . PHP_EOL;
    }
};

// exo 4.8
$nombre = $_GET["nombre"] ?? null;

if (is_int($nombre)) {
    echo "le nombre saisi est un entier" . PHP_EOL;
}else {
    echo "Erreur: le nombre saisi n'est pas un entier" . PHP_EOL;
};

// exo 4.9
$personne = [
    "nom" => "Thang",
    "age" => 44,
    "ville" => "Montpellier"
];

if ($personne["ville"]) {
    echo "la ville existe" . PHP_EOL;
};

















