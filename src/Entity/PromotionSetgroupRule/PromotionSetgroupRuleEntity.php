<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\PromotionSetgroupRule;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\PromotionSetgroup\PromotionSetgroupEntity;
use Swaggest\ShopwareSdk\Entity\Rule\RuleEntity;

final class PromotionSetgroupRuleEntity extends Entity
{
    use EntityIdTrait;

    protected string $setgroupId;

    protected string $ruleId;

    protected ?PromotionSetgroupEntity $setgroup;

    protected ?RuleEntity $rule;

    public function getSetgroupId(): string
    {
        return $this->setgroupId;
    }

    public function setSetgroupId(string $setgroupId): void
    {
        $this->setgroupId = $setgroupId;
    }

    public function getRuleId(): string
    {
        return $this->ruleId;
    }

    public function setRuleId(string $ruleId): void
    {
        $this->ruleId = $ruleId;
    }

    public function getSetgroup(): ?PromotionSetgroupEntity
    {
        return $this->setgroup;
    }

    public function setSetgroup(?PromotionSetgroupEntity $setgroup): void
    {
        $this->setgroup = $setgroup;
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
