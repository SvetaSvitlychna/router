<?php


class Router
{

    private $request;

    /*string $request -> requested by user uri
     *
     */
    public function __construct($request)
    {

        $this->request = $request;
    }

    /*array $routes -> array of routes
     *
     */
    public function run($routes){

        $route = $this->request;
        if(array_key_exists($route, $routes)){

            include $routes[$route]; exit;
        }else{
            var_dump(404);exit;
        }
    }

}





