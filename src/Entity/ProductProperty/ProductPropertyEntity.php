<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ProductProperty;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\Product\ProductEntity;
use Swaggest\ShopwareSdk\Entity\PropertyGroupOption\PropertyGroupOptionEntity;

final class ProductPropertyEntity extends Entity
{
    use EntityIdTrait;

    protected string $productId;

    protected string $productVersionId;

    protected string $optionId;

    protected ?ProductEntity $product;

    protected ?PropertyGroupOptionEntity $option;

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

    public function getOptionId(): string
    {
        return $this->optionId;
    }

    public function setOptionId(string $optionId): void
    {
        $this->optionId = $optionId;
    }

    public function getProduct(): ?ProductEntity
    {
        return $this->product;
    }

    public function setProduct(?ProductEntity $product): void
    {
        $this->product = $product;
    }

    public function getOption(): ?PropertyGroupOptionEntity
    {
        return $this->option;
    }

    public function setOption(?PropertyGroupOptionEntity $option): void
    {
        $this->option = $option;
    }
}
