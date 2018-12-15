<?php

require_once 'csatlakozas.php';

$parancs = 'INSERT INTO accountok (felhNev, jelszo, email_cim, regio_az)'
        . ' VALUES ("'.$_POST["felhNev"].'", "'.$_POST["jelszo"].'",'
        . '"'.$_POST["email"].'", 3)';

if($csatlakozas -> query($parancs))
    {
     echo 'Köszönjük! Sikeresen regisztrált!';   
     echo '<br><a href="index.php">Bejelentkezés</a>';
    }
     else
         {
         echo 'Sikertelen feltöltés'.'<br>Hiba: '.$parancs;
         }
    
?>

