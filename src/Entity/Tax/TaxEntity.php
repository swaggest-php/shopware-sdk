<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Tax;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\Product\ProductCollection;
use Swaggest\ShopwareSdk\Entity\ShippingMethod\ShippingMethodCollection;
use Swaggest\ShopwareSdk\Entity\TaxRule\TaxRuleCollection;

final class TaxEntity extends Entity
{
    use EntityIdTrait;

    protected float $taxRate;

    protected string $name;

    protected int $position;

    protected array $customFields;

    protected ?ProductCollection $products;

    protected ?TaxRuleCollection $rules;

    protected ?ShippingMethodCollection $shippingMethods;

    public function getTaxRate(): float
    {
        return $this->taxRate;
    }

    public function setTaxRate(float $taxRate): void
    {
        $this->taxRate = $taxRate;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getPosition(): int
    {
        return $this->position;
    }

    public function setPosition(int $position): void
    {
        $this->position = $position;
    }

    public function getCustomFields(): array
    {
        return $this->customFields;
    }

    public function setCustomFields(array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getProducts(): ?ProductCollection
    {
        return $this->products;
    }

    public function setProducts(?ProductCollection $products): void
    {
        $this->products = $products;
    }

    public function getRules(): ?TaxRuleCollection
    {
        return $this->rules;
    }

    public function setRules(?TaxRuleCollection $rules): void
    {
        $this->rules = $rules;
    }

    public function getShippingMethods(): ?ShippingMethodCollection
    {
        return $this->shippingMethods;
    }

    public function setShippingMethods(?ShippingMethodCollection $shippingMethods): void
    {
        $this->shippingMethods = $shippingMethods;
    }
}
