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
$servername = "localhost";
$dbname = "boijersi";
$username = "boijersi";
include "hemlis.php";
// hemlis.php ser ut såhär
// <?php $password = "sup3rh3mlis";

// Create connection 
//mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); // Rekommenderas att lägga till


// Check connection
try {
  // set the PDO error mode to exception
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>

