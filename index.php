<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>3D Labirintus</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name='author' content="Kirsch János Márk">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="3DLabCasc.css"/>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    </head>
    <body class="jumbotron">
        <div class ='kozepre'>
            <div class="page-header">
                    <h1 class="beljebbKezdes">
                        <font class="felkoverSerif">
                        Bejelentkezés
                        </font>
                    </h1>
            </div>
            <div id="urlapTarolo" class="jumbotron">
                <form class="urlap" action="belepes.php" method="POST">
                    <div id="formElemek" class="beljebbKezdes">
                        <input name="felhNev" id="felhNevMezo" class="kitoltendoMezo" type='text' placeholder="Felhasználói név" onkeyup="ellenorzes()">
                        <span id="hibaFelh" class="hibaVisszaJelzes">                            
                        </span>
                        <a id="regGomb" href="regisztracio.php" tabindex="4">
                            Regisztráció
                        </a>
                        <br>
                        <input name="jelszo" id="jelszo" class="kitoltendoMezo" type="password" placeholder="Jelszó" onkeyup="ellenorzes()">
                        <span id="hibaJelszo" class="hibaVisszaJelzes">                            
                        </span>
                        <br>
                        <input id="gombMehet" type="submit" class="btn btn-sm btn-primary" value="Mehet"
                                   disabled="disabled">
                    </div>
                </form>
            </div>
        </div>
        <script>
            function felhNevEllenorzes()
            {
                if($('#felhNevMezo').val().length < 4)
                {
                    document.getElementById('hibaFelh').innerHTML = "Felhasználónév hossza nem megfelelő!";
                    return false;
                }
                else
                {
                    document.getElementById('hibaFelh').innerHTML = "";
                    return true;
                }  
            }
            
            function jelszoEllenorzes()
            {
                if($('#jelszo').val().length < 4)
                {
                    document.getElementById('hibaJelszo').innerHTML = "A jelszó nem megfelelő hosszúságú!";
                    return false;
                }
                else
                {
                    document.getElementById('hibaJelszo').innerHTML = "";
                    return true;
                }
            }            
            
            
            function ellenorzes()
            {
                if(felhNevEllenorzes() && jelszoEllenorzes())
                {
                    $('#gombMehet').prop('disabled', false);
                }
                else
                {
                    $('#gombMehet').prop('disabled', true);
                }
            }
            
        </script>
    </body>
</html>
