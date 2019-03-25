<?php

require_once("csatlakozas.php");

if(isset($_POST["felhNev"]) && isset($_POST["ujJelszo"]) && isset($_POST["regiJelszo"]))
{
	$ujJelszo = $_POST["ujJelszo"];
	$regiJelszo = $_POST["regiJelszo"];


	$sql = 'UPDATE accountok SET jelszo = "'.$ujJelszo.'" WHERE jelszo = "'.$regiJelszo.'" AND felhNev = "'.$_POST["felhNev"].'"';
	

	$csatlakozas -> query($sql);	
}

	/*$valasz = http_post_data("felhNev", $_POST["felhNev"]);	
	$felhNevPost = new HTTPRequest($valasz, HTTP_METH_POST);
	
	$valasz = http_post_data("jelszo", $_POST["ujJelszo"]);	
	$jelszoPost = new HTTPRequest($valasz, HTTP_METH_POST);
	
	$felhNevPost -> send();
	$jelszoPost -> send();*/

	echo ($csatlakozas -> affected_rows);

?>