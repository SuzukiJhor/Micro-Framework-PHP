<?php

namespace App\Controllers;

use App\Core\Request;
use App\Core\Controller;
use App\Core\Application;

class AuthController extends Controller
{
    public function login()
    {
       $view = $this->renderLogin('login');
        echo $view;
    }

    public function register()
    {
       
        // $body = $request->getBody();
        $view = $this->renderLogin('register');
        // dd($body);
        echo $view;
    }
}