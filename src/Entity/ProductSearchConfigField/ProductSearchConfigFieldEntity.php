<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ProductSearchConfigField;

use Swaggest\ShopwareSdk\Entity\CustomField\CustomFieldEntity;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\ProductSearchConfig\ProductSearchConfigEntity;

final class ProductSearchConfigFieldEntity extends Entity
{
    use EntityIdTrait;

    protected string $searchConfigId;

    protected ?string $customFieldId;

    protected string $field;

    protected bool $tokenize;

    protected bool $searchable;

    protected int $ranking;

    protected ?ProductSearchConfigEntity $searchConfig;

    protected ?CustomFieldEntity $customField;

    public function getSearchConfigId(): string
    {
        return $this->searchConfigId;
    }

    public function setSearchConfigId(string $searchConfigId): void
    {
        $this->searchConfigId = $searchConfigId;
    }

    public function getCustomFieldId(): ?string
    {
        return $this->customFieldId;
    }

    public function setCustomFieldId(?string $customFieldId): void
    {
        $this->customFieldId = $customFieldId;
    }

    public function getField(): string
    {
        return $this->field;
    }

    public function setField(string $field): void
    {
        $this->field = $field;
    }

    public function getTokenize(): bool
    {
        return $this->tokenize;
    }

    public function setTokenize(bool $tokenize): void
    {
        $this->tokenize = $tokenize;
    }

    public function getSearchable(): bool
    {
        return $this->searchable;
    }

    public function setSearchable(bool $searchable): void
    {
        $this->searchable = $searchable;
    }

    public function getRanking(): int
    {
        return $this->ranking;
    }

    public function setRanking(int $ranking): void
    {
        $this->ranking = $ranking;
    }

    public function getSearchConfig(): ?ProductSearchConfigEntity
    {
        return $this->searchConfig;
    }

    public function setSearchConfig(?ProductSearchConfigEntity $searchConfig): void
    {
        $this->searchConfig = $searchConfig;
    }

    public function getCustomField(): ?CustomFieldEntity
    {
        return $this->customField;
    }

    public function setCustomField(?CustomFieldEntity $customField): void
    {
        $this->customField = $customField;
    }
}
