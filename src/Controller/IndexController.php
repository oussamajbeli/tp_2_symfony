<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/{name}", name="index")
     */
    public function index(): Response
    {

        return  $this->render('index.html.twig');

        // $this->json([

        //     'message' => 'Welcome to your new controller!',
        //     'path' => 'src/Controller/IndexController.php',
        // ]);
    }
    public function projet($name)
    {

        return new Response('<h1>Hello ' . $name . '</h1>');

        // $this->json([

        //     'message' => 'Welcome to your new controller!',
        //     'path' => 'src/Controller/IndexController.php',
        // ]);
    }
}
