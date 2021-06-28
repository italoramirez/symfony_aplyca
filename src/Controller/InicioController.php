<?php

namespace App\Controller;

use App\Repository\PostRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class InicioController extends AbstractController
{
    /**
     * @Route("/", name="inicio")
     */
    public function index(PostRepository $postRepository): Response
    {
        return $this->render('inicio/index.html.twig', [
            'posts' => $postRepository->findAll(),
        ]);
    }
}
