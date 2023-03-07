<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity;

use Swaggest\ShopwareSdk\Schema\AbstractField;
use Swaggest\ShopwareSdk\Schema\FieldCollection;

abstract class AbstractEntityDefinition
{
    private FieldCollection $fieldCollection;

    public function __construct()
    {
        $this->fieldCollection = new FieldCollection();

        foreach ($this->defineFields() as $field) {
            $this->fieldCollection->set($field->getName(), $field);
        }
    }

    abstract public function getEntityName(): string;

    abstract public function getCollectionClass(): string;

    abstract public function getEntityClass(): string;

    public function getFields(): FieldCollection
    {
        return $this->fieldCollection;
    }

    /**
     * @return AbstractField[]
     */
    abstract protected function defineFields(): array;
}
