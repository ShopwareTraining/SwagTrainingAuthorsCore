<?php declare(strict_types=1);

namespace SwagTraining\AuthorsCore\Core\Content\Author\Field;

trait TechnicalNameTrait
{
    /**
     * @var string
     */
    protected $technicalName;

    /**
     * @return string
     */
    public function getTechnicalName(): string
    {
        return $this->technicalName;
    }

    /**
     * @param string $technicalName
     */
    public function setTechnicalName(string $technicalName): void
    {
        $this->technicalName = $technicalName;
    }
}
