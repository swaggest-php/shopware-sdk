<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\PromotionSetgroup;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\Promotion\PromotionEntity;
use Swaggest\ShopwareSdk\Entity\Rule\RuleCollection;

final class PromotionSetgroupEntity extends Entity
{
    use EntityIdTrait;

    protected string $promotionId;

    protected string $packagerKey;

    protected string $sorterKey;

    protected float $value;

    protected ?PromotionEntity $promotion;

    protected ?RuleCollection $setGroupRules;

    public function getPromotionId(): string
    {
        return $this->promotionId;
    }

    public function setPromotionId(string $promotionId): void
    {
        $this->promotionId = $promotionId;
    }

    public function getPackagerKey(): string
    {
        return $this->packagerKey;
    }

    public function setPackagerKey(string $packagerKey): void
    {
        $this->packagerKey = $packagerKey;
    }

    public function getSorterKey(): string
    {
        return $this->sorterKey;
    }

    public function setSorterKey(string $sorterKey): void
    {
        $this->sorterKey = $sorterKey;
    }

    public function getValue(): float
    {
        return $this->value;
    }

    public function setValue(float $value): void
    {
        $this->value = $value;
    }

    public function getPromotion(): ?PromotionEntity
    {
        return $this->promotion;
    }

    public function setPromotion(?PromotionEntity $promotion): void
    {
        $this->promotion = $promotion;
    }

    public function getSetGroupRules(): ?RuleCollection
    {
        return $this->setGroupRules;
    }

    public function setSetGroupRules(?RuleCollection $setGroupRules): void
    {
        $this->setGroupRules = $setGroupRules;
    }
}
