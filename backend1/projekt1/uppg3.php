
<?php 
    // Lite övningar med time() och mktime()
    if(!empty($_REQUEST["day"]) && !empty($_REQUEST["month"])) {

        $day = test_input($_REQUEST["day"]);
        $month = test_input($_REQUEST["month"]);
        print("<p>Du matade in dagen #". $day . " i månaden ". $month ."<br>");

        $tidnu = time();
        print("Just nu är det " . $tidnu . " sekunder sedan tidens begynnelse<br>");

        $inmatadtid = mktime(12, 01, 00, $month, $day, 2023);
        print("Du undrar ifall " .$inmatadtid . " är i framtiden eller det förflutna?<br>");

        // To-Do: Logiken!!
        $diff = $tidnu - $inmatadtid;
        print("Differensen är ".$diff." sekunder");

    }

?>