<?php declare(strict_types=1);

namespace SwagTraining\AuthorsCore\Core\Content\Author;

use Shopware\Core\Framework\DataAbstractionLayer\Entity;
use Shopware\Core\Framework\DataAbstractionLayer\EntityIdTrait;
use SwagTraining\AuthorsCore\Core\Content\Author\Field\TechnicalNameTrait;

class AuthorEntity extends Entity
{
    use EntityIdTrait;

    use TechnicalNameTrait;

    protected $name;
    protected $description;
    protected $birthdate;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDescription(): string
    {
        return (string) $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getBirthdate(): string
    {
        return (string) $this->birthdate;
    }

    public function setBirthdate(string $birthdate): void
    {
        $this->birthdate = $birthdate;
    }
}
