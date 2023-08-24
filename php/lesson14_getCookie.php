<?php
    if(empty($_COOKIE["fav_location"]))
    {
        echo "No locations set";
        return;
    }
    $locations = explode("\/-\/", $_COOKIE["fav_location"]); 
    echo "List of locations:<br>";
    foreach($locations as $location)
    {
        echo "{$location} <br>";
    }
?>