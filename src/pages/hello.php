<?php


//$name = isset($_GET['name']) ? $_GET['name'] : 'toto';
$name = $req->query->get('name','toto');

?>

hello <?= htmlspecialchars($name, ENT_QUOTES)?>
<!-- //header('Content-Type : text/html; charset=utf-8');
$response->headers->set('Content-Type','text/html; charset=utf-8');

// printf('Hello %s',htmlspecialchars($name, ENT_QUOTES) );
$response->setContent(sprintf('Hello %s',htmlspecialchars($name, ENT_QUOTES))); -->
