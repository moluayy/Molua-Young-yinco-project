
<?php
//this functions loops a number of times equal to the dicepool, creating a random integer each time
//this integer represents a random face of a 10-sided dice
//if this number ($dice) is 8-10, $success is increased
//it then echoes $success final value at the end

if (isset($_POST['DicePool'])){
$Pool= $_POST["DicePool"];
function diceRoller($Pool) {
    $success = 0;

    for ($i = 0; $i < $Pool; $i++) {
    $Dice= random_int(1,10);
    switch ($Dice) {
        case '8':
            $success +=1;
        break;
        case '9':
            $success +=1;
        break;
        case '10':
            $success +=1;
            $i -= 1;
        break;
    }
      };
      if ($success == 0) {
          echo 'You failed';
      }
      else 
        echo 'You get ' . $success . ' successes';
  }    
}       

?>

