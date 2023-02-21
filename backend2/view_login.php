<h2>Login</h2>
<p>Här kan du logga in på sajten</p>

<!--ToDo: loginformuläret -->
<form action="index.php" method="GET">
    användarnamn: <input type="text" name="username"><br>
    lösenord <input type="password" name="pass" ><br>
    <input type="submit" value="Logga in">
</form>
Inget konto? <a href="register.php">Registera dig här</a>
<?php include "./model_login.php";

