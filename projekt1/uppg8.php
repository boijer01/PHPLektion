 <?php


$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");

//Skriv vem som besökte sidan
$ip = $_SERVER['REMOVTE_AADR'];
fwrite($myfile, $ip);
$txt = "John Doe\n";

$txt = "Jane Doe\n";
fclose($myfile);

//BROKEN
?> 

