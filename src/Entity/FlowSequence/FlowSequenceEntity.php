<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\FlowSequence;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\Flow\FlowEntity;
use Swaggest\ShopwareSdk\Entity\Rule\RuleEntity;

final class FlowSequenceEntity extends Entity
{
    use EntityIdTrait;

    protected string $flowId;

    protected ?string $ruleId;

    protected ?string $actionName;

    protected array $config;

    protected ?int $position;

    protected ?int $displayGroup;

    protected bool $trueCase;

    protected ?FlowEntity $flow;

    protected ?RuleEntity $rule;

    protected ?FlowSequenceEntity $parent;

    protected ?FlowSequenceCollection $children;

    protected ?string $parentId;

    protected array $customFields;

    public function getFlowId(): string
    {
        return $this->flowId;
    }

    public function setFlowId(string $flowId): void
    {
        $this->flowId = $flowId;
    }

    public function getRuleId(): ?string
    {
        return $this->ruleId;
    }

    public function setRuleId(?string $ruleId): void
    {
        $this->ruleId = $ruleId;
    }

    public function getActionName(): ?string
    {
        return $this->actionName;
    }

    public function setActionName(?string $actionName): void
    {
        $this->actionName = $actionName;
    }

    public function getConfig(): array
    {
        return $this->config;
    }

    public function setConfig(array $config): void
    {
        $this->config = $config;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(?int $position): void
    {
        $this->position = $position;
    }

    public function getDisplayGroup(): ?int
    {
        return $this->displayGroup;
    }

    public function setDisplayGroup(?int $displayGroup): void
    {
        $this->displayGroup = $displayGroup;
    }

    public function getTrueCase(): bool
    {
        return $this->trueCase;
    }

    public function setTrueCase(bool $trueCase): void
    {
        $this->trueCase = $trueCase;
    }

    public function getFlow(): ?FlowEntity
    {
        return $this->flow;
    }

    public function setFlow(?FlowEntity $flow): void
    {
        $this->flow = $flow;
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

    public function getChildren(): ?FlowSequenceCollection
    {
        return $this->children;
    }

    public function setChildren(?FlowSequenceCollection $children): void
    {
        $this->children = $children;
    }

    public function getParentId(): ?string
    {
        return $this->parentId;
    }

    public function setParentId(?string $parentId): void
    {
        $this->parentId = $parentId;
    }

    public function getCustomFields(): array
    {
        return $this->customFields;
    }

    public function setCustomFields(array $customFields): void
    {
        $this->customFields = $customFields;
    }
}
