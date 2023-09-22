<?php

return [
    'GET' => [
        '/' => "Home@index",
        '/create/[0-9]+' => "Home@create",
        // '/show/[0-9]+' =>"Home@index"
    ],
    'POST' => []
];
