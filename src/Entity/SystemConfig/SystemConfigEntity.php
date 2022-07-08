<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\SystemConfig;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\SalesChannel\SalesChannelEntity;

final class SystemConfigEntity extends Entity
{
    use EntityIdTrait;

    protected string $configurationKey;

    protected array $configurationValue;

    protected ?string $salesChannelId;

    protected ?SalesChannelEntity $salesChannel;

    public function getConfigurationKey(): string
    {
        return $this->configurationKey;
    }

    public function setConfigurationKey(string $configurationKey): void
    {
        $this->configurationKey = $configurationKey;
    }

    public function getConfigurationValue(): array
    {
        return $this->configurationValue;
    }

    public function setConfigurationValue(array $configurationValue): void
    {
        $this->configurationValue = $configurationValue;
    }

    public function getSalesChannelId(): ?string
    {
        return $this->salesChannelId;
    }

    public function setSalesChannelId(?string $salesChannelId): void
    {
        $this->salesChannelId = $salesChannelId;
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
