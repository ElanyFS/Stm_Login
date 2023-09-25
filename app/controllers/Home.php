<?php

namespace app\controllers;

class Home
{
    public function index()
    {

        // Controller::create('usuarios', ['name' => 'Maria Eduarda', 'email' => 'duda@gmail.com', 'password' => '123456']);

        $dataFromTable = Controller::select('usuarios');

        Controller::view('Login', ['data' => $dataFromTable]);
    }
}
