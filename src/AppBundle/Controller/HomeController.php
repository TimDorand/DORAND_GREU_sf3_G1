<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Article\Article;
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
        $antispam = $this->get('Antispam');
      /*  
        dump($antispam->isSpam('dedededee')); die;
        
        
        $name = 'Symfony 3';

        $tutorials = [
            [
                'id' => 2,
                'name' => 'Symfony2'
            ],
            [
                'id' => 5,
                'name' => 'Wordpress'
            ],
            [
                'id' => 9,
                'name' => 'Laravel'
            ],
        ];


        return $this->render('AppBundle:Home:index.html.twig', [
            'name' => $name,
            'tutorials' => $tutorials,
        ]);
        */
        $em = $this->getDoctrine()->getManager();
        $articleRepository = $em->getRepository('AppBundle:Article\Article');
        
        $article = new Article();
        $article 
            ->setTitle('Osef du titre')
            ->setContent('Blabla')
            ->setTag('Bla')
            ->setCreatedAt(new \DateTime())
        ;

        
        $em->persist($article);
        // Persiste sert à mettre en mémoire
        $em->flush();
        // Flush va mettre en base 
        
        return new Response('Article created');
        
    }
}
