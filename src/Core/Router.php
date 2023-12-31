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

    /**
     * Add a GET route.
     *
     * @param string $path
     * @param mixed $callback
     */
    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    /**
     * Add a POST route.
     *
     * @param string $path
     * @param mixed $callback
     */
    public function post($path, $callback)
    {
        $this->routes['post'][$path] = $callback;
    }

    /**
     * Resolves the Current route.
     */
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

        $this->executeController($callback);
    }


    /**
     *  Render the view with the layout.
     *
     * @param string $view Name.
     * @param array $params of view.
     */
    public function renderView($view, $params = [])
    {

        $layoutContent = $this->layoutContent();
        $viewContent = $this->renderOnlyView($view, $params);

        $path =  str_replace('{{content}}', $viewContent, $layoutContent);

        echo $path;
    }


    /**
     * Get the content of the layout.
     *
     * @return string layout content.
     */
    protected function layoutContent()
    {

        $layout = Application::$app->controller->layout;

        ob_start();

        include_once "../src/Views/layouts/$layout.php";

        $output = ob_get_clean();

        return $output;
    }

    /**
     * Render just view content.
     *
     * @param string $view name.
     * @param array $params view.
     * @return string Content View.
     */

    public function renderOnlyView($view, $params)
    {

        foreach ($params as $key => $value) {
            $$key = $value;
        }

        ob_start();

        include_once "../src/Views/$view.php";

        $output = ob_get_clean();

        return $output;
    }


    /**
     * Runs the specified controlle.
     *
     * @param array $callback Callback of Controller.
     */

    public function executeController($callback)
    {
        $controllerClass = $callback[0];
        $methodName = $callback[1];

        if (!class_exists($controllerClass) || !method_exists($controllerClass, $methodName)) {
            echo "Classe ou método não encontrados";
            return;
        }

        Application::$app->controller = new $controllerClass();
        $method = $this->request->getMethod();

        if ($method === 'get') {
            Application::$app->controller->$methodName();
        } elseif ($method === 'post') {
            Application::$app->controller->$methodName($this->request);
        }
    }
}
