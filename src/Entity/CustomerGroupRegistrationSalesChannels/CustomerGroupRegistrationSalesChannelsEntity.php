<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\CustomerGroupRegistrationSalesChannels;

use Swaggest\ShopwareSdk\Entity\CustomerGroup\CustomerGroupEntity;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\SalesChannel\SalesChannelEntity;

final class CustomerGroupRegistrationSalesChannelsEntity extends Entity
{
    use EntityIdTrait;

    protected string $customerGroupId;

    protected string $salesChannelId;

    protected ?CustomerGroupEntity $customerGroup;

    protected ?SalesChannelEntity $salesChannel;

    public function getCustomerGroupId(): string
    {
        return $this->customerGroupId;
    }

    public function setCustomerGroupId(string $customerGroupId): void
    {
        $this->customerGroupId = $customerGroupId;
    }

    public function getSalesChannelId(): string
    {
        return $this->salesChannelId;
    }

    public function setSalesChannelId(string $salesChannelId): void
    {
        $this->salesChannelId = $salesChannelId;
    }

    public function getCustomerGroup(): ?CustomerGroupEntity
    {
        return $this->customerGroup;
    }

    public function setCustomerGroup(?CustomerGroupEntity $customerGroup): void
    {
        $this->customerGroup = $customerGroup;
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
