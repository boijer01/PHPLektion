<?php
// (Koppla till databas)
// Kolla om man fyllt i loginformuläret
if (!empty($_REQUEST['username']) && !empty($_REQUEST['pass'])) {
    // Köra input genom XSS protection
    $user = test_input($_REQUEST['username']); // samma php variabel som användes i conn?
    $pass = test_input($_REQUEST['pass']);
    // Kom ihåg! Hasha lösenordet!

    // Formulera SQL statement
    $sql = "SELECT username,password FROM profiles WHERE username=? AND password=?";
    
    // Skydd för SQL injection (prepared statement!)
    $stmt = $conn->prepare($sql);
    //$stmt->bind_param("ss", $user, $pass); Behövs ej, bytt yill PDO
    
    // execute() returnerar FALSE on failure
    if ($stmt->execute($user, $pass)) { //New and improved i och med PDO
        // Prepare, bind_param och execute returnar alla bara true eller false.
        // För att hämta datan måste vi använda t.ex. get_result() för att få ett mysqli_result objekt som med query()
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        // $result är ett mysqli_result objekt och har egenskapen num_rowss
        if ($result) {
            print("Användarnamn och lösenord korrekt!");
            $_SESSION['username'] = $user;
        }        
        // Om lyckad login, spara användarnamn i sessionsvariabel :)
        // Refresha sidan om 5 sek (för att fixa form resubmission problemet)
    }
    else {
        print("Nice try!");
    }
}
