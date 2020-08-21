<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$route = new RouteCollection();

$route->add('hello', new Route('/hello/{name}',['name'=>'World']));
$route->add('bye', new Route('/bye'));
$route->add('about', new Route('/a-propos'));

return $route;