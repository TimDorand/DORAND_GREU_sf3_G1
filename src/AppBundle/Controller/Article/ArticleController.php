<?php

namespace AppBundle\Controller\Article;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
class ArticleController extends Controller
{
    public function listAction()
    {

    }
    /**
     * @Route() ("/{id}")
     * @param id
     *
     * @return Response
     */
    public function showAction($id)
    {
        return new Response('Article avec l\'id'.$id);
    }


}