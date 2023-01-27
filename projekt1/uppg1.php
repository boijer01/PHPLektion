<?php

//Hälsa på återkommande användare
print("Välkommen tillbaka ".$_SESSION['username']);

print("<p>Servern snurrar på port " .$_SERVER['REMOTE_PORT'] . ", som vanligt med https och apache.");