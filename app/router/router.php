<?php

function fixedUri($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        return [$uri => $routes[$uri]]; // ["/"]=> string(10) "Home@index"
    }

    return [];
}

function dynamicUri($uri, $routes)
{
    return array_filter(
        $routes,
        function ($value) use ($uri) {
            $regex = str_replace("/", "\/", ltrim($value, '/'));
            return preg_match("/^$regex$/", ltrim($uri, "/"));
        },
        ARRAY_FILTER_USE_KEY
    );
}

function params($uri, $resultUri)
{
    if (!empty($resultUri)) {
        $macthedUri = array_keys($resultUri)[0]; ///show/[0-9]+

        return array_diff(
            explode("/", ltrim($uri, '/')),
            explode("/", ltrim($macthedUri, '/'))
        );
    }

    return [];
}

function router()
{
    try {
        $uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
        $requestMethod = $_SERVER["REQUEST_METHOD"];

        $routes = require_once('routes.php');

        if (!array_key_exists($requestMethod, $routes)) {
            throw new Exception("Método para rota indisponível.", 1);
        }

        $resultUri = fixedUri($uri, $routes[$requestMethod]);

        $params = [];

        if (empty($resultUri)) {
            $resultUri = dynamicUri($uri, $routes[$requestMethod]);
            $params = params($uri, $resultUri);
        }

        if (!empty($resultUri)) {
            return coreController($resultUri, $params);
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
