<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class PagesController{

    public function about(){


        ob_start();
        include __DIR__.'/../pages/about.php';
        return new Response(ob_get_clean());

    }


}