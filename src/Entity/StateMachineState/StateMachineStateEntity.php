<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\StateMachineState;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\Order\OrderCollection;
use Swaggest\ShopwareSdk\Entity\OrderDelivery\OrderDeliveryCollection;
use Swaggest\ShopwareSdk\Entity\OrderTransaction\OrderTransactionCollection;
use Swaggest\ShopwareSdk\Entity\StateMachine\StateMachineEntity;
use Swaggest\ShopwareSdk\Entity\StateMachineHistory\StateMachineHistoryCollection;
use Swaggest\ShopwareSdk\Entity\StateMachineStateTranslation\StateMachineStateTranslationCollection;
use Swaggest\ShopwareSdk\Entity\StateMachineTransition\StateMachineTransitionCollection;

final class StateMachineStateEntity extends Entity
{
    protected string $technicalName;

    protected string $name;

    protected string $stateMachineId;

    protected ?StateMachineEntity $stateMachine;

    protected ?StateMachineTransitionCollection $fromStateMachineTransitions;

    protected ?StateMachineTransitionCollection $toStateMachineTransitions;

    protected ?StateMachineStateTranslationCollection $translations;

    protected ?OrderTransactionCollection $orderTransactions;

    protected ?OrderDeliveryCollection $orderDeliveries;

    protected ?OrderCollection $orders;

    protected ?array $customFields;

    protected ?StateMachineHistoryCollection $toStateMachineHistoryEntries;

    protected ?StateMachineHistoryCollection $fromStateMachineHistoryEntries;

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

    public function getStateMachineId(): string
    {
        return $this->stateMachineId;
    }

    public function setStateMachineId(string $stateMachineId): void
    {
        $this->stateMachineId = $stateMachineId;
    }

    public function getStateMachine(): ?StateMachineEntity
    {
        return $this->stateMachine;
    }

    public function setStateMachine(?StateMachineEntity $stateMachine): void
    {
        $this->stateMachine = $stateMachine;
    }

    public function getFromStateMachineTransitions(): ?StateMachineTransitionCollection
    {
        return $this->fromStateMachineTransitions;
    }

    public function setFromStateMachineTransitions(?StateMachineTransitionCollection $fromStateMachineTransitions): void
    {
        $this->fromStateMachineTransitions = $fromStateMachineTransitions;
    }

    public function getToStateMachineTransitions(): ?StateMachineTransitionCollection
    {
        return $this->toStateMachineTransitions;
    }

    public function setToStateMachineTransitions(?StateMachineTransitionCollection $toStateMachineTransitions): void
    {
        $this->toStateMachineTransitions = $toStateMachineTransitions;
    }

    public function getTranslations(): ?StateMachineStateTranslationCollection
    {
        return $this->translations;
    }

    public function setTranslations(?StateMachineStateTranslationCollection $translations): void
    {
        $this->translations = $translations;
    }

    public function getOrderTransactions(): ?OrderTransactionCollection
    {
        return $this->orderTransactions;
    }

    public function setOrderTransactions(?OrderTransactionCollection $orderTransactions): void
    {
        $this->orderTransactions = $orderTransactions;
    }

    public function getOrderDeliveries(): ?OrderDeliveryCollection
    {
        return $this->orderDeliveries;
    }

    public function setOrderDeliveries(?OrderDeliveryCollection $orderDeliveries): void
    {
        $this->orderDeliveries = $orderDeliveries;
    }

    public function getOrders(): ?OrderCollection
    {
        return $this->orders;
    }

    public function setOrders(?OrderCollection $orders): void
    {
        $this->orders = $orders;
    }

    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    public function setCustomFields(?array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getToStateMachineHistoryEntries(): ?StateMachineHistoryCollection
    {
        return $this->toStateMachineHistoryEntries;
    }

    public function setToStateMachineHistoryEntries(?StateMachineHistoryCollection $toStateMachineHistoryEntries): void
    {
        $this->toStateMachineHistoryEntries = $toStateMachineHistoryEntries;
    }

    public function getFromStateMachineHistoryEntries(): ?StateMachineHistoryCollection
    {
        return $this->fromStateMachineHistoryEntries;
    }

    public function setFromStateMachineHistoryEntries(?StateMachineHistoryCollection $fromStateMachineHistoryEntries): void
    {
        $this->fromStateMachineHistoryEntries = $fromStateMachineHistoryEntries;
    }
}
