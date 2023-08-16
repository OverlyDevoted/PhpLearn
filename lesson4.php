<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning PHP</title>
</head>

<body>
    <h1 style="text-align: center;">GET form</h1>
    <form class="form" action="index.php" method="get">

        <div class="input">
            <label>Username: </label>
            <input type="text" name="username"></input>
        </div>
        <div class="input">
            <label>Password: </label>
            <input type="password" name="password"></input>
        </div>
        <button class="submit" type="submit">Submit</button>
    </form>
    <h1 style="text-align: center;">POST form</h1>
    <form class="form" action="index.php" method="post">

        <div class="input">
            <label>Username: </label>
            <input type="text" name="username"></input>
        </div>
        <div class="input">
            <label>Password: </label>
            <input type="password" name="password"></input>
        </div>
        <button class="submit" type="submit">Submit</button>
    </form>
</body>

</html>
<style>
    body {
        background-color: black;
        color: white;
        height: 100vh;
    }

    .form {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        background-color: #302f29;
        margin-left: 10vh;
        margin-right: 10vh;
        border-radius: 25px;
    }
    .input {
        margin-top: 2vh;
        display: flex;
        flex-direction: column ;
        justify-content: center;
        text-align: center;
        padding-left: 10vh;
        padding-right: 10vh;
    }
    .submit {
        margin-top: 2vh;
        margin-bottom: 2vh;
        width: 10vh;
        align-self: center;
    }
</style>
<?php
echo "PHP script data <br>\$_GET variables <br>";
//concatinating variables and strings:
echo "Password: " . $_GET["password"] . "<br>";
echo "Username:  {$_GET["username"]} <br>";

echo "\$_POST variables <br>";
echo "Password: " . $_POST["password"] . "<br>";
echo "Username:  {$_POST["username"]} <br>";

?>