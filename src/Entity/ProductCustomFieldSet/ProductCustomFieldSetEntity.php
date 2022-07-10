<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ProductCustomFieldSet;

use Swaggest\ShopwareSdk\Entity\CustomFieldSet\CustomFieldSetEntity;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\Product\ProductEntity;

final class ProductCustomFieldSetEntity extends Entity
{
    use EntityIdTrait;

    protected string $productId;

    protected string $customFieldSetId;

    protected ?string $productVersionId;

    protected ?ProductEntity $product;

    protected ?CustomFieldSetEntity $customFieldSet;

    public function getProductId(): string
    {
        return $this->productId;
    }

    public function setProductId(string $productId): void
    {
        $this->productId = $productId;
    }

    public function getCustomFieldSetId(): string
    {
        return $this->customFieldSetId;
    }

    public function setCustomFieldSetId(string $customFieldSetId): void
    {
        $this->customFieldSetId = $customFieldSetId;
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

    public function getCustomFieldSet(): ?CustomFieldSetEntity
    {
        return $this->customFieldSet;
    }

    public function setCustomFieldSet(?CustomFieldSetEntity $customFieldSet): void
    {
        $this->customFieldSet = $customFieldSet;
    }
}
