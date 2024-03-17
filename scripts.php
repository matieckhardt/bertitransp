<?php
$url = $_SERVER['SCRIPT_NAME'];
$archivo = basename($url);
$seccion = substr($archivo, 0, -4);
//
if (isset($_SERVER['HTTP_REFERER'])) {
	$url_previa = $_SERVER['HTTP_REFERER'];
} else {
	$url_previa = '';
}
?>