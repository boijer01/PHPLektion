
<?php
if (isset($_SESSION['username'])) {
    print("Välkommen tillbaka ".$_SESSION['username']);
}

?>