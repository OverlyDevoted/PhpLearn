<?php
$radius = $_POST["radius_value"];
echo "Radius value: {$radius} <br>";
$result = sin(deg2rad($radius));
$x = 615 + ($result * ((987.559 - 242.441)/2));
echo "Sin: {sin(". rand($result,2) .")}";
$result = -cos(deg2rad($radius));
$y = 173 + ($result * ((545.559 + 199.559)/2));
echo " Cos: {cos(".rand($result,2).")} <br>";
echo "x: {$x} y: {$y}"
?>