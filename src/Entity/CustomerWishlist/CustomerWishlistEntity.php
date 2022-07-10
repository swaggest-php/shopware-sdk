<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\CustomerWishlist;

use Swaggest\ShopwareSdk\Entity\Customer\CustomerEntity;
use Swaggest\ShopwareSdk\Entity\CustomerWishlistProduct\CustomerWishlistProductCollection;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\SalesChannel\SalesChannelEntity;

final class CustomerWishlistEntity extends Entity
{
    use EntityIdTrait;

    protected string $customerId;

    protected string $salesChannelId;

    protected ?array $customFields;

    protected ?CustomerWishlistProductCollection $products;

    protected ?CustomerEntity $customer;

    protected ?SalesChannelEntity $salesChannel;

    public function getCustomerId(): string
    {
        return $this->customerId;
    }

    public function setCustomerId(string $customerId): void
    {
        $this->customerId = $customerId;
    }

    public function getSalesChannelId(): string
    {
        return $this->salesChannelId;
    }

    public function setSalesChannelId(string $salesChannelId): void
    {
        $this->salesChannelId = $salesChannelId;
    }

    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    public function setCustomFields(?array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getProducts(): ?CustomerWishlistProductCollection
    {
        return $this->products;
    }

    public function setProducts(?CustomerWishlistProductCollection $products): void
    {
        $this->products = $products;
    }

    public function getCustomer(): ?CustomerEntity
    {
        return $this->customer;
    }

    public function setCustomer(?CustomerEntity $customer): void
    {
        $this->customer = $customer;
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
