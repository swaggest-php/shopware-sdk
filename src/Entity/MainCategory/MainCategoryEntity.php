<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\MainCategory;

use Swaggest\ShopwareSdk\Entity\Category\CategoryEntity;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\Product\ProductEntity;
use Swaggest\ShopwareSdk\Entity\SalesChannel\SalesChannelEntity;

final class MainCategoryEntity extends Entity
{
    protected string $productId;

    protected ?string $productVersionId;

    protected string $categoryId;

    protected ?string $categoryVersionId;

    protected string $salesChannelId;

    protected ?ProductEntity $product;

    protected ?CategoryEntity $category;

    protected ?SalesChannelEntity $salesChannel;

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

    public function getCategoryId(): string
    {
        return $this->categoryId;
    }

    public function setCategoryId(string $categoryId): void
    {
        $this->categoryId = $categoryId;
    }

    public function getCategoryVersionId(): ?string
    {
        return $this->categoryVersionId;
    }

    public function setCategoryVersionId(?string $categoryVersionId): void
    {
        $this->categoryVersionId = $categoryVersionId;
    }

    public function getSalesChannelId(): string
    {
        return $this->salesChannelId;
    }

    public function setSalesChannelId(string $salesChannelId): void
    {
        $this->salesChannelId = $salesChannelId;
    }

    public function getProduct(): ?ProductEntity
    {
        return $this->product;
    }

    public function setProduct(?ProductEntity $product): void
    {
        $this->product = $product;
    }

    public function getCategory(): ?CategoryEntity
    {
        return $this->category;
    }

    public function setCategory(?CategoryEntity $category): void
    {
        $this->category = $category;
    }

    public function getSalesChannel(): ?SalesChannelEntity
    {
        return $this->salesChannel;
    }

    public function setSalesChannel(?SalesChannelEntity $salesChannel): void
    {
        $this->salesChannel = $salesChannel;
    }
}
