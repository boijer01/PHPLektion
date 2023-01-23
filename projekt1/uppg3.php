

<?php 
    //Empty och isset är praktiska
    //$_GET är en superglobal
    //$_REQUEST är en superglobal som innehåller både $_GET och $_POST

    if(!empty($_REQUEST["name"]) && isset($_REQUEST["email"])) {
        print ("Welcome " . $_REQUEST["name"]);
        print("<br>Your email address is: " . $_REQUEST["email"]);
    }
?> 
