
<?php
    switch ($_SESSION['Court']) {
        case 'Spring':
            echo "<ul>";
            echo "<li> Cupid's Arrow \r\n </li>";
            echo "<li> Dreams of the Earth \r\n </li>";
            echo "<li> Gift of Warm Breath \r\n </li>";
            echo "<li> Spring's Kiss \r\n </li>";
            echo "<li>Wyrd-Faced Stranger \r\n</li>";
            echo "<li>Blessing of Spring \r\n</li>";
            echo "<li>Gift of Warm Blood \r\n</li>";
            echo "<li>Pandora's Gift \r\n</li>";
            echo "<li>Prince of Ivy \r\n</li>";
            echo "<li>Waking the Inner Fae \r\n</li>";
            echo "</ul>";
        break;

        case 'Summer':
            echo "<ul>";
            echo "<li> Baleful Sense \r\n </li>";
            echo "<li> Child of the Hearth \r\n </li>";
            echo "<li> Helios' Light \r\n </li>";
            echo "<li> High Summer's Zeal \r\n </li>";
            echo "<li>Vigilance of Ares \r\n</li>";
            echo "<li>Fiery Tongue \r\n</li>";
            echo "<li>Flames of Summer \r\n</li>";
            echo "<li>Helios' Judgement \r\n</li>";
            echo "<li>Solstice Revelation \r\n</li>";
            echo "<li>Sunburnt Heart \r\n</li>";
            echo "</ul>";
        break;

        case 'Autumn':
            echo "<ul>";
            echo "<li> Autumn's Fury \r\n </li>";
            echo "<li> Last Harvest \r\n </li>";
            echo "<li> Tale of the Baba Yaga \r\n </li>";
            echo "<li> Twilight's Harbinger \r\n </li>";
            echo "<li>Witches' Intuition \r\n</li>";
            echo "<li>Famine's Bulwark \r\n</li>";
            echo "<li>Mien of Baba Yaga \r\n</li>";
            echo "<li>Riding the Falling Leaves \r\n</li>";
            echo "<li>Sorcerer's Rebuke \r\n</li>";
            echo "<li>Tasting the Harvest \r\n</li>";
            echo "</ul>";
        break;

        case 'Winter':
            echo "<ul>";
            echo "<li> The Dragon Knows \r\n </li>";
            echo "<li> Heart of Ice \r\n </li>";
            echo "<li> Ice Queen's Call \r\n </li>";
            echo "<li> Slipknot Dreams \r\n </li>";
            echo "<li>Touch of Winter \r\n</li>";
            echo "<li>Ermine's Winter Coat \r\n</li>";
            echo "<li>Fallow Fields \r\n</li>";
            echo "<li>Field of Regret \r\n</li>";
            echo "<li>Mantle of Frost \r\n</li>";
            echo "<li>Winter's Curse \r\n</li>";
            echo "</ul>";
        break;

        case 'Unaligned':
            echo "Good luck out there";
        break;
    }
