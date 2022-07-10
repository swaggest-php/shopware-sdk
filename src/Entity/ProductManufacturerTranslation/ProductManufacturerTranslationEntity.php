<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ProductManufacturerTranslation;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\Language\LanguageEntity;
use Swaggest\ShopwareSdk\Entity\ProductManufacturer\ProductManufacturerEntity;

final class ProductManufacturerTranslationEntity extends Entity
{
    use EntityIdTrait;

    protected string $name;

    protected ?string $description;

    protected ?array $customFields;

    protected string $productManufacturerId;

    protected string $languageId;

    protected ?ProductManufacturerEntity $productManufacturer;

    protected ?LanguageEntity $language;

    protected ?string $productManufacturerVersionId;

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

    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    public function setCustomFields(?array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getProductManufacturerId(): string
    {
        return $this->productManufacturerId;
    }

    public function setProductManufacturerId(string $productManufacturerId): void
    {
        $this->productManufacturerId = $productManufacturerId;
    }

    public function getLanguageId(): string
    {
        return $this->languageId;
    }

    public function setLanguageId(string $languageId): void
    {
        $this->languageId = $languageId;
    }

    public function getProductManufacturer(): ?ProductManufacturerEntity
    {
        return $this->productManufacturer;
    }

    public function setProductManufacturer(?ProductManufacturerEntity $productManufacturer): void
    {
        $this->productManufacturer = $productManufacturer;
    }

    public function getLanguage(): ?LanguageEntity
    {
        return $this->language;
    }

    public function setLanguage(?LanguageEntity $language): void
    {
        $this->language = $language;
    }

    public function getProductManufacturerVersionId(): ?string
    {
        return $this->productManufacturerVersionId;
    }

    public function setProductManufacturerVersionId(?string $productManufacturerVersionId): void
    {
        $this->productManufacturerVersionId = $productManufacturerVersionId;
    }
}
