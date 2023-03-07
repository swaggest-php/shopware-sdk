<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\PromotionCartRule;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\Promotion\PromotionEntity;
use Swaggest\ShopwareSdk\Entity\Rule\RuleEntity;

final class PromotionCartRuleEntity extends Entity
{
    protected string $promotionId;

    protected string $ruleId;

    protected ?PromotionEntity $promotion;

    protected ?RuleEntity $rule;

    public function getPromotionId(): string
    {
        return $this->promotionId;
    }

    public function setPromotionId(string $promotionId): void
    {
        $this->promotionId = $promotionId;
    }

    public function getRuleId(): string
    {
        return $this->ruleId;
    }

    public function setRuleId(string $ruleId): void
    {
        $this->ruleId = $ruleId;
    }

    public function getPromotion(): ?PromotionEntity
    {
        return $this->promotion;
    }

    public function setPromotion(?PromotionEntity $promotion): void
    {
        $this->promotion = $promotion;
    }

    public function getRule(): ?RuleEntity
    {
        return $this->rule;
    }

    public function setRule(?RuleEntity $rule): void
    {
        $this->rule = $rule;
    }
}
