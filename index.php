<?php

include("php/lesson17_database.php");
?>
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
        background-color: #1c1c1c;
        padding: 8px;
        border-radius: 4px;
    }

    .user_list {
        display: flex;
        flex-direction: column;
        
        width: 20%;
    }

    .user_list hr {
        width: 100%;
    }
</style>
<?php


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
                echo "<span style=\"color:#a1fc03\">User successfully registered</span><br>";
            } catch (mysqli_sql_exception) {
                echo "Couldn't register user<br>";
            }
        } else {
            echo "<span style=\"color:#fc4a03\">Username is already taken, please provide a different username</span><br>";
        }
    } else {
        echo "<span style=\"color:#fc4a03\">Enter username and password</span><br>";
    }
}
getUsers($conn);
mysqli_close($conn);

function isRegistered($conn, $username)
{
    $query = "SELECT * FROM users WHERE '$username' = users.username";
    try {
        $result = mysqli_query($conn, $query);
        return mysqli_num_rows($result) > 0;
    } catch (mysqli_sql_exception) {
        return false;
    }
}
function getUsers($conn)
{
    $query = "SELECT * FROM users";
    try {
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            echo "<div class=\"user_list\"><h2>Users</h2><hr>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row["id"] . "<br>";
                echo $row["username"] . "<br>";
                echo $row["first_logged"] . "<br><hr>";
            };
            echo "</div>";
        }
    } catch (mysqli_sql_exception) {
        echo "Error occured acquiring data from the database";
    }
}
?>