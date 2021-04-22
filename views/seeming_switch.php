
<?php
    switch ($_SESSION['SeemingReg']) {
        case 'Sword':
            echo "Elemental Weapon \r\n";
            echo "Might of the Terrible Brute \r\n";
            echo "Overpowering Dread \r\n";
            echo "Primal Glory \r\n";
            echo "Touch of Wrath \r\n";
            break;
        case 1:
            echo "i equals 1";
            break;
        case 2:
            echo "i equals 2";
            break;
    }

    switch ($_SESSION['FaveReg']) {
        case 'Crown':
            echo "Hostile Takeover \r\n";
            echo "Mask of Superiority \r\n";
            echo "Paralyzing Presence \r\n";
            echo "Summon the Loyal Servant \r\n";
            echo "Tumult \r\n";
            break;
        case 1:
            echo "i equals 1";
            break;
        case 2:
            echo "i equals 2";
            break;
    }
?>
