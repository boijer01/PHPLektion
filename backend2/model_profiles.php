<?php
$sql = "SELECT * FROM profiles";
$stmt = $conn->query($sql); //Hämta alla profiler
$result = $stmt->fetch(PDO::FETCH_ASSOC);

// Annonser är klickbar så att man öppnar profilen för användaren
print("<a href='index.php?profiles='$result?['username']'><div class='ad'>");
print("Användarnamn: ". $result['username']);
print("</div></a>");

