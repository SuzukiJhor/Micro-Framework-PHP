<?php

namespace App\Core;

class Router
{

    public Request $request;
    protected array $routes = [];

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;

        if ($callback === false) {
            echo 'Not found';
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
