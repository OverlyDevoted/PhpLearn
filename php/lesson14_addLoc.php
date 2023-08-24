<?php
    $location=$_POST["location"];
    if(empty($location))
    {
        echo "Enter valid location <br>";
        return;
    }
    echo "Found location {$location} <br>";
    $locationArr = !empty($_COOKIE["fav_location"])? [$_COOKIE["fav_location"], $location] : [$location];
    $locationRes = implode("\/-\/", $locationArr);
    setcookie("fav_location", $locationRes, time()+86400, "/");
?>