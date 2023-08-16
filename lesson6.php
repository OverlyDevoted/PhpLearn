<!DOCTYPE html>
<html lang="en">
<!-- Things learned this lesson:
    1. PHP conditionals (if, switch, logic operands and operations)
-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label>Work hours</label>
        <input type="number" name="work_h" />
        <input type="submit" value="Submit" />
    </form>
</body>

</html>
<style>
    body {
        background-color: black;
        color: white;
        height: 100vh;
        display: flex;
        text-align: center;
        align-items: center;
        flex-direction: column;
    }

    form {
        align-items: center;
        display: flex;
        flex-direction: column;
    }
</style>
<?php
/* If statements */
$date = date("l");
echo"Today is {$date}<br>";
$rate = 15;
if (isset($_POST["work_h"])) {
    $hours = $_POST["work_h"];
    $pay = ($hours > 0) * $hours * $rate;
    echo "Work hours: " . ($hours > 0) * $hours * $rate . "<br>";

    switch ($pay) {
        case $pay > 100 && $pay < 200:
            echo "You are getting payed pennies, but it's better than nothing 😅 ";
            break;
        default:
            echo "Unknown amount bro, are you the feds? 😎";
            break;
    }
} else {
    echo "Please enter work hours.";
}

?>