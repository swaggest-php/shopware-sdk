<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\StateMachine;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\StateMachineHistory\StateMachineHistoryCollection;
use Swaggest\ShopwareSdk\Entity\StateMachineState\StateMachineStateCollection;
use Swaggest\ShopwareSdk\Entity\StateMachineTransition\StateMachineTransitionCollection;
use Swaggest\ShopwareSdk\Entity\StateMachineTranslation\StateMachineTranslationCollection;

final class StateMachineEntity extends Entity
{
    use EntityIdTrait;

    protected string $technicalName;

    protected string $name;

    protected array $customFields;

    protected ?StateMachineStateCollection $states;

    protected ?StateMachineTransitionCollection $transitions;

    protected ?string $initialStateId;

    protected StateMachineTranslationCollection $translations;

    protected ?StateMachineHistoryCollection $historyEntries;

    public function getTechnicalName(): string
    {
        return $this->technicalName;
    }

    public function setTechnicalName(string $technicalName): void
    {
        $this->technicalName = $technicalName;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getCustomFields(): array
    {
        return $this->customFields;
    }

    public function setCustomFields(array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getStates(): ?StateMachineStateCollection
    {
        return $this->states;
    }

    public function setStates(?StateMachineStateCollection $states): void
    {
        $this->states = $states;
    }

    public function getTransitions(): ?StateMachineTransitionCollection
    {
        return $this->transitions;
    }

    public function setTransitions(?StateMachineTransitionCollection $transitions): void
    {
        $this->transitions = $transitions;
    }

    public function getInitialStateId(): ?string
    {
        return $this->initialStateId;
    }

    public function setInitialStateId(?string $initialStateId): void
    {
        $this->initialStateId = $initialStateId;
    }

    public function getTranslations(): StateMachineTranslationCollection
    {
        return $this->translations;
    }

    public function setTranslations(StateMachineTranslationCollection $translations): void
    {
        $this->translations = $translations;
    }

    public function getHistoryEntries(): ?StateMachineHistoryCollection
    {
        return $this->historyEntries;
    }

    public function setHistoryEntries(?StateMachineHistoryCollection $historyEntries): void
    {
        $this->historyEntries = $historyEntries;
    }
}
