<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\SalesChannelShippingMethod;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\SalesChannel\SalesChannelEntity;
use Swaggest\ShopwareSdk\Entity\ShippingMethod\ShippingMethodEntity;

final class SalesChannelShippingMethodEntity extends Entity
{
    protected string $salesChannelId;

    protected string $shippingMethodId;

    protected ?SalesChannelEntity $salesChannel;

    protected ?ShippingMethodEntity $shippingMethod;

    public function getSalesChannelId(): string
    {
        return $this->salesChannelId;
    }

    public function setSalesChannelId(string $salesChannelId): void
    {
        $this->salesChannelId = $salesChannelId;
    }

    public function getShippingMethodId(): string
    {
        return $this->shippingMethodId;
    }

    public function setShippingMethodId(string $shippingMethodId): void
    {
        $this->shippingMethodId = $shippingMethodId;
    }

    public function getSalesChannel(): ?SalesChannelEntity
    {
        return $this->salesChannel;
    }

    public function setSalesChannel(?SalesChannelEntity $salesChannel): void
    {
        $this->salesChannel = $salesChannel;
    }

    public function getShippingMethod(): ?ShippingMethodEntity
    {
        return $this->shippingMethod;
    }

    public function setShippingMethod(?ShippingMethodEntity $shippingMethod): void
    {
        $this->shippingMethod = $shippingMethod;
    }
}
