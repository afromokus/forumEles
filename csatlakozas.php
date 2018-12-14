<?php
    $csatlakozas = new mysqli('127.0.0.1', 'szoftverf', 'szoftverf', '3DLab', '3306');
    
    if($csatlakozas -> errno)
        {
        die('Sikertelen csatlakozás');
        }
        
    $accountok = $csatlakozas ->query('SELECT * FROM accountok');
        
?>
