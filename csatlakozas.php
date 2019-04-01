<?php
    $csatlakozas = new mysqli('10.0.128.111', 'zarodolgozat', 'zarodolgozat', 'zarodolgozat_2018kirjan', '3306');
    
    if($csatlakozas -> errno)
        {
        die('Sikertelen csatlakozás');
        }
        
    $accountok = $csatlakozas -> query('SELECT * FROM accountok');
        
?>
