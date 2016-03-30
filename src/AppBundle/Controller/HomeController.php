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
        $name = 'Symfony 3';

        $tutorials = [
            'Php POO',
            'Laravel',
            'Symfony3',
            'Wordpress',
        ];

        return $this->render('AppBundle:Home:index.html.twig', [
            'name' => $name,
            'tutorials' => $tutorials,
        ]);
    }
}
