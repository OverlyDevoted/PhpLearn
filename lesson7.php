<!DOCTYPE html>
<html lang="en">
<!-- 
Things learned in this lesson
    1. for/while loops
 -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 7</title>
</head>

<body>
    <h1>Lesson 7</h1>
    <form action="lesson7.php" method="post">
        <input type="number" name="times" placeholder=10>
        <input type="submit" value="submit">
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

if (!isset($_POST["times"])) {
    echo "Input how many times to run for loop";
    return;
}
$times = $_POST["times"];
echo $times . " for loop length. <br>";
$times_length = strlen(strval($times));
for ($i = 0; $i < $times; $i++) {
    $inc_i = $i + 1;
    if ($i % 20 == 0) {
        echo html_entity_decode("<br>");
    }
    $i_length = $times_length - strlen(strval($inc_i));
    for($j=0;$j<$i_length;$j++)
    {
        echo "&nbsp; ";
    }
    echo "{$inc_i} ";
}
?>