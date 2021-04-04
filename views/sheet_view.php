<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="mystyle.css">

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
        <section id= "ribbon">
            <?php
                echo $Seeming, " ";
                echo $Court, " ";
                echo $Kith, " ";
                echo $Name;
            ?>
        </section>
    </main>
<?php
session_unset();
session_destroy();
?>
</body>
</html>