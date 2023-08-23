<!DOCTYPE html>
<html lang="en">
<!-- 
        Things learned this lesson:
        1. checkboxes
-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 11</title>
</head>

<body>
    <h1>Lesson 11</h1>
    <form action="index.php" method="post">
        <input type="checkbox" name="foods[]" value="Bread">Bread<br>
        <input type="checkbox" name="foods[]" value="Potato">Potato<br>
        <input type="checkbox" name="foods[]" value="Beets">Beets<br>
        <input type="checkbox" name="foods[]" value="Yogurt">Yogurt<br>
        <input type="submit" name="submit" value="Buy" >
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
    if(isset($_POST["submit"]))
    {
        foreach($_POST as $key => $value)
        {
            if(is_array($value))
            {
                $array = $value;
                foreach($array as $element)
                {
                    echo $key . " " . $element . "<br>";
                }
            }
            else
            {
                echo $key . " " . $value . "<br>";
            }
        }
    }
    else{
        echo "Submit any value";
    }
?>