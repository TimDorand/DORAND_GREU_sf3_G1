<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends Controller
{
    /**
     * Route pour faire n'importe quoi
     * @Route()
     */
    public function indexAction()
    {
        return new Response('Hellow Woorld !');
    }
}