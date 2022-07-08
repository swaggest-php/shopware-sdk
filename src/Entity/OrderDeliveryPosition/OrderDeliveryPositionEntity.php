<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\OrderDeliveryPosition;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\OrderDelivery\OrderDeliveryEntity;
use Swaggest\ShopwareSdk\Entity\OrderLineItem\OrderLineItemEntity;

final class OrderDeliveryPositionEntity extends Entity
{
    use EntityIdTrait;

    protected string $orderDeliveryId;

    protected string $orderDeliveryVersionId;

    protected string $orderLineItemId;

    protected string $orderLineItemVersionId;

    protected array $price;

    protected ?float $unitPrice;

    protected ?float $totalPrice;

    protected ?int $quantity;

    protected array $customFields;

    protected ?OrderDeliveryEntity $orderDelivery;

    protected ?OrderLineItemEntity $orderLineItem;

    public function getOrderDeliveryId(): string
    {
        return $this->orderDeliveryId;
    }

    public function setOrderDeliveryId(string $orderDeliveryId): void
    {
        $this->orderDeliveryId = $orderDeliveryId;
    }

    public function getOrderDeliveryVersionId(): string
    {
        return $this->orderDeliveryVersionId;
    }

    public function setOrderDeliveryVersionId(string $orderDeliveryVersionId): void
    {
        $this->orderDeliveryVersionId = $orderDeliveryVersionId;
    }

    public function getOrderLineItemId(): string
    {
        return $this->orderLineItemId;
    }

    public function setOrderLineItemId(string $orderLineItemId): void
    {
        $this->orderLineItemId = $orderLineItemId;
    }

    public function getOrderLineItemVersionId(): string
    {
        return $this->orderLineItemVersionId;
    }

    public function setOrderLineItemVersionId(string $orderLineItemVersionId): void
    {
        $this->orderLineItemVersionId = $orderLineItemVersionId;
    }

    public function getPrice(): array
    {
        return $this->price;
    }

    public function setPrice(array $price): void
    {
        $this->price = $price;
    }

    public function getUnitPrice(): ?float
    {
        return $this->unitPrice;
    }

    public function setUnitPrice(?float $unitPrice): void
    {
        $this->unitPrice = $unitPrice;
    }

    public function getTotalPrice(): ?float
    {
        return $this->totalPrice;
    }

    public function setTotalPrice(?float $totalPrice): void
    {
        $this->totalPrice = $totalPrice;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    public function getCustomFields(): array
    {
        return $this->customFields;
    }

    public function setCustomFields(array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getOrderDelivery(): ?OrderDeliveryEntity
    {
        return $this->orderDelivery;
    }

    public function setOrderDelivery(?OrderDeliveryEntity $orderDelivery): void
    {
        $this->orderDelivery = $orderDelivery;
    }

    public function getOrderLineItem(): ?OrderLineItemEntity
    {
        return $this->orderLineItem;
    }

    public function setOrderLineItem(?OrderLineItemEntity $orderLineItem): void
    {
        $this->orderLineItem = $orderLineItem;
    }
}
