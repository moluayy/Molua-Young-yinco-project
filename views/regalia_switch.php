
<?php
    switch ($_SESSION['SeemingReg']) {
        case 'Sword':
            echo "<ul>";
            echo "<li> Elemental Weapon \r\n </li>";
            echo "<li> Might of the Terrible Brute \r\n </li>";
            echo "<li> Overpowering Dread \r\n </li>";
            echo "<li> Primal Glory \r\n </li>";
            echo "<li>Touch of Wrath \r\n</li>";
            echo "<li>Elemental Fury \r\n</li>";
            echo "<li>Oathbreaker's Punishment \r\n</li>";
            echo "<li>Red Revenge \r\n</li>";
            echo "<li>Relentless Pursuit \r\n</li>";
            echo "<li>Thief of Reason \r\n</li>";


            break;
        case 'Crown':
            echo "<ul>";
            echo "<li>Hostile Takeover \r\n </li>";
            echo "<li>Mask of Superiority \r\n </li>";
            echo "<li>Paralyzing Presence \r\n </li>";
            echo "<li>Summon the Loyal Servant \r\n</li>";
            echo "<li>Tumult \r\n </li>";
            echo "<li>Discreet Summons \r\n </li>";
            echo "<li>Mastermind's Gambit \r\n</li>";
            echo "<li>Pipes of the Beastcaller \r\n</li>";
            echo "<li>The Royal Court \r\n</li>";
            echo "<li>Spinning Wheel \r\n</li>";
            break;
        case 'Jewels':
            echo "<ul>";
            echo "<li>Blessing of Perfection \r\n</li>";
            echo "<li>Changing Fortunes \r\n</li>";
            echo "<li>Light Shy \r\n</li>";
            echo "<li>Murkblur \r\n</li>";
            echo "<li>Trivial Reworking \r\n</li>";
            echo "<li>Changeling Hours \r\n</li>";
            echo "<li>Dance of the Toys \r\n</li>";
            echo "<li>Hidden Reality \r\n</li>";
            echo "<li>Stealing the Solid Reflection \r\n</li>";
            echo "<li>Tatterdemalion's Workshop \r\n</li>";
            break;

        case 'Mirror':
            echo "<ul>";
            echo "<li>Glimpse of a Distant Mirror \r\n </li>";
            echo "<li>Know the Competition \r\n </li>";
            echo "<li>Portents and Visions \r\n </li>";
            echo "<li>Read Lucidity \r\n </li>";
            echo "<li>Walls Have Ears \r\n </li>";
            echo "<li>Props and Scenery \r\n </li>";
            echo "<li>Reflections of the Past \r\n </li>";
            echo "<li>Riddle-Kith \r\n </li>";
            echo "<li>Skinmask \r\n </li>";
            echo "<li>Unravel the Tapestry \r\n </li>";
            break;
            
            case 'Shield':
                echo "<ul>";
                echo "<li>Cloak of Night \r\n </li>";
                echo "<li>Fae Cunning \r\n </li>";
                echo "<li>Shared Burden \r\n </li>";
                echo "<li>Thorns and Brambles \r\n </li>";
                echo "<li>Trapdoor Spider's Trick \r\n </li>";
                echo "<li>Fortifying Presence \r\n </li>";
                echo "<li>Hedgewall \r\n </li>";
                echo "<li>Pure Clarity \r\n </li>";
                echo "<li>Whispers of Morning \r\n </li>";
                echo "<li>Vow of No Compromise \r\n </li>";
                break;
        
        case 'Steed':
            echo "<ul>";
            echo "<li>Boon of the Scuttling Spider \r\n </li>";
            echo "<li>Dreamsteps \r\n </li>";
            echo "<li>Nevertread \r\n </li>";
            echo "<li>Pathfinder \r\n </li>";
            echo "<li>Seven-League Leap \r\n </li>";
            echo "<li>Chrysalis \r\n </li>";
            echo "<li>Flickering Hours \r\n </li>";
            echo "<li>Leaping Towards Nightfall \r\n </li>";
            echo "<li>Mirror Walk \r\n </li>";
            echo "<li>Talon and Wing \r\n </li>";
            break;
    }

    switch ($_SESSION['FaveReg']) {

        case 'Sword':
        echo "<li> Elemental Weapon \r\n </li>";
        echo "<li> Might of the Terrible Brute \r\n </li>";
        echo "<li> Overpowering Dread \r\n </li>";
        echo "<li> Primal Glory \r\n </li>";
        echo "<li>Touch of Wrath \r\n</li>";
        echo "<li>Elemental Fury \r\n</li>";
        echo "<li>Oathbreaker's Punishment \r\n</li>";
        echo "<li>Red Revenge \r\n</li>";
        echo "<li>Relentless Pursuit \r\n</li>";
        echo "<li>Thief of Reason \r\n</li>";
        echo "</ul>";


        break;
    case 'Crown':

        echo "<li>Hostile Takeover \r\n </li>";
        echo "<li>Mask of Superiority \r\n </li>";
        echo "<li>Paralyzing Presence \r\n </li>";
        echo "<li>Summon the Loyal Servant \r\n</li>";
        echo "<li>Tumult \r\n </li>";
        echo "<li>Discreet Summons \r\n </li>";
        echo "<li>Mastermind's Gambit \r\n</li>";
        echo "<li>Pipes of the Beastcaller \r\n</li>";
        echo "<li>The Royal Court \r\n</li>";
        echo "<li>Spinning Wheel \r\n</li>";
        echo "</ul>";

        break;
    case 'Jewels':
        echo "<li>Blessing of Perfection \r\n</li>";
        echo "<li>Changing Fortunes \r\n</li>";
        echo "<li>Light Shy \r\n</li>";
        echo "<li>Murkblur \r\n</li>";
        echo "<li>Trivial Reworking \r\n</li>";
        echo "<li>Changeling Hours \r\n</li>";
        echo "<li>Dance of the Toys \r\n</li>";
        echo "<li>Hidden Reality \r\n</li>";
        echo "<li>Stealing the Solid Reflection \r\n</li>";
        echo "<li>Tatterdemalion's Workshop \r\n</li>";
        echo "</ul>";

        break;

    case 'Mirror':
        echo "<li>Glimpse of a Distant Mirror \r\n </li>";
        echo "<li>Know the Competition \r\n </li>";
        echo "<li>Portents and Visions \r\n </li>";
        echo "<li>Read Lucidity \r\n </li>";
        echo "<li>Walls Have Ears \r\n </li>";
        echo "<li>Props and Scenery \r\n </li>";
        echo "<li>Reflections of the Past \r\n </li>";
        echo "<li>Riddle-Kith \r\n </li>";
        echo "<li>Skinmask \r\n </li>";
        echo "<li>Unravel the Tapestry \r\n </li>";
        echo "</ul>";

        break;
        
        case 'Shield':
            echo "<li>Cloak of Night \r\n </li>";
            echo "<li>Fae Cunning \r\n </li>";
            echo "<li>Shared Burden \r\n </li>";
            echo "<li>Thorns and Brambles \r\n </li>";
            echo "<li>Trapdoor Spider's Trick \r\n </li>";
            echo "<li>Fortifying Presence \r\n </li>";
            echo "<li>Hedgewall \r\n </li>";
            echo "<li>Pure Clarity \r\n </li>";
            echo "<li>Whispers of Morning \r\n </li>";
            echo "<li>Vow of No Compromise \r\n </li>";
            echo "</ul>";

            break;
    
    case 'Steed':
        echo "<li>Boon of the Scuttling Spider \r\n </li>";
        echo "<li>Dreamsteps \r\n </li>";
        echo "<li>Nevertread \r\n </li>";
        echo "<li>Pathfinder \r\n </li>";
        echo "<li>Seven-League Leap \r\n </li>";
        echo "<li>Chrysalis \r\n </li>";
        echo "<li>Flickering Hours \r\n </li>";
        echo "<li>Leaping Towards Nightfall \r\n </li>";
        echo "<li>Mirror Walk \r\n </li>";
        echo "<li>Talon and Wing \r\n </li>";
        echo "</ul>";

        break;
    }
    
?>
