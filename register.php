<?php
    require_once("rend.php");
	
    $header = new Render(array("html" => "header.html", "param" => array("first" => "Login", "second" => "Register", "third" => "About")));
    $footer = new Render(array("html" => "footer.html"));
    $register = new Render(array("html" => "register.html"));
    echo $header->getHtml();
    echo $register->getHtml();
    echo $footer->getHtml();
    for ($i = 1; $i <= 100; $i++) {
        $top = "70%";
        $left = "70%";
        echo '<img style = "top: '.  rand(10, 100).'%; left: ', rand(10, 100). '%;"'

         .' class = '.'"d1">'.'</div>';
    }
    // while(1) {
    //     $top = "70%";
    //     $left = "70%";
    //     echo '<img style = "top: '.  rand(10, 100).'%; left: ', rand(10, 100). '%;"'

    //      .' class = '.'"d1">'.'</div>';
    // }
?>