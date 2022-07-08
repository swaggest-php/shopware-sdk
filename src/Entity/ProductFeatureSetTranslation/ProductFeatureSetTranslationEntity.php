<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ProductFeatureSetTranslation;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\Language\LanguageEntity;
use Swaggest\ShopwareSdk\Entity\ProductFeatureSet\ProductFeatureSetEntity;

final class ProductFeatureSetTranslationEntity extends Entity
{
    use EntityIdTrait;

    protected string $name;

    protected ?string $description;

    protected string $productFeatureSetId;

    protected string $languageId;

    protected ?ProductFeatureSetEntity $productFeatureSet;

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

    public function getProductFeatureSetId(): string
    {
        return $this->productFeatureSetId;
    }

    public function setProductFeatureSetId(string $productFeatureSetId): void
    {
        $this->productFeatureSetId = $productFeatureSetId;
    }

    public function getLanguageId(): string
    {
        return $this->languageId;
    }

    public function setLanguageId(string $languageId): void
    {
        $this->languageId = $languageId;
    }

    public function getProductFeatureSet(): ?ProductFeatureSetEntity
    {
        return $this->productFeatureSet;
    }

    public function setProductFeatureSet(?ProductFeatureSetEntity $productFeatureSet): void
    {
        $this->productFeatureSet = $productFeatureSet;
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
