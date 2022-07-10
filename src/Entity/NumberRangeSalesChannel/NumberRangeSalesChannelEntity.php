<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\NumberRangeSalesChannel;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\NumberRange\NumberRangeEntity;
use Swaggest\ShopwareSdk\Entity\NumberRangeType\NumberRangeTypeEntity;
use Swaggest\ShopwareSdk\Entity\SalesChannel\SalesChannelEntity;

final class NumberRangeSalesChannelEntity extends Entity
{
    protected string $numberRangeId;

    protected string $salesChannelId;

    protected ?string $numberRangeTypeId;

    protected ?NumberRangeEntity $numberRange;

    protected ?SalesChannelEntity $salesChannel;

    protected ?NumberRangeTypeEntity $numberRangeType;

    public function getNumberRangeId(): string
    {
        return $this->numberRangeId;
    }

    public function setNumberRangeId(string $numberRangeId): void
    {
        $this->numberRangeId = $numberRangeId;
    }

    public function getSalesChannelId(): string
    {
        return $this->salesChannelId;
    }

    public function setSalesChannelId(string $salesChannelId): void
    {
        $this->salesChannelId = $salesChannelId;
    }

    public function getNumberRangeTypeId(): ?string
    {
        return $this->numberRangeTypeId;
    }

    public function setNumberRangeTypeId(?string $numberRangeTypeId): void
    {
        $this->numberRangeTypeId = $numberRangeTypeId;
    }

    public function getNumberRange(): ?NumberRangeEntity
    {
        return $this->numberRange;
    }

    public function setNumberRange(?NumberRangeEntity $numberRange): void
    {
        $this->numberRange = $numberRange;
    }

    public function getSalesChannel(): ?SalesChannelEntity
    {
        return $this->salesChannel;
    }

    public function setSalesChannel(?SalesChannelEntity $salesChannel): void
    {
        $this->salesChannel = $salesChannel;
    }

    public function getNumberRangeType(): ?NumberRangeTypeEntity
    {
        return $this->numberRangeType;
    }

    public function setNumberRangeType(?NumberRangeTypeEntity $numberRangeType): void
    {
        $this->numberRangeType = $numberRangeType;
    }
}
