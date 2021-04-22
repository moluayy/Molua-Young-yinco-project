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
    $Seeming = $_SESSION['Seeming'];
    $Court = $_SESSION['Court'];
    $Kith= $_SESSION['Kith'];
    $Name= $_SESSION['CharName'];
    $_SESSION['SeemingReg']= "Sword";
    $_SESSION['FaveReg']= "Crown";
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
            <td> Strength <div class= "rating"> 1 </div> </td>
            <td> Presence <div class= "rating"> 1 </div> </td>
            <td> Intelligence <div class= "rating"> 1 </div> </td>
        </tr>

        <tr>
            <td> Dexterity <div class= "rating"> 1 </div> </td>
            <td> Manipulation <div class= "rating"> 1 </div> </td>
            <td> Wits <div class= "rating"> 1 </div> </td>
        </tr>

        <tr>
            <td> Stamina <div class= "rating"> 3 </div> </td>
            <td> Composure <div class= "rating"> 1 </div> </td>
            <td> Resolve <div class= "rating"> 1 </div> </td>
        </tr>

        </table>
<!-- each row alternates between physical, mental, social, to stay in balance with the attributes table-->
        <table class="skills">
        <tr>
            <td> Athletics <div class= "rating"> 3 </div> </td>
            <td> Animal Ken <div class= "rating"> 1 </div> </td>
            <td> Academics <div class= "rating"> 1 </div> </td>
        </tr>

        <tr>
            <td> Brawl <div class= "rating"> 3 </div> </td>
            <td> Empathy <div class= "rating"> 1 </div> </td>
            <td> Computer <div class= "rating"> 1 </div> </td>
        </tr>

        <tr>
            <td> Drive <div class= "rating"> 3 </div> </td>
            <td> Expression <div class= "rating"> 1 </div> </td>
            <td> Crafts <div class= "rating"> 1 </div> </td>
        </tr>

        <tr>
            <td> Firearms <div class= "rating"> 3 </div> </td>
            <td> Intimidation <div class= "rating"> 1 </div> </td>
            <td> Investigation <div class= "rating"> 1 </div> </td>
        </tr>

        <tr>
            <td> Larceny <div class= "rating"> 3 </div> </td>
            <td> Persuasion <div class= "rating"> 1 </div> </td>
            <td> Medicine <div class= "rating"> 1 </div> </td>
        </tr>

        <tr>
            <td> Stealth <div class= "rating"> 3 </div> </td>
            <td> Socialize <div class= "rating"> 1 </div> </td>
            <td> Occult <div class= "rating"> 1 </div> </td>
        </tr>

        <tr>
            <td> Survival <div class= "rating"> 3 </div> </td>
            <td> Streetwise <div class= "rating"> 1 </div> </td>
            <td> Politics <div class= "rating"> 1 </div> </td>
        </tr>

        <tr>
            <td> Weaponry <div class= "rating"> 3 </div> </td>
            <td> Subterfuge <div class= "rating"> 1 </div> </td>
            <td> Science <div class= "rating"> 1 </div> </td>
        </tr>
        </table>

        <table class="majorAtts">

        <tr>
            <td> Needle: Caregiver </td>
            <td> Thread: Joy </td>
            <td> Wyrd: 3 </td>
            <td> Clarity Cap: 4 </td>
        </tr>

        </table>

        <table class= "merits">
        <tr>
        <td> They are flowers that take from you the power to compromise with wickedness and mediocrity, to be comfortable with evil and others’ suffering, in exchange for renewed life. </td>
       
        <td> 
       
        <?php require 'seeming_blessing_switch.php' ?>

        </td>
        
        <td>
            <?php require 'seeming_curse_switch.php'?>
        </td>
        </tr>

        </table>

        <table class="majorAtts">
            <tr>
            <td> Willpower 5 </td>
            <td> Health 6 </td>
            <td>Glamour 14 </td>
            <td>Defence 3 </td>
            <td>Speed 7 </td>
            </tr>
        </table>

        <table class="merits">
            <tr>
                <td> <h2> Arcadian Contracts</h2> </br> 
                <?php echo $_SESSION['SeemingReg'] . " " . $_SESSION['FaveReg'] ?> </br>
                <?php echo $_SESSION['Stam'] + $_SESSION['Ath']; ?> </br>
                <?php require 'regalia_switch.php' ?> </td>

                <td> <h2> Court Contracts </h2>
                <?php echo $_SESSION['Court'] ?>
                
                 </td>
            </tr>
        </table>
    </section>
    </main>
<?php
//session_unset();
//session_destroy();
?>
</body>
</html>