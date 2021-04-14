<?php

namespace App\Controller\Admin;

use App\Entity\Pages;
use App\Form\AddArticleType;
use App\Form\AddPagesType;
use App\Form\CodeFrontFormType;
use Cocur\Slugify\Slugify;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * @Route("/admin/css-front", name="css_modify")
     */
    public function css_front(): Response
    {
        $form = $this->createForm(CodeFrontFormType::class);

        return $this->render('admin/css-code.html.twig', [
            'form' => $form->createView(),
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * @Route("/admin/js-front", name="js_modify")
     */
    public function js_front(): Response
    {
        $form = $this->createForm(CodeFrontFormType::class);

        return $this->render('admin/js-code.html.twig', [
            'form' => $form->createView(),
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * @Route("/admin/pages-site", name="pages_site")
     */
    public function pages_site(){
        return $this->render('admin/pages-list.html.twig', [
            'controller_name' => 'AdminController'
        ]);
    }

    /**
     * @Route("/admin/add-page", name="add_page")
     */
    public function add_page(Request $request): Response{

        $form = $this->createForm(AddPagesType::class);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $data = $form->getData();
            $slugPage = new Slugify();
            $slugPageStr = $slugPage->slugify($data["page_title"]);
            //$slugPageStr = strval($slugPage);

            $page = new Pages();
            $page->setName($data["page_title"]);
            $page->setSlug($slugPageStr);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($page);
            $entityManager->flush();

            //Création de la page
            $file = fopen("../templates/front/" . $slugPageStr . ".html.twig", "c+b");
            fwrite($file, $data["page_content"]);


            return $this->redirectToRoute('add_page');
        }

        return $this->render('admin/add-page.html.twig', [
            'form' => $form->createView(),
            'controller_name' => 'AdminController'
        ]);
    }

    /**
     * @Route("/admin/articles-site", name="articles_site")
     */
    public function articles_site(){
        return $this->render('admin/articles-list.html.twig', [
            'controller_name' => 'AdminController'
        ]);
    }

    /**
     * @Route("/admin/add-article", name="add_article")
     */
    public function add_article(){

        $form = $this->createForm(AddArticleType::class);

        return $this->render('admin/add-article.html.twig', [
            'form' => $form->createView(),
            'controller_name' => 'AdminController'
        ]);
    }

    /**
     * @Route("/admin/users-list", name="users_list")
     */
    public function users_list(){
        return $this->render('admin/users-list.html.twig', [
            'controller_name' => 'AdminController'
        ]);
    }
}
