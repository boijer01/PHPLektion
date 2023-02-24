<?php
$username = $_SESSION['username']; //Hämta användarnamnet från sessionen
print ($username."'s profile"); 
$sql = "SELECT * FROM profiles WHERE username = ?";
$stmt = $conn->prepare($sql); // returnerar pdo statement objekt
try {
    $stmt->execute([$username]);
    ?>
    <form action="profile.php" method="get"></form>
        fullname <input type="text" name="fullname" value="<?= $result['realname'] ?>"> <br>
        <input type="submit" value="uppdatera profil">
</form>
        <?php
}
catch (PDOException $e){
    echo "Något gick fel: ". $e->getMessage();
}