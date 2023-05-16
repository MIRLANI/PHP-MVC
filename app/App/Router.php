<?php 


namespace Lani\BelajarPhpMvc\App;



class Router
{
    private static $router = [];

    public static function add(string $method, string $path, string $controller, string $function)
    {
        self::$router[] = [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'function' => $function
        ];
    }

    public static function run(): void
    {
        $path = '/';

        if (isset($_SERVER['PATH_INFO']))
        {
            $path = $_SERVER['PATH_INFO'];
        }

        $method = $_SERVER['REQUEST_METHOD'];

        foreach (self::$router as $route){
            if ($path == $route['path'] && $method == $route['method']){

                $function = $route['function'];
                $controller = new $route['controller'];
                $controller->$function();

                return;
            }
        }

        http_response_code(404);
        echo "CONTROLER TIDAK DI TEMUKAN";
    }
}



?>