<?php declare(strict_types=1);

namespace SwagTraining\AuthorsCore\Core\Content\Author;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

class AuthorCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return AuthorEntity::class;
    }
}
