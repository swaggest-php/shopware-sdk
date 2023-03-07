<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\CustomField;

use Swaggest\ShopwareSdk\Entity\CustomFieldSet\CustomFieldSetEntity;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\ProductSearchConfigField\ProductSearchConfigFieldCollection;

final class CustomFieldEntity extends Entity
{
    protected string $name;

    protected string $type;

    protected ?array $config;

    protected ?bool $active;

    protected ?string $customFieldSetId;

    protected ?CustomFieldSetEntity $customFieldSet;

    protected ?ProductSearchConfigFieldCollection $productSearchConfigFields;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getConfig(): ?array
    {
        return $this->config;
    }

    public function setConfig(?array $config): void
    {
        $this->config = $config;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(?bool $active): void
    {
        $this->active = $active;
    }

    public function getCustomFieldSetId(): ?string
    {
        return $this->customFieldSetId;
    }

    public function setCustomFieldSetId(?string $customFieldSetId): void
    {
        $this->customFieldSetId = $customFieldSetId;
    }

    public function getCustomFieldSet(): ?CustomFieldSetEntity
    {
        return $this->customFieldSet;
    }

    public function setCustomFieldSet(?CustomFieldSetEntity $customFieldSet): void
    {
        $this->customFieldSet = $customFieldSet;
    }

    public function getProductSearchConfigFields(): ?ProductSearchConfigFieldCollection
    {
        return $this->productSearchConfigFields;
    }

    public function setProductSearchConfigFields(?ProductSearchConfigFieldCollection $productSearchConfigFields): void
    {
        $this->productSearchConfigFields = $productSearchConfigFields;
    }
}
