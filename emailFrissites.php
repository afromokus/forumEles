<?php

require_once("csatlakozas.php");

if(isset($_POST["felhNev"]) && isset($_POST["ujEmail"]) && isset($_POST["jelszo"]))
{
	$ujEmail = $_POST["ujEmail"];
	$jelszo = $_POST["jelszo"];

	$sql = 'UPDATE accountok SET email_cim = "'.$ujEmail.'" WHERE jelszo = "'.$jelszo.'" AND felhNev = "'.$_POST["felhNev"].'"';

	$csatlakozas -> query($sql);

	if($csatlakozas -> affected_rows >= 0)
	{
		echo ($csatlakozas -> affected_rows);
	}
	else
	{
		echo ($sql);
	}
	
}

?>