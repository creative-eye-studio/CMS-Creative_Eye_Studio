<?php

namespace App\Controller;

use App\Entity\Pages;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ViewController extends AbstractController
{
    /**
     * @Route("/fr/", name="home")
     */
    public function index(): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $linksNav = $entityManager->getRepository(Pages::class)->findBy(["nav_position" => "main"], array("nav_index" => "ASC"));
        $linksNavLegal = $entityManager->getRepository(Pages::class)->findBy(["nav_position" => "legal"], array("nav_index" => "ASC"));
        $page = $entityManager->getRepository(Pages::class)->findOneBy(['slug' => "index"]);
        $metaTitleName = $page->getMetaTitle();
        $metaDescription = $page->getMetaDescription();

        return $this->render('base.html.twig', [
            'controller_name' => 'ViewController',
            'links' => $linksNav,
            'linksNavLegal' => $linksNavLegal,
            'meta_title' => $metaTitleName,
            'meta_description' => $metaDescription,
        ]);
    }

    /**
     * @Route("/fr/{slug}", name="page_view")
     */
    public function page_view(String $slug)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $linksNav = $entityManager->getRepository(Pages::class)->findBy(["nav_position" => "main"]);
        $linksNavLegal = $entityManager->getRepository(Pages::class)->findBy(["nav_position" => "legal"], array("nav_index" => "ASC"));
        $page = $entityManager->getRepository(Pages::class)->findOneBy(['slug' => $slug]);
        $metaTitleName = $page->getMetaTitle();
        $metaDescription = $page->getMetaDescription();

        if($slug == "index"){
            return $this->redirectToRoute('home');
        }

        return $this->render('base.html.twig', [
            'controller_name' => 'ViewController',
            'links' => $linksNav,
            'linksNavLegal' => $linksNavLegal,
            'slugs' => $page,
            'meta_title' => $metaTitleName,
            'meta_description' => $metaDescription,
        ]);
    }
}
