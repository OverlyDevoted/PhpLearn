<!DOCTYPE html>
<html lang="en">
<!-- 
        Things learned this lesson:
        1. Emmet shortcuts:
            - element.className - generates element with a specified class
            - element#idName - generates element with a specified id
            - you can immediately create a div by using one of the . or # symbols proceded with a name to create a div
            - you can write down element[attribute="value"] to create elements with different attributes
            - to create children elements write element>element. To create more than one child - element.element*times
            - element{text} puts text inside of the element. a $ inside of {} will output the index of the element being generated
            - zero padding is writing out numbers like this 001 002 so if you add multiple $ you would get zero padded numbers 
            - to create siblings you can use + - element+element youll create a sibling
        2. vscode to delte whole line ctrl+shift+k
        3. arrays
        4. foreach
    -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 8</title>
</head>

<body>
    <form action="index.php" method="post">
        <label>Enter new element</label>
        <input type="text" name="element">
        <input type="submit" value="Add Element">
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

$array = array("Tabula", "Punched", "Face", "Distance", "Intimate");
  
if (isset($_POST["element"])) {
    $new_el = $_POST["element"];
    array_push($array, $new_el);
    echo "Product of array " . array_product($array) . "<br>";
    $arr_length = count($array);
    echo "There " . (($arr_length == 1) ? "is " : "are ") . $arr_length . " element" . (($arr_length == 1) ? "" : "s") . " in the array. <br>";
    echo "All elements: <br>";
    foreach ($array as $color) {
        echo $color . " ";
    }
} 
else {
    echo "Element is not set";
}

?>