<?php

// exo 1.1
$name = 'thang' . PHP_EOL ;
echo ($name);

// exo 1.2
$firstName = 'Thang' . PHP_EOL;
$lastName = 'TA TRUNG' . PHP_EOL;
echo ("Bonjour, je m'appelle " . $firstName . $lastName);
echo ("Bonjour je m'appelle {$firstName} {$lastName}");

// exo 1.3
$a = 5;
$b = 3;

$sum = $a + $b;
echo ($sum);

$diff = $a - $b;
echo ($diff);

$mult = $a * $b;
echo ($mult);

$quotient = $a / $b;
echo ($quotient);  


// exo 1.4
$isLoggedIn = false;
$isLoggedIn = true;
echo ("Utilisateur connecté : {$isLoggedIn}"); 

// exo 1.5
$variable = "test";
$maVariable = "exemple";
$classes = "PHP";
echo ($classes);

// exo 1.6
$temperature = 25;
var_dump($temperature);
$temperature = "bonne";
var_dump($temperature);


