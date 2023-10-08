<?php

namespace App\Controllers;

use App\Core\Request;
use App\Core\Controller;
use App\Core\Application;

class AuthController extends Controller
{
    public function login()
    {
        $this->setLayout('auth');
        $view = $this->render('login');
        echo $view;
    }

    public function register()
    {
        $this->setLayout('auth');
        $view = $this->render('register');
        echo $view;
    }
}
