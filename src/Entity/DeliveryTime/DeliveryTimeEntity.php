<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\DeliveryTime;

use Swaggest\ShopwareSdk\Entity\DeliveryTimeTranslation\DeliveryTimeTranslationCollection;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\Product\ProductCollection;
use Swaggest\ShopwareSdk\Entity\ShippingMethod\ShippingMethodCollection;

final class DeliveryTimeEntity extends Entity
{
    use EntityIdTrait;

    protected string $name;

    protected int $min;

    protected int $max;

    protected string $unit;

    protected ?array $customFields;

    protected ?ShippingMethodCollection $shippingMethods;

    protected ?ProductCollection $products;

    protected DeliveryTimeTranslationCollection $translations;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getMin(): int
    {
        return $this->min;
    }

    public function setMin(int $min): void
    {
        $this->min = $min;
    }

    public function getMax(): int
    {
        return $this->max;
    }

    public function setMax(int $max): void
    {
        $this->max = $max;
    }

    public function getUnit(): string
    {
        return $this->unit;
    }

    public function setUnit(string $unit): void
    {
        $this->unit = $unit;
    }

    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    public function setCustomFields(?array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getShippingMethods(): ?ShippingMethodCollection
    {
        return $this->shippingMethods;
    }

    public function setShippingMethods(?ShippingMethodCollection $shippingMethods): void
    {
        $this->shippingMethods = $shippingMethods;
    }

    public function getProducts(): ?ProductCollection
    {
        return $this->products;
    }

    public function setProducts(?ProductCollection $products): void
    {
        $this->products = $products;
    }

    public function getTranslations(): DeliveryTimeTranslationCollection
    {
        return $this->translations;
    }

    public function setTranslations(DeliveryTimeTranslationCollection $translations): void
    {
        $this->translations = $translations;
    }
}
