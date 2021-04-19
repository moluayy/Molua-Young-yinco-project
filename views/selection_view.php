<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="stylesheet.css">

<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require '../model/selection_model.php'
?>
<style>

</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lost 2e Character Sheet</title>

</head>
<body>


<main>
        <section class= "ribbon">

        <form id="CharName" method="Post" action="../model/sheet_model.php" name= "CharName">
        <label for ="CharName"> Please Select a Character </label> <br>
         <select name="CharName" id="CharName">
        <option value=""> Character </option>
<?php
 while($row = $query->fetch()) {
?>
    <!-- this sets the value to the selected row's team id as taken from the database
    and then fills in the rows using the query-->
        <option value="<?php echo $row["CharName"]; ?>"> 
        <?php echo $row["CharName"]; ?> 
    </option>
        </section>
        <?php
            }
        ?>
        <input type="submit" value="submit" >
        </form>
    </main>
</body>
</html>