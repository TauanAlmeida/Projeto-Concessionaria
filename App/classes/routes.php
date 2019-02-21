<?php

namespace App\classes;

class Routes {
    private $routes;
    
    public function __construct() {
        $this->initRoutes();
        $this->run($this->getURL());
    }
    
    public function initRoutes(){
        $this->routes['/'] = array ('controller' => 'indexController', 'action' => 'index');
        $this->routes['/cadastro'] = array ('controller' => 'indexController', 'action' => 'cadastro');
        $this->routes['/sobre'] = array ('controller' => 'indexController', 'action' => 'sobre');
        $this->routes['/contatos'] = array ('controller' => 'indexController', 'action' => 'contatos');
        $this->routes['/error404'] = array ('controller' => 'indexController', 'action' => 'error404');
        
        //pagando dados via post através dessas rotas
        $this->routes['/insert'] = array ('controller' => 'indexController', 'action' => 'insert');
        $this->routes['/login'] = array ('controller' => 'indexController', 'action' => 'login');
    }
    
    protected function run($url){
        if (array_key_exists($url, $this->routes)){
            $class = "\\App\\controller\\" . $this->routes[$url]['controller'];
            $controller = new $class;
            $action = $this->routes[$url]['action'];
            $controller->$action();
        }else{
            $class = "\\App\\controller\\" . $this->routes['/error404']['controller'];
            $controller = new $class;
            $action = $this->routes['/error404']['action'];
            $controller->$action();
        }
    }
    
    public function getURL(){
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}
