<?php

namespace Tsaqif\LearnExtension\Controller;

use Psr\Http\Message\ResponseInterface;
use Tsaqif\LearnExtension\Domain\Model\Book;
use Tsaqif\LearnExtension\Domain\Repository\BookRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class BookController extends ActionController
{
    public function __construct(
        private readonly BookRepository $bookRepository
    )
    {
        
    }

    public function listAction(): ResponseInterface
    {
        $books = $this->bookRepository->findAll();

        $this->view->assign('books', $books);
        return $this->htmlResponse();
    }

    public function detailAction(Book $book): ResponseInterface
    {
        $this->view->assign('book', $book);
        return $this->htmlResponse();
    }
}