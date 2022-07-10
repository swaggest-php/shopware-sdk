<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ProductSortingTranslation;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\Language\LanguageEntity;
use Swaggest\ShopwareSdk\Entity\ProductSorting\ProductSortingEntity;

final class ProductSortingTranslationEntity extends Entity
{
    protected string $label;

    protected string $productSortingId;

    protected string $languageId;

    protected ?ProductSortingEntity $productSorting;

    protected ?LanguageEntity $language;

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    public function getProductSortingId(): string
    {
        return $this->productSortingId;
    }

    public function setProductSortingId(string $productSortingId): void
    {
        $this->productSortingId = $productSortingId;
    }

    public function getLanguageId(): string
    {
        return $this->languageId;
    }

    public function setLanguageId(string $languageId): void
    {
        $this->languageId = $languageId;
    }

    public function getProductSorting(): ?ProductSortingEntity
    {
        return $this->productSorting;
    }

    public function setProductSorting(?ProductSortingEntity $productSorting): void
    {
        $this->productSorting = $productSorting;
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
