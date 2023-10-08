<?php


namespace App\Controllers;

use App\Core\Request;
use App\Core\Controller;
use App\Core\Application;

class SiteController extends Controller
{

    public function home()
    {
        $params = [
            "name" => "Jhordinha"
        ];

        return $this->render('home', $params);
    }

    public function contact()
    {

        return $this->render('contact');
    }

    public function about()
    {

        return $this->render('about');
    }

    public function handleContact(Request $request)
    {
        $body = Application::$app->request->getBody();

        echo $body;
    }
}
