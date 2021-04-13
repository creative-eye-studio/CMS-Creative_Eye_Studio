<?php

namespace App\Controller\Admin;

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
     * @Route("/admin/articles-site", name="articles_site")
     */
    public function articles_site(){
        return $this->render('admin/articles-list.html.twig', [
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
