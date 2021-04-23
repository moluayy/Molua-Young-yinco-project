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

$CharName = $_SESSION['CharName'];

$query= $dbConn->prepare("SELECT * FROM contract_affinities WHERE CharName = ?");
$params= array($CharName);
$query->execute($params);

while ($row = $query->fetch()) {

    $_SESSION['SeemingReg']= $row['Seeming'];
    $_SESSION['FaveReg']= $row['Favoured'];

}

$query= $dbConn->prepare("SELECT * FROM narrative_traits WHERE CharName = ? ");
$params= array($CharName);
$query->execute($params);

while($row = $query->fetch()) {
    $_SESSION['Aspirations']= $row['Aspirations'];
    $_SESSION['Merits']= $row['Merits'];
    $_SESSION['Touchstones']= $row['Touchstones'];

    $_SESSION['Needle']= $row['Needle'];
    $_SESSION['Thread']= $row['Thread'];

}
echo $_SESSION['Court'];
header('LOCATION:../views/sheet_view.php');

?>