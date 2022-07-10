<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ProductCrossSelling;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\Product\ProductEntity;
use Swaggest\ShopwareSdk\Entity\ProductCrossSellingAssignedProducts\ProductCrossSellingAssignedProductsCollection;
use Swaggest\ShopwareSdk\Entity\ProductCrossSellingTranslation\ProductCrossSellingTranslationCollection;
use Swaggest\ShopwareSdk\Entity\ProductStream\ProductStreamEntity;

final class ProductCrossSellingEntity extends Entity
{
    use EntityIdTrait;

    protected string $name;

    protected int $position;

    protected ?string $sortBy;

    protected ?string $sortDirection;

    protected string $type;

    protected ?bool $active;

    protected ?int $limit;

    protected string $productId;

    protected ?string $productVersionId;

    protected ?ProductEntity $product;

    protected ?string $productStreamId;

    protected ?ProductStreamEntity $productStream;

    protected ?ProductCrossSellingAssignedProductsCollection $assignedProducts;

    protected ProductCrossSellingTranslationCollection $translations;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getPosition(): int
    {
        return $this->position;
    }

    public function setPosition(int $position): void
    {
        $this->position = $position;
    }

    public function getSortBy(): ?string
    {
        return $this->sortBy;
    }

    public function setSortBy(?string $sortBy): void
    {
        $this->sortBy = $sortBy;
    }

    public function getSortDirection(): ?string
    {
        return $this->sortDirection;
    }

    public function setSortDirection(?string $sortDirection): void
    {
        $this->sortDirection = $sortDirection;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(?bool $active): void
    {
        $this->active = $active;
    }

    public function getLimit(): ?int
    {
        return $this->limit;
    }

    public function setLimit(?int $limit): void
    {
        $this->limit = $limit;
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

    public function getProduct(): ?ProductEntity
    {
        return $this->product;
    }

    public function setProduct(?ProductEntity $product): void
    {
        $this->product = $product;
    }

    public function getProductStreamId(): ?string
    {
        return $this->productStreamId;
    }

    public function setProductStreamId(?string $productStreamId): void
    {
        $this->productStreamId = $productStreamId;
    }

    public function getProductStream(): ?ProductStreamEntity
    {
        return $this->productStream;
    }

    public function setProductStream(?ProductStreamEntity $productStream): void
    {
        $this->productStream = $productStream;
    }

    public function getAssignedProducts(): ?ProductCrossSellingAssignedProductsCollection
    {
        return $this->assignedProducts;
    }

    public function setAssignedProducts(?ProductCrossSellingAssignedProductsCollection $assignedProducts): void
    {
        $this->assignedProducts = $assignedProducts;
    }

    public function getTranslations(): ProductCrossSellingTranslationCollection
    {
        return $this->translations;
    }

    public function setTranslations(ProductCrossSellingTranslationCollection $translations): void
    {
        $this->translations = $translations;
    }
}
