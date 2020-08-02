<?php
	require_once("rend.php");
	
	$header = new Render(array("html" => "header.html", "param" => array("first" => "Login", "second" => "Register", "third" => "About")));
	$main = new Render(array("html" => "main.html", "param" => array()));
	echo $header->getHtml();
	echo $main->getHtml();

?>
