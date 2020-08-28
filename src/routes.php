<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;



$route = new RouteCollection();

$route->add('hello', new Route('/hello/{name}',['name'=>'World',
'_controller' => [new App\Controller\GreetingController(),'hello']
]));

$route->add('bye', new Route('/bye',[
    '_controller' =>[new App\Controller\GreetingController(),'bye']
]));
$route->add('about', new Route('/a-propos',[
    '_controller' => [new App\Controller\PagesController(),'about']
]));

return $route;