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

function isEmailValid($email)
{
    $checkStart = str_starts_with($email, ".");
    $checkLen = (strlen($email) > 16);
    $findAt = substr_count($email, "@");
    $findDots = str_contains($email, "..");
    $isValid = (
        !$checkStart
        || $checkLen
        || $findAt === 1
        || $findDots === 0
    );
    
    return $isValid;
}
?>