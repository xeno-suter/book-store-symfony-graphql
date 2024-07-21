<?php

namespace App\GraphQL\Types;

use Overblog\GraphQLBundle\Annotation as GQL;

#[GQL\Type]
class Author
{
    #[GQL\Field]
    public int $id;

    #[GQL\Field]
    public string $name;

    #[GQL\Field]
    public string $bio;

    #[GQL\Field(type: "[Book!]!")]
    public array $books;
}