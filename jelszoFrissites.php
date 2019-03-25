<?php

require_once("csatlakozas.php");

if(isset($_POST["felhNev"]) && isset($_POST["ujJelszo"]))
{
	$ujJelszo = $_POST["ujJelszo"];

	$sql = 'UPDATE accountok SET jelszo = "'.$ujJelszo.'" WHERE felhNev = '.'\''.$_POST["felhNev"].'\'';

	$csatlakozas -> query($sql);	
}

	echo ($_POST["felhNev"]." ".$sql);

?>