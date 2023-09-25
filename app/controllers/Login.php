<?php

namespace app\controllers;

class Login
{
    public function indexLogin()
    {
        Controller::view('Login');
    }

    public function login()
    {
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        $user = Controller::find('usuarios', '*', 'email', $email);

        // var_dump($user);
        // die();

        if ($email == '' || $password == '') {
            throw new \Exception("Error Processing Request", 1);
        }

        if (!$user) {
            throw new \Exception("Usuário ou senha incorretos", 1);
        }

        if (!$password === $user->password) {
            throw new \Exception("Senha incorretos", 1);
        }

        Controller::view('index', ["data" => $_SESSION[LOGGED] = $user]);
    }

    public function destroy()
    {
        unset($_SESSION[LOGGED]);
        Controller::view('Login');
    }

    public function store(){
        $dados = filter_input_array(INPUT_POST, [
            'name' => FILTER_SANITIZE_STRING,
            'email'    => FILTER_VALIDATE_EMAIL,
            'password' => FILTER_SANITIZE_STRING,
        ]);

        Controller::create('usuarios', $dados);
    }
}
