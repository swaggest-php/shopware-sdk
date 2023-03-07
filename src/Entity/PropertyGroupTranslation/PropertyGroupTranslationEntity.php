<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\PropertyGroupTranslation;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\Language\LanguageEntity;
use Swaggest\ShopwareSdk\Entity\PropertyGroup\PropertyGroupEntity;

final class PropertyGroupTranslationEntity extends Entity
{
    protected string $name;

    protected ?string $description;

    protected ?int $position;

    protected ?array $customFields;

    protected string $propertyGroupId;

    protected string $languageId;

    protected ?PropertyGroupEntity $propertyGroup;

    protected ?LanguageEntity $language;

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

    public function getPropertyGroupId(): string
    {
        return $this->propertyGroupId;
    }

    public function setPropertyGroupId(string $propertyGroupId): void
    {
        $this->propertyGroupId = $propertyGroupId;
    }

    public function getLanguageId(): string
    {
        return $this->languageId;
    }

    public function setLanguageId(string $languageId): void
    {
        $this->languageId = $languageId;
    }

    public function getPropertyGroup(): ?PropertyGroupEntity
    {
        return $this->propertyGroup;
    }

    public function setPropertyGroup(?PropertyGroupEntity $propertyGroup): void
    {
        $this->propertyGroup = $propertyGroup;
    }

    public function getLanguage(): ?LanguageEntity
    {
        return $this->language;
    }

    public function setLanguage(?LanguageEntity $language): void
    {
        $this->language = $language;
    }
}
