<?php

return [
    'GET' => [
        '/' => "Login@indexLogin",
        
        '/create/[0-9]+' => "Home@create",
        // '/show/[0-9]+' =>"Home@index"
    ],
    'POST' => [
        '/login/autenticacao' => 'Login@store',
    ]
];
