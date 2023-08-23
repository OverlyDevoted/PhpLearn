<!DOCTYPE html>
<html lang="en">
<!-- 
        Things learned this lesson:
        1. Associative arrays
        2. empty() helps determine whetver variable is set (not declared, false, null, "")
        3. isset() helps determine whether a variable is declared and not null
        4. $_POST and $_GET is an associative array and you can foreach through keys and values 
-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 9</title>
</head>

<body>
    <h1>Lesson 9</h1>
    <form action="index.php" method="post">
        <label>Enter new element 1</label>
        <input type="text" name="element1"><br>
        <label>Enter new element 2</label>
        <input type="text" name="element2"><br><br>
        <input type="submit" value="Add Element"><br><br>
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
$capitals = array(
    "Lithuania" => "Vilnius",
    "Poland" => "Washaw",
    "England" => "London",
    "German" => "Berlin"
);
$capitals["China"]= "Beijing";
/* 
array_pop($capitals); //removes element from end
array_shift($capitals); //removes from start
$capitals = array_flip($capitals); // keys flip with values
$capitals = array_reverse($capitals); // reveres the order of keys 
*/
foreach($capitals as $key => $value) {
    echo $key . " " . $value . "<br>";
}
echo "<br>Post values: <br>";
foreach($_POST as $key => $value) {
    echo $key . " = " . $value . "<br>";
}

if(isset($_POST["element1"]))
{
    $index = $_POST["element1"];
    if(!is_numeric($index))
        {  
            echo array_key_exists($index, $capitals)? "The capital of " . $index . " is " . $capitals[$index] . "<br>" : "There is no capital under value " . $index;
            return;
        }
    $keys = array_keys($capitals);
    //$values = array_values($capitals);
    if($index < 0 || $index > count($keys)-1)
    {
        echo "Incorrect index";
        return;
    }
    echo "Capital of index " . $index . " is " . $capitals[$keys[$index]];
}
?>