<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

require __DIR__.'/../vendor/autoload.php';

//path info recupere la route 
$req = Request::createFromGlobals();
//tout ce qu'il y a deriere l'index.php (qui est invisible si pas de noms de fichier)
//var_dump($req->getPathInfo());


// if($pathinfo === '/hello') include __DIR__.'/src/pages/hello.php';
// if($pathinfo === '/bye') include __DIR__.'/src/pages/bye.php';

//de http fondation
$response = new Response();


$map = [
    '/hello'=>'hello.php',
    '/bye' =>'bye.php',
    '/about'=>'about.php'
];
$pathinfo = $req->getPathinfo();


if($map[$pathinfo]){
    ob_start();
    include __DIR__.'/../src/pages/'.$map[$pathinfo];
    $response->setContent(ob_get_clean());
    

}else{
    $response->setContent('la page n\'existe pas');
    $response->setStatusCode(404);

}



$response->send();
