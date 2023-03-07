<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\TaxRule;

use Swaggest\ShopwareSdk\Entity\Country\CountryEntity;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\Tax\TaxEntity;
use Swaggest\ShopwareSdk\Entity\TaxRuleType\TaxRuleTypeEntity;

final class TaxRuleEntity extends Entity
{
    protected string $taxRuleTypeId;

    protected string $countryId;

    protected float $taxRate;

    protected ?array $data;

    protected string $taxId;

    protected ?TaxRuleTypeEntity $type;

    protected ?CountryEntity $country;

    protected ?TaxEntity $tax;

    public function getTaxRuleTypeId(): string
    {
        return $this->taxRuleTypeId;
    }

    public function setTaxRuleTypeId(string $taxRuleTypeId): void
    {
        $this->taxRuleTypeId = $taxRuleTypeId;
    }

    public function getCountryId(): string
    {
        return $this->countryId;
    }

    public function setCountryId(string $countryId): void
    {
        $this->countryId = $countryId;
    }

    public function getTaxRate(): float
    {
        return $this->taxRate;
    }

    public function setTaxRate(float $taxRate): void
    {
        $this->taxRate = $taxRate;
    }

    public function getData(): ?array
    {
        return $this->data;
    }

    public function setData(?array $data): void
    {
        $this->data = $data;
    }

    public function getTaxId(): string
    {
        return $this->taxId;
    }

    public function setTaxId(string $taxId): void
    {
        $this->taxId = $taxId;
    }

    public function getType(): ?TaxRuleTypeEntity
    {
        return $this->type;
    }

    public function setType(?TaxRuleTypeEntity $type): void
    {
        $this->type = $type;
    }

    public function getCountry(): ?CountryEntity
    {
        return $this->country;
    }

    public function setCountry(?CountryEntity $country): void
    {
        $this->country = $country;
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
