<?php

namespace App\Controller;

use App\Entity\Articles;
use App\Entity\Pages;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ViewController extends AbstractController
{
    /**
     * @Route("/fr", name="home")
     */
    public function index(): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $page = $entityManager->getRepository(Pages::class)->findOneBy(['slug' => "index"]);
        $metaTitleName = $page->getMetaTitle();
        $metaDescription = $page->getMetaDescription();

        return $this->render('base.html.twig', [
            'meta_title' => $metaTitleName,
            'meta_description' => $metaDescription,
            'controller_name' => 'ViewController',
        ]);
    }

    /**
     * @Route("/fr/{slug}", name="page_view")
     */
    public function page_view(String $slug)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $page = $entityManager->getRepository(Pages::class)->findOneBy(['slug' => $slug]);
        $message = "Not Found";
        $previous = null;

        /* Rendu Page d'accueil 
        -----------------------------*/
        if($slug == "index"){
            return $this->redirectToRoute('home');
        }

        if($slug != "blog"){
            /* Rendu Page
            -----------------------------*/
            if($page == null){
                return new NotFoundHttpException($message, $previous);
                return false;
            }
            $metaTitleName = $page->getMetaTitle();
            $metaDescription = $page->getMetaDescription();
            return $this->render('base.html.twig', [
                'controller_name' => 'ViewController',
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
                'slugs' => $page,
                'articles' => $articles,
                'meta_title' => $metaTitleName,
                'meta_description' => $metaDescription,
            ]); 
        }
    }

    /**
     * @Route("/fr/blog/{post}", name="post_view")
     */
    public function post_view(String $post){
        $entityManager = $this->getDoctrine()->getManager();
        $page = $entityManager->getRepository(Articles::class)->findOneBy(["slug" => $post]);
        $metaTitleName = $page->getMetaTitle();
        $metaDescription = $page->getMetaDesc();
        
        return $this->render('post.html.twig', [
            'controller_name' => 'ViewController',
            'meta_title' => $metaTitleName,
            'meta_description' => $metaDescription,
            'article' => $page,
        ]);
    }

    /**
     * @Route("/", name="index")
     */
    public function RedirectToHomepage()
    {
        return $this->redirectToRoute('home');
    }
}
