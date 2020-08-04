<?php
    require_once("rend.php");
	
    $header = new Render(array("html" => "header.html", "param" => array("first" => "Login", "second" => "Register", "third" => "About")));
    $footer = new Render(array("html" => "footer.html"));
    $register = new Render(array("html" => "register.html"));
    echo $header->getHtml();
    echo $register->getHtml();
    echo $footer->getHtml();
?>