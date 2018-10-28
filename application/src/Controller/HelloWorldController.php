<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloWorldController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render(
            'hello.html.twig',
            [
                'name' => 'World',
            ]
        );
    }

    /**
     * @Route("/hello/{name}", name="hello")
     */
    public function hello(string $name): Response
    {
        return $this->render(
            'hello.html.twig',
            [
                'name' => $name,
            ]
        );
    }
}
