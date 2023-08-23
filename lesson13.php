<!DOCTYPE html>
<html lang="en">
<!-- 
        Things learned this lesson:
        1. Filtering and validating user input
-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 13</title>
</head>

<body>
    <h1>Lesson 13</h1>
    <form action="index.php" method="post">
        <label>Username</label>
        <input type="text" name="username">
        <label>Age</label>
        <input type="text" name="age">
        <label>Email</label>
        <input type="text" name="email">
        <label></label>
        <input type="submit" name="login" value="login">
    </form>
</body>

</html>
<style>
    body {
        background-color: black;
        color: white;
        height: 100vh;
    }
    form{
        display: flex;
        flex-direction: column;
        width: 15%;
    }
    label {
        margin-top: 10px;
    }
</style>
<?php
    if(isset($_POST["login"]))
    {
        echo "Attempting to login <br>";
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        echo "Hello {$username}! <br>";

        $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
        echo empty($age)? "Fill in the correct age<br>" : "Your age is: {$age}! <br>";
        
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        echo empty($email)? "Filll in the correct email <br>":"Your email is: {$email}! <br>";
    }
?>