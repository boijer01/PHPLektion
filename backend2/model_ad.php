<?php
$profile = test_input($_REQUEST['profiles']);
$sql = "SELECT *username, fullname, bio FROM profiles WHERE username = '$profile'";
$stmt = $conn->prepare($sql);
$stmt->execute($profile);

// Alternativ if synax i php
?>
<?php if ($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
    <div class='ad'>
        <strong>Profilen för användaren: "> <? $row['username'] ?> </strong> <br>
        
        Namn: <? $row['fullname'] ?> <br>
        Bio: <? $row['bio'] ?> <br> 
        
    </div>
    <?php endif; ?>