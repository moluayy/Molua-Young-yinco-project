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
    $Name= $_SESSION['CharName']
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
            <td> Intelligence <div class= "rating"> 1 </div> </td>
            <td> Presence <div class= "rating"> 1 </div> </td>
        </tr>

        <tr>
            <td> Dexterity <div class= "rating"> 1 </div> </td>
            <td> Wits <div class= "rating"> 1 </div> </td>
            <td> Manipulation <div class= "rating"> 1 </div> </td>
        </tr>

        <tr>
            <td> Stamina <div class= "rating"> 3 </div> </td>
            <td> Resolve <div class= "rating"> 1 </div> </td>
            <td> Composure <div class= "rating"> 1 </div> </td>
        </tr>

        </table>
<!-- each row alternates between physical, mental, social, to stay in balance with the attributes table-->
        <table class="skills">
        <tr>
            <td> Athletics <div class= "rating"> 3 </div> </td>
            <td> Academics <div class= "rating"> 1 </div> </td>
            <td> Animal Ken <div class= "rating"> 1 </div> </td>
        </tr>

        <tr>
            <td> Computer <div class= "rating"> 3 </div> </td>
            <td> Brawl <div class= "rating"> 1 </div> </td>
            <td> Empathy <div class= "rating"> 1 </div> </td>
        </tr>

        <tr>
            <td> Crafts <div class= "rating"> 3 </div> </td>
            <td> Drive <div class= "rating"> 1 </div> </td>
            <td> Expression <div class= "rating"> 1 </div> </td>
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