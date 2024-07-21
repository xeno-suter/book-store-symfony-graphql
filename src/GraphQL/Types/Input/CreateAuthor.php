<?php

namespace App\GraphQL\Types\Input;

use Overblog\GraphQLBundle\Annotation as GQL;
use Symfony\Component\Validator\Constraints as Assert;

#[GQL\Input]
class CreateAuthor
{
    #[GQL\Field]
    #[Assert\Length(min: 1, max: 10)]
    public string $name;

    #[GQL\Field]
    public string $bio;

    #[GQL\Field]
    public string $dateOfBirth;
}