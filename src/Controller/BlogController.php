<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog/{_locale}/{year}/{title}", name="blog_title", requirements={"_locale"="fr|en", "year"="[0-9]{4}", "title"="[a-zA-Z0-9_]*"})
     * @Route("/blog/{year}/{title}", name="blog_title_default_language", requirements={"year"="[0-9]{4}", "title"="[a-zA-Z0-9_]*"})
     */
    public function articleTitleAction($title, $year ,$_locale = 'fr')
    {

        return $this->render('blog/blog.html.twig', [
            'title' => $title,
            'year' => $year,
            '_locale' => $_locale,
        ]);
    }

}