<?php
//start the session
session_start();
// allt möjlgt viktigt som vi använder ofta, sessionshantering, form validation, etc.


//En funktion som tar bort whitespace, backslashes och gör om < till html safe motsvarigheter.
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// Databaskonfiguration
$servrename = "localhost";
$dbname = "boijersi";
$username = "boijersi";
include "hemlis.php";
// hemlis.php ser ut såhär
// <?php $password = "sup3rh3mlis";

// Create connection
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); // Rekommenderas att lägga till
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>