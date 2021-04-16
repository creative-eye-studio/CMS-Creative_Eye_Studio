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
        $metaTitleSlug = $entityManager->getRepository(Pages::class)->findOneBy(["slug" => "index"]);
        $metaTitleName = $metaTitleSlug->getMetaTitle();

        dump($metaTitleName);

        return $this->render('base.html.twig', [
            'controller_name' => 'ViewController',
            'links' => $linksNav,
            'meta_title' => $metaTitleName,
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
        $metaTitleName = $page->getMetaTitle();

        if($slug == "index"){
            return $this->redirectToRoute('home');
        }

        dump($metaTitleName);

        return $this->render('base.html.twig', [
            'controller_name' => 'ViewController',
            'links' => $linksNav,
            'slugs' => $page,
            'meta_title' => $metaTitleName,
        ]);
    }
}
