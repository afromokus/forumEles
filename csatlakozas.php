<?php
    $csatlakozas = new mysqli('127.0.0.1', 'root', '', 'Lab3d', '3306');
    
    if($csatlakozas -> errno)
        {
        die('Sikertelen csatlakozás');
        }
        
    $accountok = $csatlakozas -> query('SELECT * FROM accountok');
        
?>
