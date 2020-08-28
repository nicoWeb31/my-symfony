<?php



use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;

require __DIR__.'/../vendor/autoload.php';


$req = Request::createFromGlobals();
$route = require __DIR__.'./../src/routes.php';


$context = new RequestContext($req);

$urlMatcher = new UrlMatcher($route,$context);

$pathinfo = $req->getPathinfo();

try{
    $resutat = $urlMatcher->match($pathinfo);
    
    $req->attributes->add($resutat);
    $response = call_user_func($resutat['_controller'], $req);
    
}catch(ResourceNotFoundException $e){
    $response = new Response("La page demander n'existe pas",404);

}catch(Exception $e){
$response = new Response('une erreur est arrivé',500);
}
$response->send();
