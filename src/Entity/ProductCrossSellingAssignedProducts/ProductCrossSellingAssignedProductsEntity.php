<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ProductCrossSellingAssignedProducts;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\Product\ProductEntity;
use Swaggest\ShopwareSdk\Entity\ProductCrossSelling\ProductCrossSellingEntity;

final class ProductCrossSellingAssignedProductsEntity extends Entity
{
    use EntityIdTrait;

    protected string $crossSellingId;

    protected string $productId;

    protected string $productVersionId;

    protected ?ProductEntity $product;

    protected ?ProductCrossSellingEntity $crossSelling;

    protected ?int $position;

    public function getCrossSellingId(): string
    {
        return $this->crossSellingId;
    }

    public function setCrossSellingId(string $crossSellingId): void
    {
        $this->crossSellingId = $crossSellingId;
    }

    public function getProductId(): string
    {
        return $this->productId;
    }

    public function setProductId(string $productId): void
    {
        $this->productId = $productId;
    }

    public function getProductVersionId(): string
    {
        return $this->productVersionId;
    }

    public function setProductVersionId(string $productVersionId): void
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

    public function getCrossSelling(): ?ProductCrossSellingEntity
    {
        return $this->crossSelling;
    }

    public function setCrossSelling(?ProductCrossSellingEntity $crossSelling): void
    {
        $this->crossSelling = $crossSelling;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(?int $position): void
    {
        $this->position = $position;
    }
}
