<!DOCTYPE html>

<html lang = "hu">
	<head>
		<link rel="stylesheet" type = "text/css" href = "zaroWeb.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	</head>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
	<script>
	
		$(document).ready(function(){valtFoOldalNezetre()});
	
		function kilepes()
		{
			$.get("kijel.php");
			window.location.replace("index.php");
		}
		
		function valtGaleriaNezetre()
		{
			$("#szoveg").html('');
			$("#szoveg").html('<?php echo '<p id = "kepBekezdes"><div class = "kepTarolo" id = "homadarKep"></div><div class = "kepTarolo" id = "szarnyalasAFoldonKep"></div>	<div class = "kepTarolo" id = "szeretetEsVedelemKep"></div><div class = "kepTarolo" id = "teazasKep"></div><div class = "kepTarolo" id = "tocsaLanyKep"></div><div class = "kepTarolo" id = "velenceKep"></div><div class = "kepTarolo" id = "vorosEgKep"></div><div class = "kepTarolo" id = "homadarKep"></div><div class = "kepTarolo" id = "szarnyalasAFoldonKep"></div>	<div class = "kepTarolo" id = "szeretetEsVedelemKep"></div><div class = "kepTarolo" id = "teazasKep"></div><div class = "kepTarolo" id = "tocsaLanyKep"></div><div class = "kepTarolo" id = "velenceKep"></div><div class = "kepTarolo" id = "vorosEgKep"></div><div class = "kepTarolo" id = "homadarKep"></div><div class = "kepTarolo" id = "szarnyalasAFoldonKep"></div>	<div class = "kepTarolo" id = "szeretetEsVedelemKep"></div><div class = "kepTarolo" id = "teazasKep"></div><div class = "kepTarolo" id = "tocsaLanyKep"></div><div class = "kepTarolo" id = "velenceKep"></div><div class = "kepTarolo" id = "vorosEgKep"></div><div class = "kepTarolo" id = "homadarKep"></div><div class = "kepTarolo" id = "szarnyalasAFoldonKep"></div>	<div class = "kepTarolo" id = "szeretetEsVedelemKep"></div><div class = "kepTarolo" id = "teazasKep"></div><div class = "kepTarolo" id = "tocsaLanyKep"></div><div class = "kepTarolo" id = "velenceKep"></div><div class = "kepTarolo" id = "vorosEgKep"></div><div class = "kepTarolo" id = "homadarKep"></div><div class = "kepTarolo" id = "szarnyalasAFoldonKep"></div>	<div class = "kepTarolo" id = "szeretetEsVedelemKep"></div><div class = "kepTarolo" id = "teazasKep"></div><div class = "kepTarolo" id = "tocsaLanyKep"></div><div class = "kepTarolo" id = "velenceKep"></div><div class = "kepTarolo" id = "vorosEgKep"></div></p>'?>');
		}
		
		function valtFoOldalNezetre()
		{
			$("#szoveg").html('<?php echo '<p><h3>Az alap Lorem Ipsum bekezdést az 1500-as évek óta használják</h3>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p><p><h3>A de Finibus Bonorum et Malorum. 1.10.32-es bekezdését Cicerotól Kr. E. 45-ből.</h3>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p><p><h3>1914-es fordítás H. Racham-tól</h3>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"</p><p><h3>A de Finibus Bonorum et Malorum. 1.10.33-es bekezdését Cicerotól Kr. E. 45-ből.</h3>"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."</p><p><h3>1914-es fordítás H. Racham-tól</h3>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains."</p>'?>');
		}
		
	</script>
	<body>			
		<div id = "felsoSor" class = "navDiv">
			<table id = "menuTabla">
							 <?php
									require_once 'csatlakozas.php';
									
									$sikeresBelepes = false;
									
									if(isset($_POST["felhNev"]) && isset($_POST["jelszo"]))
									{
									while($felhasznaloAdatokEgySora = $accountok -> fetch_assoc())
										{
										if($felhasznaloAdatokEgySora["felhNev"] == $_POST["felhNev"] && $felhasznaloAdatokEgySora["jelszo"] == $_POST["jelszo"])
											{
											echo '<tr><td colspan = "4" id = "felhKomm" class = "folsoElem">Üdvözöljük '.$felhasznaloAdatokEgySora["felhNev"].'!</td></tr>';
											$sikeresBelepes = true;
											break;
											}
										}
									}
									
									if(!$sikeresBelepes)
										{
										echo '<tr><td colspan = "4" id = "felhKomm" class = "folsoElem"><button>Belépés</button></td></tr>';
										}
									
							?>
				<tr>
					<div class = "kihuzas">
						<td class = "folsoElem" ><button class = "menuGomb" onclick = "valtFoOldalNezetre()">Főoldal</button></td>
						<td class = "folsoElem"><button class = "menuGomb" onclick = "valtGaleriaNezetre()">Galéria</button></td>
						<td class = "folsoElem"><button class = "menuGomb">Témák keresése <span id = "keresesKep">&nbsp	</span></button></td>
						<td class = "folsoElem"><button class = "menuGomb">Statisztika</button></td>	
					</div>					
				</tr>
			</table>			
		</div>
		
		<span id = "alsoSor" class = "menuGomb">
			<div class = "alsoElem"><button class = "menuGomb" onclick = "kilepes()">Kijelentkezés</button></div>
		</span>
		
		
		<div id = "szoveg">
		</div>
		
		<div id = "patreonLink">
			<a href= "https://www.patreon.com/" target = "_blank">Támogass minket a patreonon</a>
		</div>
	</body>
</html>