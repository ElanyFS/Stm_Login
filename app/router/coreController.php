<?php

function coreController($resultUri, $params){
    [$controller, $method] = explode("@", array_values($resultUri)[0]);

    $controllerPath = CONTROLLER_PATH . $controller;

    if(!class_exists($controllerPath)){
        throw new Exception("Controller {$controller} não está disponível.", 1);
    }

    $controllerInstance = new $controllerPath();

    if(!method_exists($controllerInstance, $method)){
        throw new Exception("O método {$method} não está disponível no controller {$controller}.", 1);
    }

    return $controllerInstance->$method($params);
}