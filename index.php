<!DOCTYPE html>
<html lang="en">
<!-- 
        Things learned this lesson:
        1. Establishing connection to mysql with mysqli (there's also pdo)
        2. Querying mysql database
-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 17</title>
</head>

<body>
    <div class="main">
        <h1>Lesson 18</h1>
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
            username:<br>
            <input type="text" name="username">
            password:<br>
            <input type="password" name="password">
            <input type="submit" name="submit" value="Register">
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

include("php/lesson17_database.php");

/* $sql = "INSERT INTO users (user, password)
            VALUES ('spongebobo','pineapple1')";
    mysqli_query($conn, $sql); */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["username"]) && !empty($_POST["password"])) {

        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        if (!isRegistered($conn, $username)) {

            $password = password_hash(filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS), PASSWORD_DEFAULT);
            $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

            try {
                mysqli_query($conn, $query);
                echo "User registered<br>";
            } catch (mysqli_sql_exception) {
                echo "Couldn't register user<br>";
            }
        } else {
            echo "Username is already taken, please provide a different username<br>";
        }
    } else {
        echo "Enter username and password<br>";
    }
}
getUsers($conn);
mysqli_close($conn);

function isRegistered($conn, $username)
{
    $query = "SELECT * FROM users WHERE '$username' = users.username";
    try{
        $result = mysqli_query($conn, $query);
        return mysqli_num_rows($result) > 0;
    }
    catch(mysqli_sql_exception)
    {
        return false;
    }
}
function getUsers($conn)
{
    $query = "SELECT * FROM users";
    try{
        $result = mysqli_query($conn, $query);
    
        if (mysqli_num_rows($result) > 0) {
            echo "<br><hr>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row["id"] . "<br>";
                echo $row["username"] . "<br>";
                echo $row["first_logged"] . "<br><hr>";
            };
        }
    }
    catch(mysqli_sql_exception)
    {
        echo "Error occured acquiring data from the database";
    }
}
?>