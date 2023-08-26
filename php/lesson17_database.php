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
        echo "Successfully connected to <span style=\"color:#036ffc\">My</span><span style=\"color:#fcc603\">SQL</span><br>";
    }            
    else
    {
        echo "Could not connect to the server<br>";
    }

?>