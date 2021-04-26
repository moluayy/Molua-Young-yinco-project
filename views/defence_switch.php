
<?php
//defence is calculated using the lowest of two attributes, which this if statement compares
    if ($_SESSION['Wits'] > $_SESSION['Dexterity']) 
        echo $_SESSION['Dexterity'];
    

    else echo $_SESSION['Wits'];

    
