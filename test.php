<?php

$userChoice = "salade";
$menu = match ($userChoice) {
    "plat principal" => "entrecôte/frite",
    "entrée" , "salade" => "salade niçoise",
    default => "pas de plat",
};

echo $menu, PHP_EOL;

