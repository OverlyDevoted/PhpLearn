<!DOCTYPE html>
<html lang="en">
<!-- 
        Things learned this lesson:
        1. $_SERVER =   SGB that contains headers, paths and script locations 
                        the entries in this array are created by the web server.
                        Shows nearly everything you need to know about the the current web page env.
        2. You can use $_SERVER["PHP_SELF"] to get a link to the php inside the html and then use it to dynamically
        get the path to the php, but its vulnerable to cross-site scripting so it should be filtered by htmlspecialchars
        3. It's better to rely on if($_SERVER["REQUEST_METHOD"] == GET) for checking if a form was submitted as there are ways 
        of submitting a form without pressing the submit button 
-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 16</title>
</head>

<body>
    <div class="main">
        <h1>Lesson 16</h1>
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
            Username:<br>
            <input type="text" name="username">
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</body>

</html>
<style>
    body {
        background-color: black;
        color: white;
    }

    form {
        display: flex;
        flex-direction: column;
        width: 15%;
    }
</style>
<?php
echo "I love php <br>";
if($_SERVER["REQUEST_METHOD"] == "POST")
echo !empty($_POST["username"])?"Your username is: {$_POST["username"]}" : "No username provided";
/* 
    foreach($_SERVER as $key => $value)
    {
        echo $key . " " . $value . "<br>";
    }
     */
?>