<?php

return [
    'GET' => [
        '/' => "Login@indexLogin",
        'logout' => 'Login@destroy',
        '/create/[0-9]+' => "Home@create",
        // '/show/[0-9]+' =>"Home@index"
    ],
    'POST' => [
        '/login/autenticacao' => 'Login@login',
        '/register' => 'Login@store'
    ]
];
