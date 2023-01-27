<?php
//Registeringshanteringen
if (!empty($_REQUEST["name"]) && isset($_REQUEST["email"])) {

    //Såhär använder vi test_input funktionen
    $skadligdata = $_REQUEST["name"];
    $ofarligdata = test_input($skadligdata);

    print("Welcome " . $ofarligdata);

    //xss attack 
    print("<br>Your email address is: " . $_REQUEST["email"]);
}
