<?php
 // exo 2.1
$chain = "string";
$num = 26;
$bool = true;

echo gettype ($chain) . PHP_EOL;
echo gettype ($num) . PHP_EOL;
echo gettype ($bool) . PHP_EOL;

// exo 2.2
$a = "10";
$b = 5;

$result = $a + $b;
echo $result;
var_dump($result);

// exo 2.3
$chainint = "123";
var_dump((int) ($chainint));
$nums = 7.8;
settype($nums, "string");
var_dump($nums);

// exo 2.4
$value1 = 0;
echo is_int($value1) . PHP_EOL ;
echo empty($value1) . PHP_EOL ;

$value2 = null;
echo is_int($value2) . PHP_EOL ;
echo empty($value2) . PHP_EOL ;

$value3 = "";
echo is_int($value3) . PHP_EOL ;
echo empty($value3) . PHP_EOL ;

$value4 = [];
echo is_int($value4) . PHP_EOL ;
echo empty($value4) . PHP_EOL ;

// exo 2.5
$age ="35";
var_dump($age);
settype($age, "int");
var_dump($age);

// exo 2.6
var_dump("0" == false);
var_dump("0" === false);

// exo 2.7
$table = [26, 7.8, true, "thang", null];

foreach ($table as $item) {
    echo $item . PHP_EOL;
    var_dump($item);
};


