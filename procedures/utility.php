<?php

function json($var) {
    header("Content-Type: application/json");
    echo json_encode($var);
    die();
}

function debug($var) {
    header("Content-Type: text/plain");
    var_dump($var);
    die();
}

?>