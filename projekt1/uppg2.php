<?php
                $datum = date("d.M.Y");

                print("Dagens datum är: <br>" .$datum);
                //Arrays
                $veckodagar = array("Måndag","Tisdag","Onsdag","Torsdag","Fredag","Lördag","Söndag");
                print("<br>Idag är det veckodag nr: " .date("l"));
                print("<p>Förrsöker igen, är det veckodag nr: " .date("m")." då");

                print("<p>Veckodag nummer 01 betyder att det är " .$veckodagar[0] . "</p>")
?>