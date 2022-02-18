<?php

class Router{
    //Associative array of routes(the routing table)
    protected $routes = [];
    //parameter from the matched rote
    protected $params = [];

    /*Add a route to the routing table 
        @param string $route The route URL
        @param array  $params Parameters(controller, action,etc.)
    */
    public function add($route, $params){
        $this->routes[$route] = $params;
    }

    //get all the routes from route table
    public function getRoutes(){
        return $this->routes;
    }
    /*Match the route to the routes in the routing table, setting the $params property if route is found.
    @params string $url the route url to match
    @return boolean true if a match found , false otherwise
    */
    public function match($url){
        foreach($this->routes as $route => $params){
            if($url==$route){
                $this->params = $params;
                return true;
            }
        }
        return false;
    }
    //get currently matched Parameters
    //return array
    public function getParams(){
        return $this->params;
    }
}