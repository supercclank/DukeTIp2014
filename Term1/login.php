<?php
	$mysqli = new mysqli("localhost", "root", "", "YOUR DATABASE NAME GOES HERE"); //make the connection to the server
//print the error messages
	if ($mysqli->connect_errno) {
	    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
//print the connection info	
	echo $mysqli->host_info . "\n";

	$mysqli = new mysqli("127.0.0.1", "root", "", "OUR DATABASE NAME GOES HERE", 3306); //make the connection to the server
//print the error messages
	if ($mysqli->connect_errno) {
	    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
//print the connection info	
	echo $mysqli->host_info . "\n";

	$parameter1 = $_POST['PARAMETER 1'];//your posts go here
    $parameter2 = $_POST['PARAMETER X'];//
    //...

    $userQuery = 'SELECT * FROM YOUR TABLE NAME WHERE PARAMETER1="' . $parameter1 . '" AND PARAMETER@="' . $parameter2. '"';

	if ($stmt = $mysqli->prepare($userQuery)) {
	    $stmt->execute();
	    $stmt->bind_result($tableColName1,....,$tableColNam2);
	    $result = $stmt->fetch();
	    if(! $result) {
           echo("<br/> INVALID USERNAME OR PASSWORD");
        }
	    $stmt->close();
	}
    $mysqli->close();
?>