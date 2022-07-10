<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ShippingMethod;

use Swaggest\ShopwareSdk\Entity\DeliveryTime\DeliveryTimeEntity;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\Media\MediaEntity;
use Swaggest\ShopwareSdk\Entity\OrderDelivery\OrderDeliveryCollection;
use Swaggest\ShopwareSdk\Entity\Rule\RuleEntity;
use Swaggest\ShopwareSdk\Entity\SalesChannel\SalesChannelCollection;
use Swaggest\ShopwareSdk\Entity\ShippingMethodPrice\ShippingMethodPriceCollection;
use Swaggest\ShopwareSdk\Entity\ShippingMethodTranslation\ShippingMethodTranslationCollection;
use Swaggest\ShopwareSdk\Entity\Tag\TagCollection;
use Swaggest\ShopwareSdk\Entity\Tax\TaxEntity;

final class ShippingMethodEntity extends Entity
{
    use EntityIdTrait;

    protected string $name;

    protected ?bool $active;

    protected ?array $customFields;

    protected string $availabilityRuleId;

    protected ?string $mediaId;

    protected string $deliveryTimeId;

    protected string $taxType;

    protected ?string $taxId;

    protected ?DeliveryTimeEntity $deliveryTime;

    protected ?string $description;

    protected ?string $trackingUrl;

    protected ShippingMethodTranslationCollection $translations;

    protected ?RuleEntity $availabilityRule;

    protected ?ShippingMethodPriceCollection $prices;

    protected ?MediaEntity $media;

    protected ?TagCollection $tags;

    protected ?OrderDeliveryCollection $orderDeliveries;

    protected ?SalesChannelCollection $salesChannels;

    protected ?SalesChannelCollection $salesChannelDefaultAssignments;

    protected ?TaxEntity $tax;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(?bool $active): void
    {
        $this->active = $active;
    }

    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    public function setCustomFields(?array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getAvailabilityRuleId(): string
    {
        return $this->availabilityRuleId;
    }

    public function setAvailabilityRuleId(string $availabilityRuleId): void
    {
        $this->availabilityRuleId = $availabilityRuleId;
    }

    public function getMediaId(): ?string
    {
        return $this->mediaId;
    }

    public function setMediaId(?string $mediaId): void
    {
        $this->mediaId = $mediaId;
    }

    public function getDeliveryTimeId(): string
    {
        return $this->deliveryTimeId;
    }

    public function setDeliveryTimeId(string $deliveryTimeId): void
    {
        $this->deliveryTimeId = $deliveryTimeId;
    }

    public function getTaxType(): string
    {
        return $this->taxType;
    }

    public function setTaxType(string $taxType): void
    {
        $this->taxType = $taxType;
    }

    public function getTaxId(): ?string
    {
        return $this->taxId;
    }

    public function setTaxId(?string $taxId): void
    {
        $this->taxId = $taxId;
    }

    public function getDeliveryTime(): ?DeliveryTimeEntity
    {
        return $this->deliveryTime;
    }

    public function setDeliveryTime(?DeliveryTimeEntity $deliveryTime): void
    {
        $this->deliveryTime = $deliveryTime;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getTrackingUrl(): ?string
    {
        return $this->trackingUrl;
    }

    public function setTrackingUrl(?string $trackingUrl): void
    {
        $this->trackingUrl = $trackingUrl;
    }

    public function getTranslations(): ShippingMethodTranslationCollection
    {
        return $this->translations;
    }

    public function setTranslations(ShippingMethodTranslationCollection $translations): void
    {
        $this->translations = $translations;
    }

    public function getAvailabilityRule(): ?RuleEntity
    {
        return $this->availabilityRule;
    }

    public function setAvailabilityRule(?RuleEntity $availabilityRule): void
    {
        $this->availabilityRule = $availabilityRule;
    }

    public function getPrices(): ?ShippingMethodPriceCollection
    {
        return $this->prices;
    }

    public function setPrices(?ShippingMethodPriceCollection $prices): void
    {
        $this->prices = $prices;
    }

    public function getMedia(): ?MediaEntity
    {
        return $this->media;
    }

    public function setMedia(?MediaEntity $media): void
    {
        $this->media = $media;
    }

    public function getTags(): ?TagCollection
    {
        return $this->tags;
    }

    public function setTags(?TagCollection $tags): void
    {
        $this->tags = $tags;
    }

    public function getOrderDeliveries(): ?OrderDeliveryCollection
    {
        return $this->orderDeliveries;
    }

    public function setOrderDeliveries(?OrderDeliveryCollection $orderDeliveries): void
    {
        $this->orderDeliveries = $orderDeliveries;
    }

    public function getSalesChannels(): ?SalesChannelCollection
    {
        return $this->salesChannels;
    }

    public function setSalesChannels(?SalesChannelCollection $salesChannels): void
    {
        $this->salesChannels = $salesChannels;
    }

    public function getSalesChannelDefaultAssignments(): ?SalesChannelCollection
    {
        return $this->salesChannelDefaultAssignments;
    }

    public function setSalesChannelDefaultAssignments(?SalesChannelCollection $salesChannelDefaultAssignments): void
    {
        $this->salesChannelDefaultAssignments = $salesChannelDefaultAssignments;
    }

    public function getTax(): ?TaxEntity
    {
        return $this->tax;
    }

    public function setTax(?TaxEntity $tax): void
    {
        $this->tax = $tax;
    }
}
