<!DOCTYPE html>
<html lang="en">
<!-- 
        Things learned this lesson:
        1. hashing - transforming sensitive data into random letters, numbers, symbols via mathematical algorithms (similar to encryption)
            to hide data from 3rd parties 
-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 17</title>
</head>

<body>
    <div class="main">
        <h1>Lesson 17</h1>
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
            Password:<br>
            <input type="text" name="password">
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
    if(!$_SERVER["REQUEST_METHOD"] == "POST")
        return;
    if(empty($_POST["password"]))
        return;
    $password = $_POST["password"];
    $hash = password_hash($password, PASSWORD_DEFAULT);
    echo $hash . "<br>";
    echo password_verify($password , $hash)? "Passwords match" : "Incorrect password";
?>