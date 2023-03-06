<?php
$username = $_SESSION['username']; //Hämta användarnamnet från sessionen
$recieverid = $_SESSION['reciever_id']; // Mottagaren av kommentaren -- duger användarnamnet?
$sql = "SELECT message FROM messages WHERE reciever_id = '$recieverid'";
$stmt = $conn->prepare($sql);
$stmt->execute($recieverid);

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
   print($row['sender'])?> Kommenterade: <?php print($row['message']);
}