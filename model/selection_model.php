<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$dsn = "mysql: host= localhost; dbname=character_traits";
$username= "Player";
$password= "Player";

try {
    $dbConn = new PDO($dsn, $username, $password);
} catch(PDOException $e) {
        $error_message = $e->getMessage();
        echo $error_message;
        exit();
}
$dbConn = new PDO($dsn, $username, $password);

?>

<?php
// this captures the relevant information for the loop to display all characters
$query= $dbConn->prepare("SELECT * FROM major_traits");
$query->execute();


?>