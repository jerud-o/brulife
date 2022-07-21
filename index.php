<?php

define("APP_ROOT", "/" . basename(__DIR__) . "/");
$uri = explode("/", $_SERVER["REQUEST_URI"]);

switch (true) {
    case (empty($uri[2]) && count($uri) === 3)
        || (str_starts_with($uri[2], "home")):
        require_once "templates/home.php";
        break;
    case str_starts_with($uri[2], "projects"):
        require_once "templates/project.php";
        break;
    case str_starts_with($uri[2], "project"):
        
        break;
    case str_starts_with($uri[2], "partners"):
        switch (true) {
            case str_starts_with($uri[3], "aemm"):
                require_once "templates/partners/aemm.php";
                break;
            case str_starts_with($uri[3], "brucgt"):
                require_once "templates/partners/brucgt.php";
                break;
        }
        break;
    case str_starts_with($uri[2], "careers"):
        require_once "templates/careers.php";
        break;
    case str_starts_with($uri[2], "media"):
        require_once "templates/media.php";
        break;
    case str_starts_with($uri[2], "about"):
        require_once "templates/about-us.php";
        break;
    case str_starts_with($uri[2], "directors"):
        require_once "templates/directors.php";
        break;
    case str_starts_with($uri[2], "contact"):
        require_once "templates/contact.php";
        break;
    case str_starts_with($uri[2], "test"): {
        echo __DIR__;
        break;
    }
    default:
        require_once "templates/404.php";
}
