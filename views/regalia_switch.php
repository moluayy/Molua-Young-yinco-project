
<?php
// this switch compares two session variables against a list of potential values, sending the appropriate abilities and dicepools
//in response.
//it is contained in it's own file to save on space
    switch ($_SESSION['SeemingReg']) {
        case 'Sword':
            echo "<ul>";
            echo "<li> Elemental Weapon \r\n </li>" . $_SESSION['Presence'] +  $_SESSION['Survival'] +  $_SESSION['Wyrd'];
            echo "<li> Might of the Terrible Brute \r\n </li>";
            echo "<li> Overpowering Dread \r\n </li>" . $_SESSION['Presence'] +  $_SESSION['Intimidation'] +  $_SESSION['Wyrd'];
            echo "<li> Primal Glory \r\n </li>";
            echo "<li>Touch of Wrath \r\n</li>" . $_SESSION['Intelligence'] +  $_SESSION['Crafts'] +  $_SESSION['Wyrd'];
            echo "<li>Elemental Fury \r\n</li>";
            echo "<li>Oathbreaker's Punishment \r\n</li>" . $_SESSION['Wits'] +  $_SESSION['Empathy'] +  $_SESSION['Wyrd'];
            echo "<li>Red Revenge \r\n</li>";
            echo "<li>Relentless Pursuit \r\n</li>";
            echo "<li>Thief of Reason \r\n</li>" . $_SESSION['Presence'] +  $_SESSION['Subterfuge'] +  $_SESSION['Wyrd'];


            break;
        case 'Crown':
            echo "<ul>";
            echo "<li>Hostile Takeover \r\n </li>";
            echo "<li>Mask of Superiority \r\n </li>" . $_SESSION['Presence'] +  $_SESSION['Subterfuge'] +  $_SESSION['Wyrd'];
            echo "<li>Paralyzing Presence \r\n </li>" . $_SESSION['Presence'] +  $_SESSION['Intimidation'] +  $_SESSION['Wyrd'];
            echo "<li>Summon the Loyal Servant \r\n</li>";
            echo "<li>Tumult \r\n </li>" . $_SESSION['Presence'] +  $_SESSION['Empathy'] +  $_SESSION['Wyrd'];
            echo "<li>Discreet Summons \r\n </li>" . $_SESSION['Manipulation'] +  $_SESSION['Persuasion'] +  $_SESSION['Wyrd'];
            echo "<li>Mastermind's Gambit \r\n</li>";
            echo "<li>Pipes of the Beastcaller \r\n</li>" . $_SESSION['Manipulation'] +  $_SESSION['AnimalKen'] +  $_SESSION['Wyrd'];
            echo "<li>The Royal Court \r\n</li>";
            echo "<li>Spinning Wheel \r\n</li>" . $_SESSION['Intelligence'] +  $_SESSION['Occult'] +  $_SESSION['Wyrd'];
            break;
        case 'Jewels':
            echo "<ul>";
            echo "<li>Blessing of Perfection \r\n</li>";
            echo "<li>Changing Fortunes \r\n</li>" . $_SESSION['Wits'] +  $_SESSION['Occult'] +  $_SESSION['Wyrd'];
            echo "<li>Light Shy \r\n</li>";
            echo "<li>Murkblur \r\n</li>" . $_SESSION['Manipulation'] +  $_SESSION['Subterfuge'] +  $_SESSION['Wyrd'];
            echo "<li>Trivial Reworking \r\n</li>";
            echo "<li>Changeling Hours \r\n</li>";
            echo "<li>Dance of the Toys \r\n</li>" . $_SESSION['Manipulation'] +  $_SESSION['Crafts'] +  $_SESSION['Wyrd'];
            echo "<li>Hidden Reality \r\n</li>";
            echo "<li>Stealing the Solid Reflection \r\n</li>" . $_SESSION['Strength'] +  $_SESSION['Larceny'] +  $_SESSION['Wyrd'];
            echo "<li>Tatterdemalion's Workshop \r\n</li>";
            break;

        case 'Mirror':
            echo "<ul>";
            echo "<li>Glimpse of a Distant Mirror \r\n </li>";
            echo "<li>Know the Competition \r\n </li>" . $_SESSION['Manipulation'] +  $_SESSION['Socialize'] +  $_SESSION['Wyrd'];
            echo "<li>Portents and Visions \r\n </li>" . $_SESSION['Manipulation'] +  $_SESSION['Occult'] +  $_SESSION['Wyrd'];
            echo "<li>Read Lucidity \r\n </li>" . $_SESSION['Manipulation'] +  $_SESSION['Empathy'] +  $_SESSION['Wyrd'];
            echo "<li>Walls Have Ears \r\n </li>";
            echo "<li>Props and Scenery \r\n </li>" . $_SESSION['Manipulation'] +  $_SESSION['Persuasion'] +  $_SESSION['Wyrd'];
            echo "<li>Reflections of the Past \r\n </li>" . $_SESSION['Intelligence'] +  $_SESSION['Occult'] +  $_SESSION['Wyrd'];
            echo "<li>Riddle-Kith \r\n </li>" . $_SESSION['Manipulation'] +  $_SESSION['Larceny'] +  $_SESSION['Wyrd'];
            echo "<li>Skinmask \r\n </li>";
            echo "<li>Unravel the Tapestry \r\n </li>" . $_SESSION['Wits'] +  $_SESSION['Occult'] +  $_SESSION['Wyrd'];
            break;
            
            case 'Shield':
                echo "<ul>";
                echo "<li>Cloak of Night \r\n </li>";
                echo "<li>Fae Cunning \r\n </li>";
                echo "<li>Shared Burden \r\n </li>";
                echo "<li>Thorns and Brambles \r\n </li>";
                echo "<li>Trapdoor Spider's Trick \r\n </li>";
                echo "<li>Fortifying Presence \r\n </li>" . $_SESSION['Presence'] +  $_SESSION['Empathy'] +  $_SESSION['Wyrd'];
                echo "<li>Hedgewall \r\n </li>" . $_SESSION['Intelligence'] +  $_SESSION['Survival'] +  $_SESSION['Wyrd'];
                echo "<li>Pure Clarity \r\n </li>" . $_SESSION['Resolve'] +  $_SESSION['Composure'] +  $_SESSION['Wyrd'];
                echo "<li>Whispers of Morning \r\n </li>";
                echo "<li>Vow of No Compromise \r\n </li>";
                break;
        
        case 'Steed':
            echo "<ul>";
            echo "<li>Boon of the Scuttling Spider \r\n </li>";
            echo "<li>Dreamsteps \r\n </li>" . $_SESSION['Intelligence'] +  $_SESSION['Empathy'] +  $_SESSION['Wyrd'];
            echo "<li>Nevertread \r\n </li>";
            echo "<li>Pathfinder \r\n </li>";
            echo "<li>Seven-League Leap \r\n </li>";
            echo "<li>Chrysalis \r\n </li>";
            echo "<li>Flickering Hours \r\n </li>" . $_SESSION['Wits'] +  $_SESSION['Occult'] +  $_SESSION['Wyrd'];
            echo "<li>Leaping Towards Nightfall \r\n </li>" . $_SESSION['Intelligence'] +  $_SESSION['Occult'] +  $_SESSION['Wyrd'];
            echo "<li>Mirror Walk \r\n </li>" . $_SESSION['Wits'] +  $_SESSION['Survival'] +  $_SESSION['Wyrd'];
            echo "<li>Talon and Wing \r\n </li>";
            break;
    }

    switch ($_SESSION['FaveReg']) {

        case 'Sword':
            echo "<li> Elemental Weapon \r\n </li>" . $_SESSION['Presence'] +  $_SESSION['Survival'] +  $_SESSION['Wyrd'];
            echo "<li> Might of the Terrible Brute \r\n </li>";
            echo "<li> Overpowering Dread \r\n </li>" . $_SESSION['Presence'] +  $_SESSION['Intimidation'] +  $_SESSION['Wyrd'];
            echo "<li> Primal Glory \r\n </li>";
            echo "<li>Touch of Wrath \r\n</li>" . $_SESSION['Intelligence'] +  $_SESSION['Crafts'] +  $_SESSION['Wyrd'];
            echo "<li>Elemental Fury \r\n</li>";
            echo "<li>Oathbreaker's Punishment \r\n</li>" . $_SESSION['Wits'] +  $_SESSION['Empathy'] +  $_SESSION['Wyrd'];
            echo "<li>Red Revenge \r\n</li>";
            echo "<li>Relentless Pursuit \r\n</li>";
            echo "<li>Thief of Reason \r\n</li>" . $_SESSION['Presence'] +  $_SESSION['Subterfuge'] +  $_SESSION['Wyrd'];
            echo "</ul>";

            break;
        case 'Crown':
            echo "<li>Hostile Takeover \r\n </li>";
            echo "<li>Mask of Superiority \r\n </li>" . $_SESSION['Presence'] +  $_SESSION['Subterfuge'] +  $_SESSION['Wyrd'];
            echo "<li>Paralyzing Presence \r\n </li>" . $_SESSION['Presence'] +  $_SESSION['Intimidation'] +  $_SESSION['Wyrd'];
            echo "<li>Summon the Loyal Servant \r\n</li>";
            echo "<li>Tumult \r\n </li>" . $_SESSION['Presence'] +  $_SESSION['Empathy'] +  $_SESSION['Wyrd'];
            echo "<li>Discreet Summons \r\n </li>" . $_SESSION['Manipulation'] +  $_SESSION['Persuasion'] +  $_SESSION['Wyrd'];
            echo "<li>Mastermind's Gambit \r\n</li>";
            echo "<li>Pipes of the Beastcaller \r\n</li>" . $_SESSION['Manipulation'] +  $_SESSION['AnimalKen'] +  $_SESSION['Wyrd'];
            echo "<li>The Royal Court \r\n</li>";
            echo "<li>Spinning Wheel \r\n</li>" . $_SESSION['Intelligence'] +  $_SESSION['Occult'] +  $_SESSION['Wyrd'];
            echo "</ul>";

            break;
        case 'Jewels':
            echo "<li>Blessing of Perfection \r\n</li>";
            echo "<li>Changing Fortunes \r\n</li>" . $_SESSION['Wits'] +  $_SESSION['Occult'] +  $_SESSION['Wyrd'];
            echo "<li>Light Shy \r\n</li>";
            echo "<li>Murkblur \r\n</li>" . $_SESSION['Manipulation'] +  $_SESSION['Subterfuge'] +  $_SESSION['Wyrd'];
            echo "<li>Trivial Reworking \r\n</li>";
            echo "<li>Changeling Hours \r\n</li>";
            echo "<li>Dance of the Toys \r\n</li>" . $_SESSION['Manipulation'] +  $_SESSION['Craft'] +  $_SESSION['Wyrd'];
            echo "<li>Hidden Reality \r\n</li>";
            echo "<li>Stealing the Solid Reflection \r\n</li>" . $_SESSION['Strength'] +  $_SESSION['Larceny'] +  $_SESSION['Wyrd'];
            echo "<li>Tatterdemalion's Workshop \r\n</li>";
            echo "</ul>";

            break;

        case 'Mirror':
            echo "<li>Glimpse of a Distant Mirror \r\n </li>";
            echo "<li>Know the Competition \r\n </li>" . $_SESSION['Manipulation'] +  $_SESSION['Socialize'] +  $_SESSION['Wyrd'];
            echo "<li>Portents and Visions \r\n </li>" . $_SESSION['Manipulation'] +  $_SESSION['Occult'] +  $_SESSION['Wyrd'];
            echo "<li>Read Lucidity \r\n </li>" . $_SESSION['Manipulation'] +  $_SESSION['Empathy'] +  $_SESSION['Wyrd'];
            echo "<li>Walls Have Ears \r\n </li>";
            echo "<li>Props and Scenery \r\n </li>" . $_SESSION['Manipulation'] +  $_SESSION['Persuasion'] +  $_SESSION['Wyrd'];
            echo "<li>Reflections of the Past \r\n </li>" . $_SESSION['Intelligence'] +  $_SESSION['Occult'] +  $_SESSION['Wyrd'];
            echo "<li>Riddle-Kith \r\n </li>" . $_SESSION['Manipulation'] +  $_SESSION['Larceny'] +  $_SESSION['Wyrd'];
            echo "<li>Skinmask \r\n </li>";
            echo "<li>Unravel the Tapestry \r\n </li>" . $_SESSION['Wits'] +  $_SESSION['Occult'] +  $_SESSION['Wyrd'];
            echo "</ul>";

            break;
            
            case 'Shield':
                echo "<li>Cloak of Night \r\n </li>";
                echo "<li>Fae Cunning \r\n </li>";
                echo "<li>Shared Burden \r\n </li>";
                echo "<li>Thorns and Brambles \r\n </li>";
                echo "<li>Trapdoor Spider's Trick \r\n </li>";
                echo "<li>Fortifying Presence \r\n </li>" . $_SESSION['Presence'] +  $_SESSION['Empathy'] +  $_SESSION['Wyrd'];
                echo "<li>Hedgewall \r\n </li>" . $_SESSION['Intelligence'] +  $_SESSION['Survival'] +  $_SESSION['Wyrd'];
                echo "<li>Pure Clarity \r\n </li>" . $_SESSION['Resolve'] +  $_SESSION['Composure'] +  $_SESSION['Wyrd'];
                echo "<li>Whispers of Morning \r\n </li>";
                echo "<li>Vow of No Compromise \r\n </li>";
                echo "</ul>";

                break;
        
        case 'Steed':
            echo "<li>Boon of the Scuttling Spider \r\n </li>";
            echo "<li>Dreamsteps \r\n </li>" . $_SESSION['Intelligence'] +  $_SESSION['Empathy'] +  $_SESSION['Wyrd'];
            echo "<li>Nevertread \r\n </li>";
            echo "<li>Pathfinder \r\n </li>";
            echo "<li>Seven-League Leap \r\n </li>";
            echo "<li>Chrysalis \r\n </li>";
            echo "<li>Flickering Hours \r\n </li>" . $_SESSION['Wits'] +  $_SESSION['Occult'] +  $_SESSION['Wyrd'];
            echo "<li>Leaping Towards Nightfall \r\n </li>" . $_SESSION['Intelligence'] +  $_SESSION['Occult'] +  $_SESSION['Wyrd'];
            echo "<li>Mirror Walk \r\n </li>" . $_SESSION['Wits'] +  $_SESSION['Survival'] +  $_SESSION['Wyrd'];
            echo "<li>Talon and Wing \r\n </li>";
            echo "</ul>";

            break;
    
    }
    
?>
