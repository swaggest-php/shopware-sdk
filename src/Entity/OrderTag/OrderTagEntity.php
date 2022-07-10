<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\OrderTag;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\Order\OrderEntity;
use Swaggest\ShopwareSdk\Entity\Tag\TagEntity;

final class OrderTagEntity extends Entity
{
    protected string $orderId;

    protected ?string $orderVersionId;

    protected string $tagId;

    protected ?OrderEntity $order;

    protected ?TagEntity $tag;

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

    public function getTagId(): string
    {
        return $this->tagId;
    }

    public function setTagId(string $tagId): void
    {
        $this->tagId = $tagId;
    }

    public function getOrder(): ?OrderEntity
    {
        return $this->order;
    }

    public function setOrder(?OrderEntity $order): void
    {
        $this->order = $order;
    }

    public function getTag(): ?TagEntity
    {
        return $this->tag;
    }

    public function setTag(?TagEntity $tag): void
    {
        $this->tag = $tag;
    }
}
