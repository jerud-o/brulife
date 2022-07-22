<?php

function createConnection(
    string $db_host = "192.168.1.86",
    string $database = "brulife",
    string $charset = "utf8mb4",
    string $db_username = "root",
    string $db_password = "",
    array $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ]
) {
    try {
        return new PDO(
            "mysql:host=$db_host;dbname=$database;charset=$charset",
            $db_username,
            $db_password,
            $options
        );
    } catch (\PDOException $e) {
        return new \PDOException($e->getMessage(), (int)$e->getCode());
    }
}
?>