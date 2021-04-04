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
/*this captures the name to allow for later recall*/

if (isset($_POST["Name"])){
    $Name= htmlspecialchars($_POST["Name"]);
    }
/* all skills are captured as post data and assigned to a variable*/

if (isset($_POST["Athletics"])){
    $Athletics= htmlspecialchars($_POST["Athletics"]);
}

if (isset($_POST["Brawl"])){
    $Brawl= htmlspecialchars($_POST["Brawl"]);
}

if (isset($_POST["Drive"])){
    $Drive= htmlspecialchars($_POST["Drive"]);
}

if (isset($_POST["Firearms"])){
    $Firearms= htmlspecialchars($_POST["Firearms"]);
}

if (isset($_POST["Larceny"])){
    $Larceny= htmlspecialchars($_POST["Larceny"]);
}

if (isset($_POST["Stealth"])){
    $Stealth= htmlspecialchars($_POST["Stealth"]);
}

if (isset($_POST["Survival"])){
    $Survival= htmlspecialchars($_POST["Survival"]);
}

if (isset($_POST["Weaponry"])){
    $Weaponry= htmlspecialchars($_POST["Weaponry"]);
}

if (isset($_POST["AnimalKen"])){
    $AnimalKen = htmlspecialchars($_POST["AnimalKen"]);
}

if (isset($_POST["Empathy"])){
    $Empathy= htmlspecialchars($_POST["Empathy"]);
}

if (isset($_POST["Expression"])){
    $Expression= htmlspecialchars($_POST["Expression"]);
}

if (isset($_POST["Intimidation"])){
    $Intimidation= htmlspecialchars($_POST["Intimidation"]);
}

if (isset($_POST["Persuasion"])){
    $Persuasion= htmlspecialchars($_POST["Persuasion"]);
}

if (isset($_POST["Socialize"])){
    $Socialize= htmlspecialchars($_POST["Socialize"]);
}

if (isset($_POST["Streetwise"])){
    $Streetwise= htmlspecialchars($_POST["Streetwise"]);
}

if (isset($_POST["Subterfuge"])){
    $Subterfuge= htmlspecialchars($_POST["Subterfuge"]);
}

if (isset($_POST["Academics"])){
    $Academics= htmlspecialchars($_POST["Academics"]);
}

if (isset($_POST["Computer"])){
    $Computer= htmlspecialchars($_POST["Computer"]);
}

if (isset($_POST["Crafts"])){
    $Crafts= htmlspecialchars($_POST["Crafts"]);
}

if (isset($_POST["Investigation"])){
    $Investigation= htmlspecialchars($_POST["Investigation"]);
}

if (isset($_POST["Medicine"])){
    $Medicine= htmlspecialchars($_POST["Medicine"]);
}

if (isset($_POST["Occult"])){
    $Occult= htmlspecialchars($_POST["Occult"]);
}

if (isset($_POST["Politics"])){
    $Politics= htmlspecialchars($_POST["Politics"]);
}

if (isset($_POST["Science"])){
    $Science= htmlspecialchars($_POST["Science"]);
}

/*Affinity Regalia are captured next*/
if (isset($_POST["SeemingReg"])){
    $SeemingReg= htmlspecialchars($_POST["SeemingReg"]);
}

if (isset($_POST["FaveReg"])){
    $FaveReg= htmlspecialchars($_POST["FaveReg"]);
}

/* three seperate queries handle the physical, social and mental skills*/
$query= $dbConn->prepare("INSERT INTO skills(CharName, Athletics, Brawl, Drive, Firearms, Larceny, Stealth, Survival, Weaponry) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?) ");
$params1= array($Name, $Athletics, $Brawl, $Drive, $Firearms, $Larceny, $Stealth, $Survival, $Weaponry);
$query->execute($params1);

$query= $dbConn->prepare("UPDATE skills SET AnimalKen= ?, Empathy= ?, Expression=?, Intimidation=?, Persuasion=?, Socialize=?, Streetwise=?, Subterfuge=? WHERE CharName=? ");
$params2= array($AnimalKen, $Empathy, $Expression, $Intimidation, $Persuasion, $Socialize, $Streetwise, $Subterfuge, $Name);
$query->execute($params2);

$query= $dbConn->prepare("UPDATE skills SET Academics= ?, Computer= ?, Crafts=?, Investigation=?, Medicine=?, Occult=?, Politics=?, Science=? WHERE CharName=? ");
$params3= array($Academics, $Computer, $Crafts, $Investigation, $Medicine, $Occult, $Politics, $Science, $Name);
$query->execute($params3);

/*a final query inserts the affinity Regalia*/
$query= $dbConn->prepare("INSERT INTO contract_affinities(CharName, Seeming, Favoured) VALUES (?, ?, ?) ");
$params4= array($Name, $SeemingReg, $FaveReg);
$query->execute($params4);
header('LOCATION:../views/creation3_view.php');
?>