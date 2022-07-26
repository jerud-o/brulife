<?php

require_once "vendor/autoload.php";
require_once "procedures/logic.php";

$baseDir = "templates/";

if (!$requestFromAPI) {
    switch (true) {
        case (
            (empty($uri[$baseIndex]) && count($uri) === ($baseIndex + 1))
            || ($uri[$baseIndex] === "home")
        ):
            include_once $baseDir . "home.php";
            break;
        case str_starts_with($uri[$baseIndex], "projects"):
            include_once $baseDir . "project.php";
            break;
        case str_starts_with($uri[$baseIndex], "project"):
            include_once $baseDir . "project-template.php";
            break;
        case str_starts_with($uri[$baseIndex], "partners"):
            $baseDir .= "partners/";

            switch ($uri[$baseIndex + 1]) {
                case "arvin":
                    include_once $baseDir . "aci.php";
                    break;
                case "devine":
                    include_once $baseDir . "dcr.php";
                    break;
                case "graymark":
                    include_once $baseDir . "graymark.php";
                    break;
                case "jarufarm":
                    include_once $baseDir . "jarufarm.php";
                    break;
                case "aemm":
                    include_once $baseDir . "aemm.php";
                    break;
                case "brucgt":
                    include_once $baseDir . "brucgt.php";
                    break;   
            }
            break;
        case $uri[$baseIndex] === "careers":
            include_once $baseDir . "careers.php";
            break;
        case $uri[$baseIndex] === "media":
            include_once $baseDir . "media.php";
            break;
        case $uri[$baseIndex] === "about":
            include_once $baseDir . "about-us.php";
            break;
        case $uri[$baseIndex] === "directors":
            include_once $baseDir . "directors.php";
            break;
        case $uri[$baseIndex] === "contact":
            include_once $baseDir . "contact.php";
            break;
        case $uri[$baseIndex] === "403":
            include_once $baseDir . "403.php";
            break;
        case $uri[$baseIndex] === "404":
            include_once $baseDir . "404.php";
            break;
        case str_starts_with($uri[$baseIndex], "test"):
            // Case for testing/debugging
            break;
        default:
            header("Location: " . APP_ROOT . "404");
            exit();
    }
}
?>
