<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/blog', requirements: ['_locale' => 'en|es|fr'], name: 'blog_')]
class BlogController extends AbstractController
{
    #[Route('/{_locale}/{page}', name: 'list', requirements: ['page' => '\d+'])]
    public function list(int $page): Response
    {
        // ...
    }

    #[Route('/{_locale}/{slug}', name: 'show')]
    public function show(string $slug): Response
    {
        // $slug will equal the dynamic part of the URL
        // e.g. at /blog/yay-routing, then $slug='yay-routing'

        // ...
    }

    #[Route('/{_locale}', name: 'index')]
    public function index(): Response
    {
        // ...
    }
}