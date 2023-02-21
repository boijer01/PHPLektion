<?php
    $datum = date("d.M.Y");
    print("<p>Dagens datum är: <br>" . $datum . "</p>");
    // Arrays
    $veckodagar = array("Måndag", "Tisdag", "Onsdag", "Torsdag", "Fredag", "Lördag", "Söndag");
    print("<p>Idag är det veckodag nummer: " . date("l") . "</br>");
    print("Nytt försök, är det veckodag nummer " . date("m") . "då?</br>");
    print("Veckodag nummer 01 betyder att det är " . $veckodagar[1] . "</p>");
    ?>