<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\SalesChannelAnalytics;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\SalesChannel\SalesChannelEntity;

final class SalesChannelAnalyticsEntity extends Entity
{
    use EntityIdTrait;

    protected ?string $trackingId;

    protected bool $active;

    protected bool $trackOrders;

    protected bool $anonymizeIp;

    protected ?SalesChannelEntity $salesChannel;

    public function getTrackingId(): ?string
    {
        return $this->trackingId;
    }

    public function setTrackingId(?string $trackingId): void
    {
        $this->trackingId = $trackingId;
    }

    public function getActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): void
    {
        $this->active = $active;
    }

    public function getTrackOrders(): bool
    {
        return $this->trackOrders;
    }

    public function setTrackOrders(bool $trackOrders): void
    {
        $this->trackOrders = $trackOrders;
    }

    public function getAnonymizeIp(): bool
    {
        return $this->anonymizeIp;
    }

    public function setAnonymizeIp(bool $anonymizeIp): void
    {
        $this->anonymizeIp = $anonymizeIp;
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
