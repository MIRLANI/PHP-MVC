<?php 


namespace Lani\BelajarPhpMvc\App;



class Router
{
    private static $router = [];

    public static function add(string $method, string $path, string $controller, string $function, array $middlewares = [])
    {
        self::$router[] = [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'function' => $function,
            'middleware' => $middlewares
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

            $petter = "#^" .$route['path'] . "$#";

            if (preg_match($petter, $path, $variabel) && $method == $route['method']){

                // memanggil class middleware
                foreach($route['middleware'] as $middleware)
                {
                    $instance = new $middleware;
                    $instance->before();
                }

                $function = $route['function'];
                $controller = new $route['controller'];
               // $controller->$function();

               array_shift($variabel);
               call_user_func_array([$controller, $function], $variabel);

                return;
            }
        }

        http_response_code(404);
        echo "CONTROLER TIDAK DI TEMUKAN";
    }
}



?>