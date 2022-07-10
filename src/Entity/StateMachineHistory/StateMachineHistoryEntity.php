<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\StateMachineHistory;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\StateMachine\StateMachineEntity;
use Swaggest\ShopwareSdk\Entity\StateMachineState\StateMachineStateEntity;
use Swaggest\ShopwareSdk\Entity\User\UserEntity;

final class StateMachineHistoryEntity extends Entity
{
    protected string $stateMachineId;

    protected ?StateMachineEntity $stateMachine;

    protected string $entityName;

    protected array $entityId;

    protected string $fromStateId;

    protected ?StateMachineStateEntity $fromStateMachineState;

    protected string $toStateId;

    protected ?StateMachineStateEntity $toStateMachineState;

    protected ?string $transitionActionName;

    protected ?string $userId;

    protected ?UserEntity $user;

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

    public function getEntityName(): string
    {
        return $this->entityName;
    }

    public function setEntityName(string $entityName): void
    {
        $this->entityName = $entityName;
    }

    public function getEntityId(): array
    {
        return $this->entityId;
    }

    public function setEntityId(array $entityId): void
    {
        $this->entityId = $entityId;
    }

    public function getFromStateId(): string
    {
        return $this->fromStateId;
    }

    public function setFromStateId(string $fromStateId): void
    {
        $this->fromStateId = $fromStateId;
    }

    public function getFromStateMachineState(): ?StateMachineStateEntity
    {
        return $this->fromStateMachineState;
    }

    public function setFromStateMachineState(?StateMachineStateEntity $fromStateMachineState): void
    {
        $this->fromStateMachineState = $fromStateMachineState;
    }

    public function getToStateId(): string
    {
        return $this->toStateId;
    }

    public function setToStateId(string $toStateId): void
    {
        $this->toStateId = $toStateId;
    }

    public function getToStateMachineState(): ?StateMachineStateEntity
    {
        return $this->toStateMachineState;
    }

    public function setToStateMachineState(?StateMachineStateEntity $toStateMachineState): void
    {
        $this->toStateMachineState = $toStateMachineState;
    }

    public function getTransitionActionName(): ?string
    {
        return $this->transitionActionName;
    }

    public function setTransitionActionName(?string $transitionActionName): void
    {
        $this->transitionActionName = $transitionActionName;
    }

    public function getUserId(): ?string
    {
        return $this->userId;
    }

    public function setUserId(?string $userId): void
    {
        $this->userId = $userId;
    }

    public function getUser(): ?UserEntity
    {
        return $this->user;
    }

    public function setUser(?UserEntity $user): void
    {
        $this->user = $user;
    }
}
