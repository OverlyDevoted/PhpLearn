<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "php_course";
    $conn = "";

    try{
        $conn = mysqli_connect( $db_server, 
                                $db_user, 
                                $db_pass, 
                                $db_name);
    }
    catch(Exception $e)
    {
        echo "Could not establish connection to the server <br>";
    }

    if($conn)
    {
        echo "Successfully connected to MySQL<br>";
    }            
    else
    {
        echo "Could not connect to the server<br>";
    }

?>