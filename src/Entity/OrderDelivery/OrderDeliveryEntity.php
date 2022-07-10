<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\OrderDelivery;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\Order\OrderEntity;
use Swaggest\ShopwareSdk\Entity\OrderAddress\OrderAddressEntity;
use Swaggest\ShopwareSdk\Entity\OrderDeliveryPosition\OrderDeliveryPositionCollection;
use Swaggest\ShopwareSdk\Entity\ShippingMethod\ShippingMethodEntity;
use Swaggest\ShopwareSdk\Entity\StateMachineState\StateMachineStateEntity;

final class OrderDeliveryEntity extends Entity
{
    use EntityIdTrait;

    protected string $orderId;

    protected ?string $orderVersionId;

    protected string $shippingOrderAddressId;

    protected ?string $shippingOrderAddressVersionId;

    protected string $shippingMethodId;

    protected string $stateId;

    protected ?StateMachineStateEntity $stateMachineState;

    protected array $trackingCodes;

    protected \DateTimeInterface $shippingDateEarliest;

    protected \DateTimeInterface $shippingDateLatest;

    protected ?array $shippingCosts;

    protected ?array $customFields;

    protected ?OrderEntity $order;

    protected ?OrderAddressEntity $shippingOrderAddress;

    protected ?ShippingMethodEntity $shippingMethod;

    protected ?OrderDeliveryPositionCollection $positions;

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

    public function getShippingOrderAddressId(): string
    {
        return $this->shippingOrderAddressId;
    }

    public function setShippingOrderAddressId(string $shippingOrderAddressId): void
    {
        $this->shippingOrderAddressId = $shippingOrderAddressId;
    }

    public function getShippingOrderAddressVersionId(): ?string
    {
        return $this->shippingOrderAddressVersionId;
    }

    public function setShippingOrderAddressVersionId(?string $shippingOrderAddressVersionId): void
    {
        $this->shippingOrderAddressVersionId = $shippingOrderAddressVersionId;
    }

    public function getShippingMethodId(): string
    {
        return $this->shippingMethodId;
    }

    public function setShippingMethodId(string $shippingMethodId): void
    {
        $this->shippingMethodId = $shippingMethodId;
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

    public function getTrackingCodes(): array
    {
        return $this->trackingCodes;
    }

    public function setTrackingCodes(array $trackingCodes): void
    {
        $this->trackingCodes = $trackingCodes;
    }

    public function getShippingDateEarliest(): \DateTimeInterface
    {
        return $this->shippingDateEarliest;
    }

    public function setShippingDateEarliest(\DateTimeInterface $shippingDateEarliest): void
    {
        $this->shippingDateEarliest = $shippingDateEarliest;
    }

    public function getShippingDateLatest(): \DateTimeInterface
    {
        return $this->shippingDateLatest;
    }

    public function setShippingDateLatest(\DateTimeInterface $shippingDateLatest): void
    {
        $this->shippingDateLatest = $shippingDateLatest;
    }

    public function getShippingCosts(): ?array
    {
        return $this->shippingCosts;
    }

    public function setShippingCosts(?array $shippingCosts): void
    {
        $this->shippingCosts = $shippingCosts;
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

    public function getShippingOrderAddress(): ?OrderAddressEntity
    {
        return $this->shippingOrderAddress;
    }

    public function setShippingOrderAddress(?OrderAddressEntity $shippingOrderAddress): void
    {
        $this->shippingOrderAddress = $shippingOrderAddress;
    }

    public function getShippingMethod(): ?ShippingMethodEntity
    {
        return $this->shippingMethod;
    }

    public function setShippingMethod(?ShippingMethodEntity $shippingMethod): void
    {
        $this->shippingMethod = $shippingMethod;
    }

    public function getPositions(): ?OrderDeliveryPositionCollection
    {
        return $this->positions;
    }

    public function setPositions(?OrderDeliveryPositionCollection $positions): void
    {
        $this->positions = $positions;
    }
}
