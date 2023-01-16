<?php

$servername = "dragon.kent.ac.uk";
$username = "comp5830";
$password = "yess9ec";
$dbname = "comp5830";

try {
   
    $dbConn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    echo "<p>Connection Successful</p>";
    
} catch(PDOException $e) {
    
    echo "<p>Connection failed: " . $e->getMessage() . "</p>";
    die(); // destroy connection object
}

?>

