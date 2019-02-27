<!DOCTYPE html>

<html lang = "hu">
	<head>
		<link rel="stylesheet" type = "text/css" href = "zaroWeb.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	</head>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
	<script>
	</script>
	<body>			
		<div id = "felsoSor" class = "navDiv">
			<table id = "menuTabla">
				<tr>
					<td>
						<div id = "kommFelh" class = "kihuzas">
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
										echo '<br><a href="index.php">Vissza</a>';
										}
									
							?>
						</div>
					</td>
				</tr>
				<tr>
					<div class = "kihuzas">
						<td class = "folsoElem" ><button class = "menuGomb">Főoldal</button></td>
						<td class = "folsoElem"><button class = "menuGomb">Galéria</button></td>
						<td class = "folsoElem"><button class = "menuGomb">Témák keresése</button><img source"#"/></td>
						<td class = "folsoElem"><button class = "menuGomb">Statisztika</button></td>	
					</div>					
				</tr>
			</table>			
		</div>
		
		<span id = "alsoSor" class = "navDiv">
			<div class = "alsoElem"><button class = "menuGomb" onclick = "kilepes()">Kijelentkezés</button></div>
		</span>		
		
		<div id = "szoveg">
		
			<div class = "kepTarolo" id = "homadarKep">
			</div>
			<div class = "kepTarolo" id = "szarnyalasAFoldonKep">
			</div>
			<div class = "kepTarolo" id = "szeretetEsVedelemKep">
			</div>
			<div class = "kepTarolo" id = "teazasKep">
			</div>
			<div class = "kepTarolo" id = "tocsaLanyKep">
			</div>
			<div class = "kepTarolo" id = "velenceKep">
			</div>
			<div class = "kepTarolo" id = "vorosEgKep">
			</div>
		
		</div>
		<div id = "patreonLink">
			<a href= "#">Támogass minket a patreonon</a>
		</div>
	</body>
</html>