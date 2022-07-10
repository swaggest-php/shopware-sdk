<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\EventActionRule;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EventAction\EventActionEntity;
use Swaggest\ShopwareSdk\Entity\Rule\RuleEntity;

final class EventActionRuleEntity extends Entity
{
    protected string $eventActionId;

    protected string $ruleId;

    protected ?EventActionEntity $eventAction;

    protected ?RuleEntity $rule;

    public function getEventActionId(): string
    {
        return $this->eventActionId;
    }

    public function setEventActionId(string $eventActionId): void
    {
        $this->eventActionId = $eventActionId;
    }

    public function getRuleId(): string
    {
        return $this->ruleId;
    }

    public function setRuleId(string $ruleId): void
    {
        $this->ruleId = $ruleId;
    }

    public function getEventAction(): ?EventActionEntity
    {
        return $this->eventAction;
    }

    public function setEventAction(?EventActionEntity $eventAction): void
    {
        $this->eventAction = $eventAction;
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
