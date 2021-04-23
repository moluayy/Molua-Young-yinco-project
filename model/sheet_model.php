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

$_SESSION['CharName']= $_POST['CharName'];
$CharName= $_SESSION['CharName'];

$query= $dbConn->prepare("SELECT * FROM major_traits WHERE CharName = ? ");
$params= array($CharName);
$query->execute($params);

while($row = $query->fetch()) {

    $_SESSION['Seeming']= $row['Seeming'];
    $_SESSION['Court']= $row['Court'];
    $_SESSION['Kith']= $row['Kith'];
    $_SESSION['Wyrd']= $row['Wyrd'];
}
echo $_SESSION['Court'];
header('LOCATION:../model/sheet_model2.php');

?>