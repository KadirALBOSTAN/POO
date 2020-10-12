<?php

require_once 'car.php';

$ferrari = new car('red', 2, '100%');
var_dump($ferrari);
echo '<br>';

$mcLaren = new Car('blue',2,'50%');
var_dump($mcLaren);
echo '<br>';

echo $ferrari->start() . "<br>";
echo $ferrari->forward() . "<br>";
echo $ferrari->brake() . "<br>";

?>