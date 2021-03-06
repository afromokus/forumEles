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
                        Regisztráció
                        </font>
                    </h1>
            </div>
            <div id="urlapTarolo" class="jumbotron">
                <form class="urlap" action="sikeresregisztracio.php" method="POST">
                    <div id="formElemek" class="beljebbKezdes">
                        <input name="felhNev" id="felhNevMezo" class="kitoltendoMezo" type='text' placeholder="Felhasználói név" onkeyup="ellenorzes()"
                               required="required">
                        <span id="hibaFelh" class="hibaVisszaJelzes">                            
                        </span>
                        <br>
                        <input name="email" id="emailMezo" class="kitoltendoMezo" type='text' placeholder="E-mail cím" onkeyup="ellenorzes()">
                        <span id="hibaEmail" class="hibaVisszaJelzes" required="required">                            
                        </span>
                        <br>
                        <input name="jelszo" id="jelszo" class="kitoltendoMezo" type="password" placeholder="Jelszó" onkeyup="ellenorzes()">
                        <span id="hibaJelszo" class="hibaVisszaJelzes" required="required">                            
                        </span>
                        <br>
                        <input name="jelszoMeger" id="jelszoMegerMez" class="kitoltendoMezo" type="password" placeholder="Jelszó megerősítése" 
                               onkeyup="ellenorzes()" required="required">
                        <span id="hibaJelszoMeger" class="hibaVisszaJelzes">                            
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
            
            function emailEllenorzes()
            {			
				let ervenyesEmailEllenorzo = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
   
                if(!ervenyesEmailEllenorzo.test($('#emailMezo').val()))
					{
						document.getElementById('hibaEmail').innerHTML = "Érvénytelen e-mail cím!";
						return false;
					}
					else
					{
						document.getElementById('hibaEmail').innerHTML = "";
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
            
            function jelszoMegerEllenorzes()
            {
                if($('#jelszoMegerMez').val() !=  $('#jelszo').val())
                {
                    document.getElementById('hibaJelszoMeger').innerHTML = "A jelszavak nem egyeznek!";
                    return false;
                }
                else
                {
                    document.getElementById('hibaJelszoMeger').innerHTML = "";
                    return true;
                }
            }       
            
            
            function ellenorzes()
            {
                if(felhNevEllenorzes() && emailEllenorzes() && jelszoEllenorzes() && jelszoMegerEllenorzes())
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
