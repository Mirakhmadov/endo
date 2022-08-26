<?php


changeLangFront($_GET['lang']);

function changeLangFront($l) {

    $cookie_name = "lang";
    $cookie_value = strtolower($l);
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day


    echo 1;
}