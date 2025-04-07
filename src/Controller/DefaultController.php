<?php 
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Article;

 class DefaultController extends AbstractController
{
    #[Route('/{id}', name: 'index')]
    public function show(Article $article = null): Response
    {
        return new Response(
            'test réponse'
        );
    }
}