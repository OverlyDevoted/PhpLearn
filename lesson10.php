<!DOCTYPE html>
<html lang="en">
<!-- 
        Things learned this lesson:
        1. Radio buttons
-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 10</title>
</head>

<body>
    <h1>Lesson 10</h1>
    <form action="index.php" method="post">
        <input type="radio" name="credit_type" value="Visa">Visa<br>
        <input type="radio" name="credit_type" value="Mastercard">Mastercard<br>
        <input type="radio" name="credit_type" value="Swedbank">Swedbank<br>
        <input type="submit" value="confirm" name="confirm">
        </form>
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
    if(isset($_POST["credit_type"]))
    {
        foreach($_POST as $key => $value)
        {
            echo $key . " " . $value . "<br>";
        }
        $value = $_POST["credit_type"];
        echo "Credit type is " . $value;
    }
    else
    {
        echo "No credit type is set";    
    }
?>