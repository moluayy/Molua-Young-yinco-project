<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
//this sets the connection to the database, and throws up any error messages that might occur
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
//this catches the input from the creation view, and assigns it to variables
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

if (isset($_POST["Wyrd"])){
    $Wyrd= htmlspecialchars($_POST["Wyrd"]);
    }

if (isset($_POST["Strength"])){
    $Strength= htmlspecialchars($_POST["Strength"]);
    }

    if (isset($_POST["Dexterity"])){
        $Dexterity= htmlspecialchars($_POST["Dexterity"]);
    }

if (isset($_POST["Stamina"])){
    $Stamina= htmlspecialchars($_POST["Stamina"]);
    }

if (isset($_POST["Intelligence"])){
    $Intelligence= htmlspecialchars($_POST["Intelligence"]);
    }

if (isset($_POST["Wits"])){
        $Wits= htmlspecialchars($_POST["Wits"]);
    }

if (isset($_POST["Resolve"])){
    $Resolve= htmlspecialchars($_POST["Resolve"]);
    }

if (isset($_POST["Presence"])){
    $Presence= htmlspecialchars($_POST["Presence"]);
    }

if (isset($_POST["Manipulation"])){
    $Manipulation= htmlspecialchars($_POST["Manipulation"]);
    }

if (isset($_POST["Composure"])){
    $Composure= htmlspecialchars($_POST["Composure"]);
    }
//4 seperate queries are run, to make code easier to parse
//the first query inserts Name, Seeming, Kith, Court and Wyrd into the major traits table
$query= $dbConn->prepare("INSERT INTO major_traits(CharName, Seeming, Kith, Court, Wyrd) VALUES (?, ?, ?, ?, ?) ");
$params= array($Name, $Seeming, $Kith, $Court, $Wyrd);
$query->execute($params);
//this inserts physical attributes alongside the name into the Attribute table
$query= $dbConn->prepare("INSERT INTO attributes(CharName, Strength, Dexterity, Stamina) VALUES (?, ?, ?, ?) ");
$params1= array($Name, $Strength, $Dexterity, $Stamina);
$query->execute($params1);
//this updates the attribute table with mental attributes, using the characters name to determine the row
$query= $dbConn->prepare("UPDATE attributes SET Intelligence= ?, Wits= ?, Resolve=? WHERE CharName=? ");
$params2= array($Intelligence, $Wits, $Resolve, $Name);
$query->execute($params2);
//this updates the attribute table with social attributes, using the characters name to determine the row
$query= $dbConn->prepare("UPDATE attributes SET Presence= ?, Manipulation= ?, Composure=? WHERE CharName=? ");
$params3= array($Presence, $Manipulation, $Composure, $Name);
$query->execute($params3);

header('LOCATION:../views/creation2_view.php');
?>