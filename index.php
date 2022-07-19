<?php

define("WEB_ROOT", "/brulife/");
$uri = explode("/", $_SERVER["REQUEST_URI"]);

switch(true) {
    case empty($uri[2]) && count($uri) === 3:
        require_once "home.php";
        break;
    case "projects" === $uri[2]:
        require_once "up-pro.php";
        break;
    case "partners" === $uri[2]:
        // NESTED CONDITION
        break;
    case "careers" === $uri[2]:
        require_once "careers.php";
        break;
    case "media" === $uri[2]:
        require_once "media.php";
        break;
    case "about" === $uri[2]:
        require_once "about-us.php";
        break;
    case "directors" === $uri[2]:
        require_once "directors.php";
        break;
    case "contact" === $uri[2]:
        require_once "contact.php";
        break;
    default:
        require_once "404.php";
        echo " (error from front controller)";
}
?>