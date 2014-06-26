<?php
    $mysqli = new mysqli("localhost", "root", "", "YOUR DATABASE NAME GOES HERE"); //make the connection to the server
//print the error messages
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
//print the connection info 
    echo $mysqli->host_info . "\n";

    $mysqli = new mysqli("127.0.0.1", "root", "", "test", 3306); //make the connection to the server
//print the error messages
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
//print the connection info 
    echo $mysqli->host_info . "\n";


    $userName = $_POST['username'];//your parameters
    $password = $_POST['password'];

    $userQuery = 'INSERT INTO YOUR TABLE NAME (parameter1, ... , parameter2) VALUES ("'.$userName.'", "'.$password.'")';//your query
            echo($userQuery);
            $mysqli->query($userQuery);

    $mysqli->close();
?>