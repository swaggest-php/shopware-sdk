<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\EventActionSalesChannel;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\EventAction\EventActionEntity;
use Swaggest\ShopwareSdk\Entity\SalesChannel\SalesChannelEntity;

final class EventActionSalesChannelEntity extends Entity
{
    use EntityIdTrait;

    protected string $eventActionId;

    protected string $salesChannelId;

    protected ?EventActionEntity $eventAction;

    protected ?SalesChannelEntity $salesChannel;

    public function getEventActionId(): string
    {
        return $this->eventActionId;
    }

    public function setEventActionId(string $eventActionId): void
    {
        $this->eventActionId = $eventActionId;
    }

    public function getSalesChannelId(): string
    {
        return $this->salesChannelId;
    }

    public function setSalesChannelId(string $salesChannelId): void
    {
        $this->salesChannelId = $salesChannelId;
    }

    public function getEventAction(): ?EventActionEntity
    {
        return $this->eventAction;
    }

    public function setEventAction(?EventActionEntity $eventAction): void
    {
        $this->eventAction = $eventAction;
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
