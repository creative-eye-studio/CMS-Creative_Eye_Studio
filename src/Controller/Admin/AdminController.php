<?php

namespace App\Controller\Admin;

use App\Entity\Articles;
use App\Entity\Pages;
use App\Entity\Users;
use App\Form\AddArticleType;
use App\Form\AddPagesType;
use App\Form\CodeCssType;
use App\Form\CodeJsType;
use Cocur\Slugify\Slugify;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{

    /******************************* ADMINISTRATION *******************************/
     
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $pages = $entityManager->getRepository(Pages::class)->findBy(array(), null, 5, null);
        $articles = $entityManager->getRepository(Articles::class)->findBy(array(), null, 5, null);
        $users = $entityManager->getRepository(Users::class)->findBy(array(), null, 5, null);

        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
            'pages' => $pages,
            'articles' => $articles,
            'users' => $users
        ]);
    }



    /******************************* PAGES *******************************/ 

    /**
     * @Route("/admin/pages-site", name="pages_site")
     */
    public function pages_site(){
        $entityManager = $this->getDoctrine()->getManager();
        $pages = $entityManager->getRepository(Pages::class)->findAll();

        return $this->render('admin/pages-list.html.twig', [
            'controller_name' => 'AdminController',
            'pages' => $pages
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
            $file = fopen("../templates/front/website/" . $slugPageStr . ".html.twig", "c+b");
            fwrite($file, $data["page_content"]);


            return $this->redirectToRoute('add_page');
        }

        return $this->render('admin/add-page.html.twig', [
            'form' => $form->createView(),
            'controller_name' => 'AdminController'
        ]);
    }

    /**
     * @Route("/admin/delete-page/{id}", name="delete_page")
     */
    public function delete_page(int $id)
    {
        $filesystem = new Filesystem();
        $entityManager = $this->getDoctrine()->getManager();
        $page = $entityManager->getRepository(Pages::class)->find($id);
        $pageFile = $page->getSlug();

        $entityManager->remove($page);
        $entityManager->flush();

        $filesystem->remove(['../templates/front/website/' . $pageFile . '.html.twig']);

        return $this->redirectToRoute('pages_site');
    }




    /******************************* ARTICLES *******************************/ 

    /**
     * @Route("/admin/articles-site", name="articles_site")
     */
    public function articles_site()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $articles = $entityManager->getRepository(Articles::class)->findAll();

        return $this->render('admin/articles-list.html.twig', [
            'controller_name' => 'AdminController',
            'articles' => $articles,
        ]);
    }

    /**
     * @Route("/admin/add-article", name="add_article")
     */
    public function add_article(Request $request){

        $form = $this->createForm(AddArticleType::class);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $data = $form->getData();
            $slugPage = new Slugify();
            $slugPageStr = $slugPage->slugify($data["article_title"]);
            //$slugPageStr = strval($slugPage);

            $page = new Articles();
            $page->setName($data["article_title"]);
            $page->setSlug($slugPageStr);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($page);
            $entityManager->flush();

            //Création de la page
            $file = fopen("../templates/front/blog/" . $slugPageStr . ".html.twig", "c+b");
            fwrite($file, $data["article_content"]);


            return $this->redirectToRoute('add_article');
        }

        return $this->render('admin/add-article.html.twig', [
            'form' => $form->createView(),
            'controller_name' => 'AdminController'
        ]);
    }

    /**
     * @Route("/admin/delete-article/{id}", name="delete_article")
     */
    public function delete_article(int $id)
    {
        $filesystem = new Filesystem();
        $entityManager = $this->getDoctrine()->getManager();
        $page = $entityManager->getRepository(Articles::class)->find($id);
        $pageFile = $page->getSlug();

        $entityManager->remove($page);
        $entityManager->flush();

        $filesystem->remove(['../templates/front/blog/' . $pageFile . '.html.twig']);

        return $this->redirectToRoute('pages_site');
    }




    /******************************* UTILISATEURS *******************************/ 

    /**
     * @Route("/admin/users-list", name="users_list")
     */
    public function users_list(){

        $entityManager = $this->getDoctrine()->getManager();
        $users = $entityManager->getRepository(Users::class)->findAll();

        return $this->render('admin/users-list.html.twig', [
            'controller_name' => 'AdminController',
            'users' => $users
        ]);
    }
}
