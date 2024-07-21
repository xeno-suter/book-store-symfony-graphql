<?php

namespace App\GraphQL\Types;

use Overblog\GraphQLBundle\Annotation as GQL;

#[GQL\Type]
class Book
{
    #[GQL\Field]
    public int $id;

    #[GQL\Field]
    public string $title;

    #[GQL\Field]
    public Author $author;

    #[GQL\Field]
    public string $synopsis;

    #[GQL\Field]
    public string $releaseYear;

    #[GQL\Field]
    public string $genre;

    #[GQL\Field]
    public int $averageRating;

    #[GQL\Field]
    public int $copiesSold;
}