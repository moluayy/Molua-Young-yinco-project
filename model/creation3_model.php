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

if (isset($_POST["Aspirations"])){
    $Aspirations= htmlspecialchars($_POST["Aspirations"]);
    }
if (isset($_POST["Touchstones"])){
$Touchstones= htmlspecialchars($_POST["Touchstones"]);
}

if (isset($_POST["Merits"])){
    $Merits= htmlspecialchars($_POST["Merits"]);
    }

if (isset($_POST["Needle"])){
    $Needle= htmlspecialchars($_POST["Needle"]);
    }
if (isset($_POST["Thread"])){
    $Thread= htmlspecialchars($_POST["Thread"]);
    }

if (isset($_POST["CharName"])){
$CharName= htmlspecialchars($_POST["CharName"]);
}

/* three seperate queries handle the physical, social and mental skills*/
$query= $dbConn->prepare("INSERT INTO narrative_traits(Aspirations, Merits, Touchstones, Needle, Thread, CharName) VALUES (?, ?, ?, ?, ?, ?) ");
$params= array($Aspirations, $Merits, $Touchstones, $Needle, $Thread, $CharName);
$query->execute($params);

header('LOCATION:../views/selection_view.php');
?>