<?php
    if(empty($_COOKIE["fav_location"]))
    {
        echo "No locations set";
        return;
    }
    $locations = explode("\/-\/", $_COOKIE["fav_location"]); 
    echo "<h3 style=\"margin-top:0;margin-bottom:0;\">List of locations in the array:</h3><br>";
    $counter = 0;
    foreach($locations as $location)
    {
        $counter++;
        echo "{$counter}. {$location} <br>";
    }
?>