<?php

namespace App\Controller;

use App\Entity\Pages;
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
        $entityManager = $this->getDoctrine()->getManager();
        $linksNav = $entityManager->getRepository(Pages::class)->findAll();

        return $this->render('base.html.twig', [
            'controller_name' => 'ViewController',
            'links' => $linksNav,
        ]);
    }

    /**
     * @Route("/{slug}", name="page_view")
     */
    public function page_view(String $slug)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $linksNav = $entityManager->getRepository(Pages::class)->findAll();
        $page = $entityManager->getRepository(Pages::class)->findOneBy(['slug' => $slug]);

        if($slug == "index"){
            return $this->redirectToRoute('home');
        }

        return $this->render('base.html.twig', [
            'controller_name' => 'ViewController',
            'links' => $linksNav,
            'slugs' => $page,
        ]);
    }
}
