<?php

namespace App\GraphQL\Resolver;

use App\GraphQL\Types\Input\CreateAuthor;
use App\Service\QueryService;
use Overblog\GraphQLBundle\Annotation as GQL;
use App\Entity\Author as AuthorEntity;

#[GQL\Provider]
class Author
{
    public function __construct(
        private readonly QueryService $queryService,
    ) {}

    #[GQL\Query(type: "[Author!]!")]
    public function authors(): array
    {
        return $this->queryService->findAllAuthors();
    }

    #[GQL\Query(type: "Author")]
    public function author(int $id): AuthorEntity
    {
        return $this->queryService->findAuthor($id);
    }

    #[GQL\Mutation(type: "Author")]
    public function createAuthor(CreateAuthor $input): AuthorEntity
    {
        $author = new AuthorEntity(
            $input->name,
            new \DateTime($input->dateOfBirth),
            $input->bio
        );
        $this->queryService->createAuthor($author);
        return $author;
    }
}