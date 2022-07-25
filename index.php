<?php

define("APP_ROOT", "/" . basename(__DIR__) . "/");
$uri = explode("/", $_SERVER["REQUEST_URI"]);
require_once "procedures/config.php";
require_once "procedures/utility.php";
require_once "models/Project.php";
$conn = createConnection();
$query = $stmt = "";

switch (true) {
    case (
        empty($uri[2]) && count($uri) === 3)
        || (str_starts_with($uri[2], "home")
    ):
        $projectArray = array();
        $query = "SELECT * FROM project LIMIT 10";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        
        foreach ($stmt as $row) {
            array_push($projectArray, new Project($row));
        }

        require_once "templates/home.php";
        break;
    case str_starts_with($uri[2], "projects"):
        $projectArray = array();
        $query = "SELECT * FROM project";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        
        foreach ($stmt as $row) {
            array_push($projectArray, new Project($row));
        }

        if (!empty($_GET)) {
            $filters = array('all', 'subdivision', 'business bldg.', 'hospital', 'malls', 'industrial', 'agricultural');

            if (isset($_GET['filter']) && in_array($_GET['filter'], $filters)) {
                $_GET['filter'] = htmlspecialchars(strtolower($_GET['filter']));

                if ($_GET['filter'] != "all") {
                    $filteredProjectArray = array();

                    foreach ($projectArray as $var) {
                        if (in_array($_GET['filter'], $var->tags)) {
                            array_push($filteredProjectArray, $var);
                        }
                    }
                } else {
                    $filteredProjectArray = $projectArray;
                }
            }

            if (count($filteredProjectArray) % 10) {
                $pages = (count($filteredProjectArray) / 10) + 1;
            } else {
                $pages = count($filteredProjectArray) / 10;
            }

            if (isset($_GET['p']) && $_GET['p'] >= 1 && $_GET['p'] <= $pages) {
                $projectArrayFinal = array();
                $start = ($_GET['p'] - 1) * 10;
                $end = $start + 10;

                if ($end > count($filteredProjectArray)) {
                    $end = count($filteredProjectArray);
                }

                for ($i = $start; $i < $end; $i++) {
                    array_push($projectArrayFinal, $filteredProjectArray[$i]);
                }
            }
        } else {
            header("Location: " . APP_ROOT . "projects?p=1&filter=all");
            exit();
        }

        require_once "templates/project.php";
        break;
    case str_starts_with($uri[2], "project"):
        $query = "SELECT * FROM project WHERE ID = ?";
        $stmt = $conn->prepare($query);
        $stmt->execute([base64_decode($uri[3])]);
        $project = new Project($stmt->fetch());

        require_once "templates/project-template.php";
        break;
    case str_starts_with($uri[2], "partners"):
        switch (true) {
            case str_starts_with($uri[3], "aemm"):
                require_once "templates/partners/aemm.php";
                break;
            case str_starts_with($uri[3], "brucgt"):
                require_once "templates/partners/brucgt.php";
                break;
            case str_starts_with($uri[3], "jarufarm"):
                require_once "templates/partners/jarufarm.php";
                break;
            case str_starts_with($uri[3], "graymark"):
                require_once "templates/partners/graymark.php";
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
