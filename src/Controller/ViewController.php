<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ViewController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('front/website/index.html.twig', [
            'controller_name' => 'ViewController',
        ]);
    }

    /**
     * @Route("/{slug}", name="page_view")
     */
    public function page_view(string $slug): Response
    {
        return $this->render('front/website/'.$slug.'.html.twig', [
            'controller_name' => 'ViewController',
        ]);
    }
}
