
							 <?php
									require_once 'csatlakozas.php';
									
									session_start();
									$_SESSION["siekersE"] = false;
									
									if(isset($_POST["felhNev"]) && isset($_POST["jelszo"]))
									{
									while($felhasznaloAdatokEgySora = $accountok -> fetch_assoc())
										{
										if($felhasznaloAdatokEgySora["felhNev"] == $_POST["felhNev"] && $felhasznaloAdatokEgySora["jelszo"] == $_POST["jelszo"])
											{
											echo '<tr><td colspan = "4" class = "folsoElem">Üdvözöljük '.$felhasznaloAdatokEgySora["felhNev"].'!</td></tr>';
											$_SESSION["siekersE"] = true;
											break;
											}
										}
									}									
									if(!$_SESSION["siekersE"])
										{
											echo 'Érvénytelen felhasználónév, vagy jelszó!';						echo '<br><a href="index.php">Vissza</a>';									
										}
									
							?>