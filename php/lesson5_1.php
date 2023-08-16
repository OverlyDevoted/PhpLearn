<?php
$x = $_POST["x_value"];
$y = $_POST["y_value"];
$z = $_POST["z_value"];
$total = null;

echo "<br>Values: x({$x}) | y({$y}) | z({$z})<br>"; 

echo "<br>Binary operations<br>";
$total = abs($x);
echo "Absolute: {$total}<br>";
$total = round($x);
echo "Rounded: {$total}<br>";
$total = floor($x);
echo "Floor: {$total}<br>";
$total = ceil($x);
echo "Ceil: {$total}<br>";
$total = sqrt($x);
echo "Square root: {$total}<br>";

echo "<br>Unary operations<br>";
$total = pow($x, $y);
echo "Power: {$total}<br>";

echo "<br>Tenary operations<br>";
$total = max($x, $y, $z);
echo "Max between x, y and z: {$total}<br>";
$total = min($x, $y, $z);
echo "Min between x, y and z: {$total}<br>";

echo "<br>Constants<br>";
$total = pi();
echo "PI: {$total}<br>";

echo "<br>Helpers<br>";
$total = rand();
echo "Random number rand(): {$total}<br>";
$total = rand(1, 6);
echo "Random number rand(): {$total}<br>";
?>