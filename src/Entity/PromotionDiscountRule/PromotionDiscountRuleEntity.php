<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\PromotionDiscountRule;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\PromotionDiscount\PromotionDiscountEntity;
use Swaggest\ShopwareSdk\Entity\Rule\RuleEntity;

final class PromotionDiscountRuleEntity extends Entity
{
    use EntityIdTrait;

    protected string $discountId;

    protected string $ruleId;

    protected ?PromotionDiscountEntity $discount;

    protected ?RuleEntity $rule;

    public function getDiscountId(): string
    {
        return $this->discountId;
    }

    public function setDiscountId(string $discountId): void
    {
        $this->discountId = $discountId;
    }

    public function getRuleId(): string
    {
        return $this->ruleId;
    }

    public function setRuleId(string $ruleId): void
    {
        $this->ruleId = $ruleId;
    }

    public function getDiscount(): ?PromotionDiscountEntity
    {
        return $this->discount;
    }

    public function setDiscount(?PromotionDiscountEntity $discount): void
    {
        $this->discount = $discount;
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
