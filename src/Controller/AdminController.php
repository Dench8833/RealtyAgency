<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)

    {
        return new Response(sprintf(
            'Future page to show the article: "%s"',
            $slug
        ));
    }

}
