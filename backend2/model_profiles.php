<?php
$sql = "SELECT * FROM profiles";
$stmt = $conn->query($sql);
$result = $stmt->fetch(PDO::FETCH_ASSOC);
print("Användarnamn: ". $row['username']);

