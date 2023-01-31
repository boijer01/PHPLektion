
<?php
if (isset($_SESSION['username'])) {
    print("Välkommen tillbaka ".$_SESSION['username']);

    $katalog = "pictures/";
    $bilder = scandir($katalog);
    print_r($bilder);
}
?>