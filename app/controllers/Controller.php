<?php

namespace app\controllers;

use League\Plates\Engine;

class Controller
{
    public static function view($view, $data = [])
    {
        $viewPath = dirname(__FILE__, 2 ) . "/view";

        // Create new Plates instance
        $templates = new Engine($viewPath);

        // Render a template
        echo $templates->render($view, ['name' => 'Jonathan']);
    }
}
