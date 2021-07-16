<?php

namespace App\Controller;

use App\Entity\Articles;
use App\Entity\Pages;
use App\Entity\Navigation;
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
        $linksNav = $entityManager->getRepository(Navigation::class)->findBy(["location_nav" => "0"], array("id" => "ASC"));
        $linksNavLegal = $entityManager->getRepository(Navigation::class)->findBy(["location_nav" => "1"], array("id" => "ASC"));
        $page = $entityManager->getRepository(Pages::class)->findOneBy(['slug' => "index"]);
        $metaTitleName = $page->getMetaTitle();
        $metaDescription = $page->getMetaDescription();

        return $this->render('base.html.twig', [
            'links' => $linksNav,
            'linksNavLegal' => $linksNavLegal,
            'meta_title' => $metaTitleName,
            'meta_description' => $metaDescription,
            'controller_name' => 'ViewController',
        ]);
    }

    /**
     * @Route("/{slug}", name="page_view")
     */
    public function page_view(String $slug)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $linksNav = $entityManager->getRepository(Navigation::class)->findBy(["location_nav" => "0"], array("id" => "ASC"));
        $linksNavLegal = $entityManager->getRepository(Navigation::class)->findBy(["location_nav" => "1"], array("id" => "ASC"));
        $page = $entityManager->getRepository(Pages::class)->findOneBy(['slug' => $slug]);

        /* Rendu Page d'accueil 
        -----------------------------*/
        if($slug == "index"){
            return $this->redirectToRoute('home');
        }

        if($slug != "blog"){
            /* Rendu Page
            -----------------------------*/
            $metaTitleName = $page->getMetaTitle();
            $metaDescription = $page->getMetaDescription();
            return $this->render('base.html.twig', [
                'controller_name' => 'ViewController',
                'links' => $linksNav,
                'linksNavLegal' => $linksNavLegal,
                'slugs' => $page,
                'meta_title' => $metaTitleName,
                'meta_description' => $metaDescription,
            ]);
        } else {
            /* Rendu Blog 
            -----------------------------*/
            $articles = $entityManager->getRepository(Articles::class)->findAll();
            $metaTitleName = "Actualités";
            $metaDescription = "";
            return $this->render('blog.html.twig', [
                'controller_name' => 'ViewController',
                'links' => $linksNav,
                'linksNavLegal' => $linksNavLegal,
                'slugs' => $page,
                'articles' => $articles,
                'meta_title' => $metaTitleName,
                'meta_description' => $metaDescription,
            ]); 
        }
    }

    /**
     * @Route("/blog/{post}", name="post_view")
     */
    public function post_view(String $post){
        $entityManager = $this->getDoctrine()->getManager();
        $linksNav = $entityManager->getRepository(Navigation::class)->findBy(["location_nav" => "0"], array("id" => "ASC"));
        $linksNavLegal = $entityManager->getRepository(Navigation::class)->findBy(["location_nav" => "1"], array("id" => "ASC"));

        $page = $entityManager->getRepository(Articles::class)->findOneBy(["slug" => $post]);
        $metaTitleName = $page->getMetaTitle();
        $metaDescription = $page->getMetaDesc();
        

        return $this->render('post.html.twig', [
            'controller_name' => 'ViewController',
            'links' => $linksNav,
            'linksNavLegal' => $linksNavLegal,
            'meta_title' => $metaTitleName,
            'meta_description' => $metaDescription,
            'article' => $page,
        ]);
    }
}
