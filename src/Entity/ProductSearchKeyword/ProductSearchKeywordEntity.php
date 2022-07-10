<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ProductSearchKeyword;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\Language\LanguageEntity;
use Swaggest\ShopwareSdk\Entity\Product\ProductEntity;

final class ProductSearchKeywordEntity extends Entity
{
    use EntityIdTrait;

    protected string $languageId;

    protected string $productId;

    protected ?string $productVersionId;

    protected string $keyword;

    protected float $ranking;

    protected ?ProductEntity $product;

    protected ?LanguageEntity $language;

    public function getLanguageId(): string
    {
        return $this->languageId;
    }

    public function setLanguageId(string $languageId): void
    {
        $this->languageId = $languageId;
    }

    public function getProductId(): string
    {
        return $this->productId;
    }

    public function setProductId(string $productId): void
    {
        $this->productId = $productId;
    }

    public function getProductVersionId(): ?string
    {
        return $this->productVersionId;
    }

    public function setProductVersionId(?string $productVersionId): void
    {
        $this->productVersionId = $productVersionId;
    }

    public function getKeyword(): string
    {
        return $this->keyword;
    }

    public function setKeyword(string $keyword): void
    {
        $this->keyword = $keyword;
    }

    public function getRanking(): float
    {
        return $this->ranking;
    }

    public function setRanking(float $ranking): void
    {
        $this->ranking = $ranking;
    }

    public function getProduct(): ?ProductEntity
    {
        return $this->product;
    }

    public function setProduct(?ProductEntity $product): void
    {
        $this->product = $product;
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
