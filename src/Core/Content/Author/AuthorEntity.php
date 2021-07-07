<?php declare(strict_types=1);

namespace SwagTraining\AuthorsCore\Core\Content\Author;

use Shopware\Core\Framework\DataAbstractionLayer\Entity;
use Shopware\Core\Framework\DataAbstractionLayer\EntityIdTrait;
use SwagTraining\AuthorsCore\Core\Content\Author\Field\TechnicalNameTrait;

/**
 * Class AuthorEntity
 * @package SwagTraining\AuthorsCore\Core\Content\Author
 */
class AuthorEntity extends Entity
{
    use EntityIdTrait;

    use TechnicalNameTrait;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $birthdate;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return (string)$this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getBirthdate(): string
    {
        return (string)$this->birthdate;
    }

    /**
     * @param string $birthdate
     */
    public function setBirthdate(string $birthdate): void
    {
        $this->birthdate = $birthdate;
    }
}
