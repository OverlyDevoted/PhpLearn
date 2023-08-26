<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<!-- 
        Things learned this lesson:
        1. Sessions are used to store global data between pages
        2. Header function can be used to programitically navigate between pages
-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 15</title>
</head>

<body>
    <div class="main">
        <h1>Lesson 15</h1>
        <label>This is the login page</label><br>
        <form action="index.php" method="post">
            username:<br>
            <input type="text" name="username">
            password:<br>   
            <input type="password" name="password">
            <input type="submit" value="login" name="login">
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

if (isset($_POST["login"])) {
    if (!empty($_POST["username"]) && !empty($_POST["password"])) {
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];
        
        header("Location: php/lesson15_home.php");
    } else {
        echo "Login or password is incorrect";
    }
}

?>