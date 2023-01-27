

<?php


//Lite övningar med time() och mktime()
if (!empty($_REQUEST["day"]) && !empty($_REQUEST["month"])) {

    $dag = test_input($_REQUEST["day"]);
    print("<p>Du matade in dagen #" . $dag . "</p>");

    $tidnu = time();
    print("Just nu är det " . $tidnu . " sekunder sedan 1970-01-01 00:00:00 UTC");

    $inmatadTid = mktime(12, 01, 0, 1, $dag, 2023);
    print("<br>Du undrar ifall " . $inmatadTid . " är i framtiden eller i det förflutna");
}
?> 
