<?php

namespace config;

use PDO;
use PDOException;

function connection()
{
    try {
        return new PDO(
            "mysql:host={$_ENV['DATABASE_HOST']};dbname={$_ENV['DATABASE_NAME']}",
            "{$_ENV['DATABASE_USER']}",
            "{$_ENV['DATABASE_PASSWORD']}",
            [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ]
        );
    } catch (PDOException $e) {
        echo "ERROR: " . $e->getMessage();
    }
}
