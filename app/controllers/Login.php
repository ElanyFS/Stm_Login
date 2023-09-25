<?php

namespace app\controllers;

class Login
{
    public function indexLogin()
    {
        Controller::view('Login');
    }

    public function store()
    {
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        $user = Controller::find('usuarios', '*', 'email', $email);

        if($email == '' || $password == ''){
            throw new \Exception("Error Processing Request", 1);
        }

        if(!$user){
            echo "Usuário ou senha incorretos";
        }

        if(!password_verify($password, $user->password)){
            echo "senha incorretos";
        }

        // $_SESSION[]
    }
}
