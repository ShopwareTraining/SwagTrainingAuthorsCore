<?php declare(strict_types=1);

namespace SwagTraining\AuthorsCore\Core\Content\Author;

use Shopware\Core\Framework\DataAbstractionLayer\EntityDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\CreatedAtField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\PrimaryKey;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\Field\IdField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\StringField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\UpdatedAtField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;

class AuthorDefinition extends EntityDefinition
{
    public const ENTITY_NAME = 'author';

    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass(): string
    {
        return AuthorEntity::class;
    }

    public function getCollectionClass(): string
    {
        return AuthorCollection::class;
    }

    protected function defineFields(): FieldCollection
    {
        return new FieldCollection(
            [
                (new IdField('id', 'id'))->addFlags(new PrimaryKey(), new Required()),
                (new StringField('name', 'name')),
                (new StringField('description', 'description')),
                (new StringField('birthdate', 'birthdate')),
                (new CreatedAtField()),
                (new UpdatedAtField()),
            ]);
    }
}
