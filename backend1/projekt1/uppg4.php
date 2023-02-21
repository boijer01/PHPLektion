<?php
// Registreringshanteringen
if(!empty($_REQUEST["name"]) && isset($_REQUEST["email"])) {

    // Såhär använder vi test_input funktionen
    $skadligdata = $_REQUEST["name"];
    $ofarligdata = test_input($skadligdata);
    $username = $ofarligdata;

    $email = test_input($_REQUEST["email"]);

    print("Welcome " . $username); 
    print("<br>Your email address is:" .$email."<br>"); 

    //To-Do: Generera lösenord
    $pass = "8907435jk4h35j544jkl";
    mail($email,"Your password for DenApp",$pass);
    print("Signing up as ".$username."... check your email for your password<br>");

    // Spara användarnamnet i sessionsvariabel så att vi kan hälsa på återkommande användare
    $_SESSION['username'] = $username;

    // Quick hack för att tömma get informationen, html meta refresh
    print("You will be redirected to the login page in 5 seconds");
    header("refresh:5; url=index.php");


}
?>