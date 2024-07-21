<?php

namespace App\Service;

use App\Entity\Author;
use App\Entity\Book;
use App\Repository\AuthorRepository;
use App\Repository\BookRepository;

class QueryService
{
    public function __construct(
        private readonly AuthorRepository $authorRepository,
        private readonly BookRepository $bookRepository,
    ) {}

    public function findAuthor(int $authorId): ?Author
    {
        return $this->authorRepository->find($authorId);
    }


    public function findAllAuthors(?int $limit = null): array
    {
        return $this->authorRepository->findBy([], [], $limit);
    }

    public function createAuthor(Author $author): void
    {
        $this->authorRepository->save($author);
    }

    public function findAllBooks(?int $limit = null): array
    {
        return $this->bookRepository->findBy([], [], $limit);
    }

    public function findAllBooksByAuthor(int $authorId): array
    {
        return $this->bookRepository->findBy(['author' => $authorId]);
    }

    public function findBookById(int $bookId): ?Book
    {
        return $this->bookRepository->find($bookId);
    }
}