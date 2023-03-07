<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\PromotionSalesChannel;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\Promotion\PromotionEntity;
use Swaggest\ShopwareSdk\Entity\SalesChannel\SalesChannelEntity;

final class PromotionSalesChannelEntity extends Entity
{
    protected string $promotionId;

    protected string $salesChannelId;

    protected int $priority;

    protected ?PromotionEntity $promotion;

    protected ?SalesChannelEntity $salesChannel;

    public function getPromotionId(): string
    {
        return $this->promotionId;
    }

    public function setPromotionId(string $promotionId): void
    {
        $this->promotionId = $promotionId;
    }

    public function getSalesChannelId(): string
    {
        return $this->salesChannelId;
    }

    public function setSalesChannelId(string $salesChannelId): void
    {
        $this->salesChannelId = $salesChannelId;
    }

    public function getPriority(): int
    {
        return $this->priority;
    }

    public function setPriority(int $priority): void
    {
        $this->priority = $priority;
    }

    public function getPromotion(): ?PromotionEntity
    {
        return $this->promotion;
    }

    public function setPromotion(?PromotionEntity $promotion): void
    {
        $this->promotion = $promotion;
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
