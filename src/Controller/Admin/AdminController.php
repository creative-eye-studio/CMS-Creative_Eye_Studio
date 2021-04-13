<?php

namespace App\Controller\Admin;

use App\Form\AddArticleType;
use App\Form\AddPagesType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
    public function add_page(){

        $form = $this->createForm(AddPagesType::class);

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
