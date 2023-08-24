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
        <label>This is the home page</label><br>
        <form action="lesson15_home.php" method="post">
            <input type="submit" name="logout" value="logout">
        </form>
    </div>
</body>

</html>
<style>
    body {
        background-color: black;
        color: white;
    }
</style>
<?php
echo $_SESSION["username"] . "<br>";
echo $_SESSION["password"] . "<br>";

if(isset($_POST["logout"]))
{
    session_destroy();
    header("Location: http://localhost/website/");
}
?>