<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MoviesController extends AbstractController
{
    #[Route('/movies', name: 'app_movies')]
    public function index(): Response
    {
        $name = 'World';
        return $this->render('base.html.twig' , [
        'name' => $name,
    ]);
    }
}
