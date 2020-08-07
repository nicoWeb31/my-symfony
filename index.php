<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

require __DIR__.'/vendor/autoload.php';
//request de httpfoundation---toute les super global son presente avec des methode pour bosser
$request = Request::createFromGlobals();


//$name = isset($_GET['name']) ? $_GET['name'] : 'toto';
$name = $request->query->get('name','toto');


//de http fondation
$response = new Response();

//header('Content-Type : text/html; charset=utf-8');
$response->headers->set('Content-Type','text/html; charset=utf-8');

// printf('Hello %s',htmlspecialchars($name, ENT_QUOTES) );
$response->setContent(sprintf('Hello %s',htmlspecialchars($name, ENT_QUOTES)));
$response->send();