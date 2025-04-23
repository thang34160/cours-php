<?php

// exo 3.1
$a =8;
$b = 4;
$operation = '-';

if ($operation === '*') {
    echo ($a * $b) . PHP_EOL;
}elseif ($operation === '+') {
    echo ($a + $b). PHP_EOL;
}elseif ($operation === '-') {
     echo ($a - $b). PHP_EOL;
}elseif ($operation === '+') {
    echo ($a / $b). PHP_EOL;
};

// exo 3.2
$result = 5 + 3 * 2;
echo ("Le résultat SANS changer les priorités est: $result") . PHP_EOL;

$result2 = (5 + 3) * 2;
echo ("Le résultat en changeant les priorité est:  $result2") . PHP_EOL;

// exo 3.3
$x = 10;
echo ($x > 5) . PHP_EOL;
echo ($x < 5) . PHP_EOL;
echo ($x == 10) . PHP_EOL;
echo ($x != 8) . PHP_EOL;
echo ($x >= 10) . PHP_EOL;
echo ($x <= 9) . PHP_EOL;

// exo 3.4
$isAdmin = true;
$isLoggedIn = false;

if ($isAdmin == true && $isLoggedIn == false) {
    echo ("c'est ok") . PHP_EOL;
}elseif ($isAdmin == true || $isLoggedIn == false) {
    echo ("c'est ok") . PHP_EOL;
}

if ($isAdmin !== false) {
    echo ("vous êtes admin") . PHP_EOL;
};

// exo 3.5
$score = 15;
$result = ($score >= 10 ? "réussi" : "échoué");
echo $result . PHP_EOL;

// exo 3.6
$n = 4;
$n += 3;
echo $n. PHP_EOL;
$n *= 2;
echo $n. PHP_EOL;
$n -= 1;
echo $n. PHP_EOL;
$n %= 5;
echo $n. PHP_EOL;

// exo 3.7
$prenom = "Alice";
$nom = "Durand";
echo("Votre nom complet est $prenom $nom") . PHP_EOL;

// exo 3.8
$handle = fopen("fopentest.txt", "r");



