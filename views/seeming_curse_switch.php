
<?php
//this functions as the seeming blessing switch
    switch ($Seeming) {
        case 'Beast':
            echo "
            <h2> Curse </h2>
            Risk Clarity damage at half Wyrd when hasty or careless decisions harm others.
            ";
            break;

        case 'Darkling':
            echo "
            <h2> Curse </h2>
            Risk Clarity damage at half Wyrd when a secret you know turns out false.

            ";
            break;

        case 'Elemental':

            echo "
            <h2> Curse </h2>
            Risk Clarity damage at half Wyrd when browbeat or coerced into a course of action.

            ";
            break;

        case 'Fairest':

            echo "
            <h2> Curse </h2>
            Risk Clarity damage at half Wyrd when your actions are responsible for harming your allies.

            ";
            break;
        
        case 'Ogre':

            echo "
            <h2> Curse </h2>
            Risk Clarity damage at half Wyrd when those who aren't your enemies cower from you.

            ";
            break;
        
        case 'Wizened':

            echo "
            <h2> Curse </h2>
            Risk Clarity damage at half Wyrd when taken off-guard by unpleasant surprise.

            ";
            break;
    }

?>
