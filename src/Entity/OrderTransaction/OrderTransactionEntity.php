<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\OrderTransaction;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\Order\OrderEntity;
use Swaggest\ShopwareSdk\Entity\PaymentMethod\PaymentMethodEntity;
use Swaggest\ShopwareSdk\Entity\StateMachineState\StateMachineStateEntity;

final class OrderTransactionEntity extends Entity
{
    use EntityIdTrait;

    protected string $orderId;

    protected ?string $orderVersionId;

    protected string $paymentMethodId;

    protected array $amount;

    protected string $stateId;

    protected ?StateMachineStateEntity $stateMachineState;

    protected ?array $customFields;

    protected ?OrderEntity $order;

    protected ?PaymentMethodEntity $paymentMethod;

    public function getOrderId(): string
    {
        return $this->orderId;
    }

    public function setOrderId(string $orderId): void
    {
        $this->orderId = $orderId;
    }

    public function getOrderVersionId(): ?string
    {
        return $this->orderVersionId;
    }

    public function setOrderVersionId(?string $orderVersionId): void
    {
        $this->orderVersionId = $orderVersionId;
    }

    public function getPaymentMethodId(): string
    {
        return $this->paymentMethodId;
    }

    public function setPaymentMethodId(string $paymentMethodId): void
    {
        $this->paymentMethodId = $paymentMethodId;
    }

    public function getAmount(): array
    {
        return $this->amount;
    }

    public function setAmount(array $amount): void
    {
        $this->amount = $amount;
    }

    public function getStateId(): string
    {
        return $this->stateId;
    }

    public function setStateId(string $stateId): void
    {
        $this->stateId = $stateId;
    }

    public function getStateMachineState(): ?StateMachineStateEntity
    {
        return $this->stateMachineState;
    }

    public function setStateMachineState(?StateMachineStateEntity $stateMachineState): void
    {
        $this->stateMachineState = $stateMachineState;
    }

    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    public function setCustomFields(?array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getOrder(): ?OrderEntity
    {
        return $this->order;
    }

    public function setOrder(?OrderEntity $order): void
    {
        $this->order = $order;
    }

    public function getPaymentMethod(): ?PaymentMethodEntity
    {
        return $this->paymentMethod;
    }

    public function setPaymentMethod(?PaymentMethodEntity $paymentMethod): void
    {
        $this->paymentMethod = $paymentMethod;
    }
}
