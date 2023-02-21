<?php
// (Koppla till databas)
// kolla om man fyllt i loginformuläret 
if (!empty($_REQUEST['username'] && $_REQUEST['pass'])) {
    $username = test_input($_REQUEST['username']);
    $pass = test_input($_REQUEST['pass']); // samma php variabel som användes i conn?
    //Kom ihåg att hasha lösenordet!

    //formulera SQL statement
    $sql = "SELECT username, password FROM profiles WHERE username='$username' AND password = '$pass'";
    //skydda för sql injection (prepared statement!)
    $statement = $conn->prepare($sql);
    $statement->blind_param("ss", $user, $pass);

    if ($statement->execute()) {
        print("Du har registerats!");
        
    //Om lyckad login, spara användarnamn i sessionsvariabel
    // Refresha sidan om 5 sek (för att fixa form i resubmission problemet)

    } 
    else {
        print("Nice try!");
    }


}
