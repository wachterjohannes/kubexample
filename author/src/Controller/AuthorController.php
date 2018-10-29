<?php

namespace App\Controller;

use App\Entity\Author;
use App\Repository\AuthorRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AuthorController extends AbstractController
{
    /**
     * @var AuthorRepository
     */
    private $authorRepository;

    public function __construct(AuthorRepository $authorRepository)
    {
        $this->authorRepository = $authorRepository;
    }

    /**
     * @Route("/", name="health_check")
     */
    public function healthCheck()
    {
        return $this->json(null);
    }

    /**
     * @Route("/api/authors", name="authors", methods={"GET"})
     */
    public function indexAuthors()
    {
        return $this->json($this->authorRepository->findAll());
    }

    /**
     * @Route("/api/authors", name="post_author", methods={"POST"})
     */
    public function postAuthor(Request $request)
    {
        $author = new Author();
        $author->setName($request->get('name'));
        $this->authorRepository->save($author);

        return $this->json($author);
    }

    /**
     * @Route("/api/authors/{id}", name="post_author", methods={"PUT"})
     */
    public function putAuthor(Request $request, string $id)
    {
        $author = $this->authorRepository->find($id);
        $author->setName($request->get('name'));
        $this->authorRepository->save($author);

        return $this->json($author);
    }

    /**
     * @Route("/api/authors/{id}", name="post_author", methods={"GET"})
     */
    public function getAuthor(Request $request, string $id)
    {
        $author = $this->authorRepository->find($id);

        return $this->json($author);
    }
}
