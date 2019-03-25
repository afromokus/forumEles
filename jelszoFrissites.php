<?php

require_once("csatlakozas.php");

if(isset($_POST["felhNev"]) && isset($_POST["ujJelszo"]) && isset($_POST["regiJelszo"]))
{
	$ujJelszo = $_POST["ujJelszo"];
	$regiJelszo = $_POST["regiJelszo"];


	$sql = 'UPDATE accountok SET jelszo = "'.$ujJelszo.'" WHERE jelszo = "'.$regiJelszo.'" AND felhNev = "'.$_POST["felhNev"]'";';

	$csatlakozas -> query($sql);	
}

	echo ($_POST["felhNev"]." ".$sql);

?>