<?php

namespace Tsaqif\LearnExtension\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Book extends AbstractEntity 
{
    protected string $title = '';
    protected string $author = '';
    protected string $isbn = '';
    protected string $summary = '';
    protected int $rating = 1;
    protected int $buyDate = 0;
    protected bool $readingDone = false;
    protected int $readingDate = 0;

    /**
     * Get the value of title
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * Get the value of author
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * Set the value of author
     */
    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }

    /**
     * Get the value of isbn
     */
    public function getIsbn(): string
    {
        return $this->isbn;
    }

    /**
     * Set the value of isbn
     */
    public function setIsbn(string $isbn): void
    {
        $this->isbn = $isbn;
    }

    /**
     * Get the value of summary
     */
    public function getSummary(): string
    {
        return $this->summary;
    }

    /**
     * Set the value of summary
     */
    public function setSummary(string $summary): void
    {
        $this->summary = $summary;
    }

    /**
     * Get the value of rating
     */
    public function getRating(): int
    {
        return $this->rating;
    }

    /**
     * Set the value of rating
     */
    public function setRating(int $rating): void
    {
        $this->rating = $rating;
    }

    /**
     * Get the value of buyDate
     */
    public function getBuyDate(): int
    {
        return $this->buyDate;
    }

    /**
     * Set the value of buyDate
     */
    public function setBuyDate(int $buyDate): void
    {
        $this->buyDate = $buyDate;
    }

    /**
     * Get the value of readingDone
     */
    public function isReadingDone(): bool
    {
        return $this->readingDone;
    }

    /**
     * Set the value of readingDone
     */
    public function setReadingDone(bool $readingDone): void
    {
        $this->readingDone = $readingDone;
    }

    /**
     * Get the value of readingDate
     */
    public function getReadingDate(): int
    {
        return $this->readingDate;
    }

    /**
     * Set the value of readingDate
     */
    public function setReadingDate(int $readingDate): void
    {
        $this->readingDate = $readingDate;
    }
}