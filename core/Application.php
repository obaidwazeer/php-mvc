<?php 

namespace App\core;
use app\core\Request;
use app\core\Router;
class Application{
    
    public Request $request;
    public Router $router;
    public function __construct(){
        $this->request = new Request();
        $this->router = new Router($this->request);
    }

    public function run(){
        $this->router->resolve();
    }
}