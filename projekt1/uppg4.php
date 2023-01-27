<?php
//Registeringshanteringen
if (!empty($_REQUEST["name"]) && isset($_REQUEST["email"])) {

    //Såhär använder vi test_input funktionen
    $skadligdata = $_REQUEST["name"];
    $ofarligdata = test_input($skadligdata);
    $email = test_input($_REQUEST("email"));

    print("Welcome " . $ofarligdata);

    //xss attack 
    print("<br>Your email address is: " . $_REQUEST["email"]);
}

    //Generera lösenord
    /*$pass = "6346346k356k3o46";
    mail($email, "Your password for denApp", $pass);
    print("signing up as ".$ofarligdata. "  Check your email for password");
    */
    // Quick hack för att tömma get informationen, html meta refresh
    
    
    //print("Du kmr att refreshas om 5sek");
    //header("refresh:5; url=index.php");

?>