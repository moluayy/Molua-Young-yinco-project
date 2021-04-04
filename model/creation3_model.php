<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
    $dsn = "mysql: host= localhost; dbname=character_traits";
    $username= "Player";
    $password= "Player";

    try {
        $dbConn = new PDO($dsn, $username, $password);
        echo "You have connected!";
    } catch(PDOException $e) {
            $error_message = $e->getMessage();
            echo $error_message;
            exit();
    }
    $dbConn = new PDO($dsn, $username, $password);
?>

<?php

if (isset($_POST["Seeming"])){
    $Seeming= htmlspecialchars($_POST["Seeming"]);
    }
if (isset($_POST["Court"])){
$Court= htmlspecialchars($_POST["Court"]);
}

if (isset($_POST["Kith"])){
    $Kith= htmlspecialchars($_POST["Kith"]);
    }

if (isset($_POST["Name"])){
$Name= htmlspecialchars($_POST["Name"]);
}

$Wyrd= 1;
/* three seperate queries handle the physical, social and mental skills*/
$query= $dbConn->prepare("INSERT INTO major_traits(CharName, Seeming, Kith, Court) VALUES (?, ?, ?, ?) ");
$params= array($Name, $Seeming, $Kith, $Court);
$query->execute($params);

header('LOCATION:../views/selection_view.php');
?>