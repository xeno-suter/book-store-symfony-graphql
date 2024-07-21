<?php

namespace App\GraphQL\Resolver;

use App\Repository\AuthorRepository;
use App\Service\QueryService;
use Overblog\GraphQLBundle\Definition\Resolver\QueryInterface;
use Overblog\GraphQLBundle\Annotation as GQL;

#[GQL\Provider]
class Book
{
    public function __construct(
        private readonly QueryService $queryService,
    ) {}

    #[GQL\Query(type: "[Book!]!")]
    public function books(): array
    {
        return $this->queryService->findAllBooks();
    }
}