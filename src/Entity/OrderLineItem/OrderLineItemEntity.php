<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\OrderLineItem;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\Media\MediaEntity;
use Swaggest\ShopwareSdk\Entity\Order\OrderEntity;
use Swaggest\ShopwareSdk\Entity\OrderDeliveryPosition\OrderDeliveryPositionCollection;
use Swaggest\ShopwareSdk\Entity\Product\ProductEntity;

final class OrderLineItemEntity extends Entity
{
    protected string $orderId;

    protected ?string $orderVersionId;

    protected ?string $productId;

    protected ?string $productVersionId;

    protected ?string $parentId;

    protected ?string $parentVersionId;

    protected ?string $coverId;

    protected ?MediaEntity $cover;

    protected string $identifier;

    protected ?string $referencedId;

    protected int $quantity;

    protected string $label;

    protected ?array $payload;

    protected ?bool $good;

    protected ?bool $removable;

    protected ?bool $stackable;

    protected int $position;

    protected array $price;

    protected ?array $priceDefinition;

    protected ?float $unitPrice;

    protected ?float $totalPrice;

    protected ?string $description;

    protected ?string $type;

    protected ?array $customFields;

    protected ?OrderEntity $order;

    protected ?ProductEntity $product;

    protected ?OrderDeliveryPositionCollection $orderDeliveryPositions;

    protected ?OrderLineItemEntity $parent;

    protected OrderLineItemCollection $children;

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

    public function getProductId(): ?string
    {
        return $this->productId;
    }

    public function setProductId(?string $productId): void
    {
        $this->productId = $productId;
    }

    public function getProductVersionId(): ?string
    {
        return $this->productVersionId;
    }

    public function setProductVersionId(?string $productVersionId): void
    {
        $this->productVersionId = $productVersionId;
    }

    public function getParentId(): ?string
    {
        return $this->parentId;
    }

    public function setParentId(?string $parentId): void
    {
        $this->parentId = $parentId;
    }

    public function getParentVersionId(): ?string
    {
        return $this->parentVersionId;
    }

    public function setParentVersionId(?string $parentVersionId): void
    {
        $this->parentVersionId = $parentVersionId;
    }

    public function getCoverId(): ?string
    {
        return $this->coverId;
    }

    public function setCoverId(?string $coverId): void
    {
        $this->coverId = $coverId;
    }

    public function getCover(): ?MediaEntity
    {
        return $this->cover;
    }

    public function setCover(?MediaEntity $cover): void
    {
        $this->cover = $cover;
    }

    public function getIdentifier(): string
    {
        return $this->identifier;
    }

    public function setIdentifier(string $identifier): void
    {
        $this->identifier = $identifier;
    }

    public function getReferencedId(): ?string
    {
        return $this->referencedId;
    }

    public function setReferencedId(?string $referencedId): void
    {
        $this->referencedId = $referencedId;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    public function getPayload(): ?array
    {
        return $this->payload;
    }

    public function setPayload(?array $payload): void
    {
        $this->payload = $payload;
    }

    public function getGood(): ?bool
    {
        return $this->good;
    }

    public function setGood(?bool $good): void
    {
        $this->good = $good;
    }

    public function getRemovable(): ?bool
    {
        return $this->removable;
    }

    public function setRemovable(?bool $removable): void
    {
        $this->removable = $removable;
    }

    public function getStackable(): ?bool
    {
        return $this->stackable;
    }

    public function setStackable(?bool $stackable): void
    {
        $this->stackable = $stackable;
    }

    public function getPosition(): int
    {
        return $this->position;
    }

    public function setPosition(int $position): void
    {
        $this->position = $position;
    }

    public function getPrice(): array
    {
        return $this->price;
    }

    public function setPrice(array $price): void
    {
        $this->price = $price;
    }

    public function getPriceDefinition(): ?array
    {
        return $this->priceDefinition;
    }

    public function setPriceDefinition(?array $priceDefinition): void
    {
        $this->priceDefinition = $priceDefinition;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
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

    public function getProduct(): ?ProductEntity
    {
        return $this->product;
    }

    public function setProduct(?ProductEntity $product): void
    {
        $this->product = $product;
    }

    public function getOrderDeliveryPositions(): ?OrderDeliveryPositionCollection
    {
        return $this->orderDeliveryPositions;
    }

    public function setOrderDeliveryPositions(?OrderDeliveryPositionCollection $orderDeliveryPositions): void
    {
        $this->orderDeliveryPositions = $orderDeliveryPositions;
    }

    public function getParent(): ?self
    {
        return $this->parent;
    }

    public function setParent(?self $parent): void
    {
        $this->parent = $parent;
    }

    public function getChildren(): OrderLineItemCollection
    {
        return $this->children;
    }

    public function setChildren(OrderLineItemCollection $children): void
    {
        $this->children = $children;
    }
}
