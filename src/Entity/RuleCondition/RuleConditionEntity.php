<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\RuleCondition;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\Rule\RuleEntity;

final class RuleConditionEntity extends Entity
{
    use EntityIdTrait;

    protected ?string $type;

    protected string $ruleId;

    protected ?string $parentId;

    protected ?array $value;

    protected ?int $position;

    protected ?RuleEntity $rule;

    protected ?RuleConditionEntity $parent;

    protected ?RuleConditionCollection $children;

    protected ?array $customFields;

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function getRuleId(): string
    {
        return $this->ruleId;
    }

    public function setRuleId(string $ruleId): void
    {
        $this->ruleId = $ruleId;
    }

    public function getParentId(): ?string
    {
        return $this->parentId;
    }

    public function setParentId(?string $parentId): void
    {
        $this->parentId = $parentId;
    }

    public function getValue(): ?array
    {
        return $this->value;
    }

    public function setValue(?array $value): void
    {
        $this->value = $value;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(?int $position): void
    {
        $this->position = $position;
    }

    public function getRule(): ?RuleEntity
    {
        return $this->rule;
    }

    public function setRule(?RuleEntity $rule): void
    {
        $this->rule = $rule;
    }

    public function getParent(): ?self
    {
        return $this->parent;
    }

    public function setParent(?self $parent): void
    {
        $this->parent = $parent;
    }

    public function getChildren(): ?RuleConditionCollection
    {
        return $this->children;
    }

    public function setChildren(?RuleConditionCollection $children): void
    {
        $this->children = $children;
    }

    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    public function setCustomFields(?array $customFields): void
    {
        $this->customFields = $customFields;
    }
}
