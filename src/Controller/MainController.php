<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/blog_list', name: 'blog_list', stateless: true)]
    public function homepage(): Response
    {
        $this->generateUrl('blog_list');
    }
}
