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
    ) {}

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

    public function newAction(): ResponseInterface
    {
        return $this->htmlResponse();
    }

    protected function initializeCreateAction(): void
    {
        $propertyMappingConfiguration = $this->arguments['newBook']
            ->getPropertyMappingConfiguration();

        $propertyMappingConfiguration->forProperty('buyDate')
            ->setTypeConverterOption(
                \TYPO3\CMS\Extbase\Property\TypeConverter\DateTimeConverter::class,
                \TYPO3\CMS\Extbase\Property\TypeConverter\DateTimeConverter::CONFIGURATION_DATE_FORMAT,
                'Y-m-d'
        );

        $propertyMappingConfiguration->forProperty('readingDate')
            ->setTypeConverterOption(
                \TYPO3\CMS\Extbase\Property\TypeConverter\DateTimeConverter::class,
                \TYPO3\CMS\Extbase\Property\TypeConverter\DateTimeConverter::CONFIGURATION_DATE_FORMAT,
                'Y-m-d'
        );
    }   

    public function createAction(Book $newBook): ResponseInterface 
    {
        // \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($newBook);
        // die;

        $this->bookRepository->add($newBook);

        $this->addFlashMessage(
            'Das Buch wurde erfolgreich gespeichert.',
            'Erfolg!',
            \TYPO3\CMS\Core\Type\ContextualFeedbackSeverity::OK
        );

        return $this->redirect('list');
    }
}