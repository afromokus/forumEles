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
                <form class="urlap">
                    <div id="formElemek" class="beljebbKezdes">
                        <input class="kitoltendoMezo" type='text' placeholder="Felhasználói név">
                        <br>
                        <input id="jelszo" class="kitoltendoMezo" type="password" placeholder="Jelszó">
                        <br>
                            <input type="submit" class="btn btn-sm btn-primary" value="Mehet"
                                   disabled="disabled">
                    </div>
                </form>
            </div>
        </div>
        <?php
        require_once 'csatlakozas.php';
        ?>
        <script>
            
        </script>
    </body>
</html>
