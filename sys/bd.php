<?php
if(!isset($link)){
	$hostname="localhost";
	$database="sysweb_";
	$bd_user="sysweb_user";
	$bd_pass="Nktb9&78";
	$link = new mysqli($hostname, $bd_user,$bd_pass, $database);
}

?>