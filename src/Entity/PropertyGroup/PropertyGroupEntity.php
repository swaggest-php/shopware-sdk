<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\PropertyGroup;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\PropertyGroupOption\PropertyGroupOptionCollection;
use Swaggest\ShopwareSdk\Entity\PropertyGroupTranslation\PropertyGroupTranslationCollection;

final class PropertyGroupEntity extends Entity
{
    protected string $name;

    protected ?string $description;

    protected string $displayType;

    protected string $sortingType;

    protected ?bool $filterable;

    protected ?bool $visibleOnProductDetailPage;

    protected ?int $position;

    protected ?array $customFields;

    protected ?PropertyGroupOptionCollection $options;

    protected ?PropertyGroupTranslationCollection $translations;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getDisplayType(): string
    {
        return $this->displayType;
    }

    public function setDisplayType(string $displayType): void
    {
        $this->displayType = $displayType;
    }

    public function getSortingType(): string
    {
        return $this->sortingType;
    }

    public function setSortingType(string $sortingType): void
    {
        $this->sortingType = $sortingType;
    }

    public function getFilterable(): ?bool
    {
        return $this->filterable;
    }

    public function setFilterable(?bool $filterable): void
    {
        $this->filterable = $filterable;
    }

    public function getVisibleOnProductDetailPage(): ?bool
    {
        return $this->visibleOnProductDetailPage;
    }

    public function setVisibleOnProductDetailPage(?bool $visibleOnProductDetailPage): void
    {
        $this->visibleOnProductDetailPage = $visibleOnProductDetailPage;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(?int $position): void
    {
        $this->position = $position;
    }

    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    public function setCustomFields(?array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getOptions(): ?PropertyGroupOptionCollection
    {
        return $this->options;
    }

    public function setOptions(?PropertyGroupOptionCollection $options): void
    {
        $this->options = $options;
    }

    public function getTranslations(): ?PropertyGroupTranslationCollection
    {
        return $this->translations;
    }

    public function setTranslations(?PropertyGroupTranslationCollection $translations): void
    {
        $this->translations = $translations;
    }
}
