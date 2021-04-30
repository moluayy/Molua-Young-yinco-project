<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="stylesheet.css">

<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<style>

</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lost 2e Character Sheet</title>

</head>
<body>
    <?php
//this sheet functions by using the session variables set in the models to echo the values obtained from the database
//and computing several derived traits using afforementioned values
    $Seeming = $_SESSION['Seeming'];
    $Court = $_SESSION['Court'];
    $Kith= $_SESSION['Kith'];
    $Name= $_SESSION['CharName'];

    $_SESSION['Stam']= "2";
    $_SESSION['Ath']= "3";

    ?>

<main>
    <section class="sheet">

        <table class="majorAtts">

        <tr>
            <td> <?php echo $Seeming ?> </td>
            <td> <?php echo $Court ?> </td>
            <td> <?php echo $Kith ?> </td>
            <td> <?php echo $Name ?> </td>
        </tr>
        </table>

        <table class= "attributes">

        <tr>
            <th>Physical </th>
            <th> Social</th>
            <th> Mental</th>
        </tr>

        <tr>
<!-- divs are used as the sections are non semantic, and only exist for formatting purposes- the div does not
represent a real division within the sheet-->
            <td> Strength <div class= "rating"> <?php echo $_SESSION['Strength'] ?> </div> </td>
            <td> Presence <div class= "rating"> <?php echo $_SESSION['Presence'] ?> </div> </td>
            <td> Intelligence <div class= "rating"> <?php echo $_SESSION['Intelligence'] ?> </div> </td>
        </tr>

        <tr>
            <td> Dexterity <div class= "rating"> <?php echo $_SESSION['Dexterity'] ?> </div> </td>
            <td> Manipulation <div class= "rating"> <?php echo $_SESSION['Manipulation'] ?> </div> </td>
            <td> Wits <div class= "rating"> <?php echo $_SESSION['Wits'] ?> </div> </td>
        </tr>

        <tr>
            <td> Stamina <div class= "rating"> <?php echo $_SESSION['Stamina'] ?> </div> </td>
            <td> Composure <div class= "rating"> <?php echo $_SESSION['Composure'] ?> </div> </td>
            <td> Resolve <div class= "rating"> <?php echo $_SESSION['Resolve'] ?> </div> </td>
        </tr>

        </table>
<!-- each row alternates between physical, mental, social, to stay in balance with the attributes table-->
        <table class="skills">
        <tr>
            <td> Athletics <div class= "rating"> <?php echo $_SESSION['Athletics'] ?> </div> </td>
            <td> Animal Ken <div class= "rating"> <?php echo $_SESSION['AnimalKen'] ?> </div> </td>
            <td> Academics <div class= "rating"> <?php echo $_SESSION['Academics'] ?> </div> </td>
        </tr>

        <tr>
            <td> Brawl <div class= "rating"> <?php echo $_SESSION['Brawl'] ?> </div> </td>
            <td> Empathy <div class= "rating"> <?php echo $_SESSION['Empathy'] ?> </div> </td>
            <td> Computer <div class= "rating"> <?php echo $_SESSION['Computer'] ?> </div> </td>
        </tr>

        <tr>
            <td> Drive <div class= "rating"> <?php echo $_SESSION['Drive'] ?> </div> </td>
            <td> Expression <div class= "rating"> <?php echo $_SESSION['Expression'] ?> </div> </td>
            <td> Crafts <div class= "rating"> <?php echo  $_SESSION['Crafts'] ?> </div> </td>
        </tr>

        <tr>
            <td> Firearms <div class= "rating"> <?php echo $_SESSION['Firearms'] ?> </div> </td>
            <td> Intimidation <div class= "rating"> <?php echo $_SESSION['Intimidation'] ?> </div> </td>
            <td> Investigation <div class= "rating"> <?php echo $_SESSION['Investigation'] ?> </div> </td>
        </tr>

        <tr>
            <td> Larceny <div class= "rating"> <?php echo $_SESSION['Larceny'] ?> </div> </td>
            <td> Persuasion <div class= "rating"> <?php echo $_SESSION['Persuasion'] ?> </div> </td>
            <td> Medicine <div class= "rating"> <?php echo $_SESSION['Medicine'] ?> </div> </td>
        </tr>

        <tr>
            <td> Stealth <div class= "rating"> <?php echo $_SESSION['Stealth'] ?> </div> </td>
            <td> Socialize <div class= "rating"> <?php echo $_SESSION['Socialize'] ?> </div> </td>
            <td> Occult <div class= "rating"> <?php echo $_SESSION['Occult'] ?> </div> </td>
        </tr>

        <tr>
            <td> Survival <div class= "rating"> <?php echo $_SESSION['Survival'] ?> </div> </td>
            <td> Streetwise <div class= "rating"> <?php echo $_SESSION['Streetwise'] ?> </div> </td>
            <td> Politics <div class= "rating"> <?php echo $_SESSION['Politics'] ?> </div> </td>
        </tr>

        <tr>
            <td> Weaponry <div class= "rating"> <?php echo $_SESSION['Weaponry'] ?> </div> </td>
            <td> Subterfuge <div class= "rating"> <?php echo $_SESSION['Subterfuge'] ?> </div> </td>
            <td> Science <div class= "rating"> <?php echo $_SESSION['Science'] ?> </div> </td>
        </tr>
        </table>

        <table class="majorAtts">

        <tr>
            <td> Needle:<?php echo $_SESSION['Needle']?> </td>
            <td> Thread: <?php echo $_SESSION['Thread']?> </td>
            <td> Wyrd: <?php echo $_SESSION['Wyrd']?> </td>
            <td> Clarity Cap: <?php echo $_SESSION['Resolve'] + $_SESSION['Composure']?> </td>
        </tr>

        </table>

        <table class= "merits">
        <tr>
        <td> 
        <h3> Aspirations</h3> </br>
        <?php echo $_SESSION['Aspirations'];?>
        
        <h3> Merits</h3> </br>
        <?php echo $_SESSION['Merits'];?>
         </td>
       
        <td> 
<!-- several switches are used as there are multiple possible values for these variables, and each requires a length string
to be of use to the player-->       
        <?php require 'seeming_blessing_switch.php' ?>

        </td>
        
        <td>
            <?php require 'seeming_curse_switch.php'?>
        </td>
        </tr>

        </table>

        <table class="majorAtts">

            <tr>
            <td> Willpower <?php echo $_SESSION['Resolve'] + $_SESSION['Composure']?> </td>
            <td> Health <?php echo $_SESSION['Stamina'] + 5?> </td>
            <td>Glamour/turn <?php require 'wyrd_switch.php' ?> </td>
            <td>Defence <?php require 'defence_switch.php'?> </td>
            <td>Speed <?php echo $_SESSION['Strength'] + $_SESSION['Dexterity'] +5?> </td>
            </tr>
        </table>

        <table class="merits">
            <tr>
                <td> <h2> Arcadian Contracts</h2> </br> 
                <?php echo $_SESSION['SeemingReg'] . ", " . $_SESSION['FaveReg'] ?> </br>
                <?php echo $_SESSION['Stam'] + $_SESSION['Ath']; ?> </br>
                <?php require 'regalia_switch.php' ?> </td>

                <td> <h2> Court Contracts </h2> </br>
                <?php echo $_SESSION['Court'] ?> </br>
                <?php require 'court_switch.php' ?> </td>
            </tr>
        </table>

        <form class= "DiceRoller"  method ="post" action =>
        <label for="DicePool"> Dice Roller </label>
        <input type="text" id="DicePool" name="DicePool">
        ​<input type="submit" value="Submit">

        <?php require_once 'dice-roller.php';
        if (isset($_POST['DicePool'])) diceroller($Pool) ; ?>
        </form>

    </section>
    </main>
<?php
//this unsets all session variables to prevent confusion or errors when moving back to the character selection sheet
//session_unset();
//session_destroy();
?>
</body>
</html>