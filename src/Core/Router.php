<?php

namespace App\Core;

class Router
{

    public Response $response;
    public Request $request;
    protected array $routes = [];

    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function post($path, $callback)
    {
        $this->routes['post'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;

        if ($callback === false) {
            $this->response->setStatusCode(404);
            $this->renderView("_404");
            return;
        }

        if (is_string($callback)) {

            return $this->renderView($callback);
        }

        return dd(call_user_func($callback));
    }

    public function renderView($view)
    {

        $layoutContent = $this->layoutContent();
        $viewContent = $this->renderOnlyView($view);

        $path =  str_replace('{{content}}', $viewContent, $layoutContent);

        echo $path;
    }

    // public function renderContent($view)
    // {

    //     $layoutContent = $this->layoutContent();

    //     $viewContent = $this->renderOnlyView($view); 

    //     $path =  str_replace('{{content}}', $viewContent, $layoutContent);

    //     echo $path;
    // }

    protected function layoutContent()
    {
        ob_start();

        include_once "../src/Views/layouts/main.php";

        $output = ob_get_clean();

        return $output;
    }

    public function renderOnlyView($view)
    {
        ob_start();

        include_once "../src/Views/$view.php";

        $output = ob_get_clean();

        return $output;
    }
}
