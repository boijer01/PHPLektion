
<?php
if (isset($_SESSION['username'])) {
    print("Välkommen tillbaka ".$_SESSION['username']);

    $katalog = "pictures/";
    $bilder = scandir($katalog);
    //print_r($bilder);
  
    //Printar ut bilden på sidan
    print('<img src="pictures/'.$bilder[2].'" alt="Profilbild">');
}
?>



