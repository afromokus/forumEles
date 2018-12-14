        <?php
        require_once 'csatlakozas.php';
        
        $sikeresBelepes = false;
        
        if(isset($_POST["felhNev"]) && isset($_POST["jelszo"]))
        {
        while($felhasznaloAdatokEgySora = $accountok -> fetch_assoc())
            {
            if($felhasznaloAdatokEgySora["felhNev"] == $_POST["felhNev"] && $felhasznaloAdatokEgySora["jelszo"] == $_POST["jelszo"])
                {
                echo 'Üdvözöljük '.$felhasznaloAdatokEgySora["felhNev"].'!';
                $sikeresBelepes = true;
                break;
                }
            }
        }
        
        if(!$sikeresBelepes)
            {
            echo 'Érvénytelen felhasználónév, vagy jelszó!';
            }
        
        ?>