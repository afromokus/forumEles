<?php

require_once("csatlakozas.php");

if(isset($_POST["felhNev"]) && isset($_POST["ujEmail"]))
{
	$ujEmail = $_POST["ujEmail"];

	$sql = 'UPDATE accountok SET email_cim = "'.$ujEmail.'" WHERE felhNev = '.'\''.$_POST["felhNev"].'\'';

	$csatlakozas -> query($sql);

	echo ($_POST["felhNev"]." ".$sql);
	
}

?>