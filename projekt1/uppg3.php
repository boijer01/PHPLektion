

<?php 
    //Empty och isset är praktiska
    //$_GET är en superglobal
    //$_REQUEST är en superglobal som innehåller både $_GET och $_POST

    if(!empty($_REQUEST["name"]) && isset($_REQUEST["email"])) {

        //Såhär använder vi test_input funktionen
        $skadligdata = $_REQUEST["name"];
        $ofarligdata = test_input($skadligdata);

        print ("Welcome " . $ofarligdata);

        //xss attack 
        print("<br>Your email address is: " . $_REQUEST["email"]);
    }

    //Lite övningar med time() och mktime()
    if(!empty($_REQUEST["name"])) {

    $dag = test_input($_REQUEST["name"]);
    print("<p>Du matade in dagen #" . $dag . "</p>");

    $tidnu = time();
    print("Just nu är det " . $tidnu . " sekunder sedan 1970-01-01 00:00:00 UTC");

    $inmatadTid = mktime(12,01,0,1,$dag,2023);
    print("<br>Du undrar ifall " . $inmatadTid . " är i framtiden eller i det förflutna");
    }
?> 
