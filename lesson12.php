<!DOCTYPE html>
<html lang="en">
<!-- 
        Things learned this lesson:
        1. functions
        2. String functions
-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 12</title>
</head>

<body>
    <h1>Lesson 12</h1>
    
</body>

</html>
<style>
    body {
        background-color: black;
        color: white;
        height: 100vh;
    }
</style>
<?php
    function  fuck_you_song($name, $age) {
        echo "Fuck dear {$name}<br>" ;
        echo "Fuck to {$name}<br>";
        echo "Fuck dear {$name}<br>";
        echo "{$name} is alive for {$age} years u piece of shit<br>";
    }
    function is_even(int $number){
        $result = $number % 2 == 0;
        return $result;
    }
    fuck_you_song("Spongebob", 43);
    echo (is_even(12)?"even":"not even"). "<br>" ;

    $username = " K3y       Man ";
    echo $username . "<br>";
    $username = strtoupper($username);
    echo $username . "<br>";
    $username = strtolower($username);
    echo $username . "<br>";
    $username = trim($username);
    echo $username . "<br>";
    $username = str_pad($username, 20, 6);
    echo $username . "<br>";
    $username = str_replace("6", "-", $username);
    echo $username . "<br>";
    $username = strrev($username);
    echo $username . "<br>";
    
    echo (strcmp($username, "K3yMan") == 0? "Equal" : "Not equal")."<br>";

    echo "String length is " . strlen($username)."<br>";
    echo "First - is at index " . strpos($username, "-")  . "<br>";
    echo "Substring " . substr($username, 0 , 10) . "<br>";

    $text = "I used to live by the rules of the weak, but now i have achieved greater power by exploiting weak minded";
    $words = explode(" ", $text);
    echo "<br>Explode start <br>";
    foreach($words as $word)
    {
        echo $word . "/<br>";
    }
    echo "Explode end<br>";
    $words = implode(" ", $words);
    echo $words;
?>