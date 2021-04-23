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

$query= $dbConn->prepare("SELECT * FROM attributes WHERE CharName = ?");
$params= array($CharName);
$query->execute($params);

while ($row = $query->fetch()) {

    $_SESSION['Strength']= $row['Strength'];
    $_SESSION['Dexterity']= $row['Dexterity'];
    $_SESSION['Stamina']= $row['Stamina'];

    $_SESSION['Intelligence']= $row['Intelligence'];
    $_SESSION['Wits']= $row['Wits'];
    $_SESSION['Resolve']= $row['Resolve'];

    $_SESSION['Presence']= $row['Presence'];
    $_SESSION['Manipulation']= $row['Manipulation'];
    $_SESSION['Composure']= $row['Composure'];

}

$query= $dbConn->prepare("SELECT * FROM skills WHERE CharName = ? ");
$params= array($CharName);
$query->execute($params);

while($row = $query->fetch()) {
    $_SESSION['Academics']= $row['Academics'];
    $_SESSION['Computer']= $row['Computer'];
    $_SESSION['Crafts']= $row['Crafts'];

    $_SESSION['Investigation']= $row['Investigation'];
    $_SESSION['Medicine']= $row['Medicine'];

    $_SESSION['Occult']= $row['Occult'];
    $_SESSION['Politics']= $row['Politics'];
    $_SESSION['Science']= $row['Science'];
    $_SESSION['Athletics']= $row['Athletics'];

    $_SESSION['Brawl']= $row['Brawl'];
    $_SESSION['Drive']= $row['Drive'];
    $_SESSION['Firearms']= $row['Firearms'];
    $_SESSION['Larceny']= $row['Larceny'];

    $_SESSION['Stealth']= $row['Stealth'];
    $_SESSION['Survival']= $row['Survival'];
    $_SESSION['Investigation']= $row['Investigation'];
    $_SESSION['Weaponry']= $row['Weaponry'];

    $_SESSION['AnimalKen']= $row['AnimalKen'];
    $_SESSION['Empathy']= $row['Empathy'];
    $_SESSION['Expression']= $row['Expression'];
    $_SESSION['Intimidation']= $row['Intimidation'];

    $_SESSION['Persuasion']= $row['Persuasion'];
    $_SESSION['Socialize']= $row['Socialize'];
    $_SESSION['Investigation']= $row['Investigation'];
    $_SESSION['Streetwise']= $row['Streetwise'];

    $_SESSION['Subterfuge']= $row['Subterfuge'];
}
echo $_SESSION['Court'];
header('LOCATION:../model/sheet_model3.php');

?>