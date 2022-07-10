<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Country;

use Swaggest\ShopwareSdk\Entity\CountryState\CountryStateCollection;
use Swaggest\ShopwareSdk\Entity\CountryTranslation\CountryTranslationCollection;
use Swaggest\ShopwareSdk\Entity\CurrencyCountryRounding\CurrencyCountryRoundingCollection;
use Swaggest\ShopwareSdk\Entity\CustomerAddress\CustomerAddressCollection;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\OrderAddress\OrderAddressCollection;
use Swaggest\ShopwareSdk\Entity\SalesChannel\SalesChannelCollection;
use Swaggest\ShopwareSdk\Entity\TaxRule\TaxRuleCollection;

final class CountryEntity extends Entity
{
    use EntityIdTrait;

    protected string $name;

    protected ?string $iso;

    protected ?int $position;

    protected ?bool $taxFree;

    protected ?bool $active;

    protected ?bool $shippingAvailable;

    protected ?string $iso3;

    protected ?bool $displayStateInRegistration;

    protected ?bool $forceStateInRegistration;

    protected ?bool $companyTaxFree;

    protected ?bool $checkVatIdPattern;

    protected ?bool $vatIdRequired;

    protected ?string $vatIdPattern;

    protected ?array $customFields;

    protected ?array $customerTax;

    protected ?array $companyTax;

    protected ?CountryStateCollection $states;

    protected CountryTranslationCollection $translations;

    protected ?CustomerAddressCollection $customerAddresses;

    protected ?OrderAddressCollection $orderAddresses;

    protected ?SalesChannelCollection $salesChannelDefaultAssignments;

    protected ?SalesChannelCollection $salesChannels;

    protected ?TaxRuleCollection $taxRules;

    protected ?CurrencyCountryRoundingCollection $currencyCountryRoundings;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getIso(): ?string
    {
        return $this->iso;
    }

    public function setIso(?string $iso): void
    {
        $this->iso = $iso;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(?int $position): void
    {
        $this->position = $position;
    }

    public function getTaxFree(): ?bool
    {
        return $this->taxFree;
    }

    public function setTaxFree(?bool $taxFree): void
    {
        $this->taxFree = $taxFree;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(?bool $active): void
    {
        $this->active = $active;
    }

    public function getShippingAvailable(): ?bool
    {
        return $this->shippingAvailable;
    }

    public function setShippingAvailable(?bool $shippingAvailable): void
    {
        $this->shippingAvailable = $shippingAvailable;
    }

    public function getIso3(): ?string
    {
        return $this->iso3;
    }

    public function setIso3(?string $iso3): void
    {
        $this->iso3 = $iso3;
    }

    public function getDisplayStateInRegistration(): ?bool
    {
        return $this->displayStateInRegistration;
    }

    public function setDisplayStateInRegistration(?bool $displayStateInRegistration): void
    {
        $this->displayStateInRegistration = $displayStateInRegistration;
    }

    public function getForceStateInRegistration(): ?bool
    {
        return $this->forceStateInRegistration;
    }

    public function setForceStateInRegistration(?bool $forceStateInRegistration): void
    {
        $this->forceStateInRegistration = $forceStateInRegistration;
    }

    public function getCompanyTaxFree(): ?bool
    {
        return $this->companyTaxFree;
    }

    public function setCompanyTaxFree(?bool $companyTaxFree): void
    {
        $this->companyTaxFree = $companyTaxFree;
    }

    public function getCheckVatIdPattern(): ?bool
    {
        return $this->checkVatIdPattern;
    }

    public function setCheckVatIdPattern(?bool $checkVatIdPattern): void
    {
        $this->checkVatIdPattern = $checkVatIdPattern;
    }

    public function getVatIdRequired(): ?bool
    {
        return $this->vatIdRequired;
    }

    public function setVatIdRequired(?bool $vatIdRequired): void
    {
        $this->vatIdRequired = $vatIdRequired;
    }

    public function getVatIdPattern(): ?string
    {
        return $this->vatIdPattern;
    }

    public function setVatIdPattern(?string $vatIdPattern): void
    {
        $this->vatIdPattern = $vatIdPattern;
    }

    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    public function setCustomFields(?array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getCustomerTax(): ?array
    {
        return $this->customerTax;
    }

    public function setCustomerTax(?array $customerTax): void
    {
        $this->customerTax = $customerTax;
    }

    public function getCompanyTax(): ?array
    {
        return $this->companyTax;
    }

    public function setCompanyTax(?array $companyTax): void
    {
        $this->companyTax = $companyTax;
    }

    public function getStates(): ?CountryStateCollection
    {
        return $this->states;
    }

    public function setStates(?CountryStateCollection $states): void
    {
        $this->states = $states;
    }

    public function getTranslations(): CountryTranslationCollection
    {
        return $this->translations;
    }

    public function setTranslations(CountryTranslationCollection $translations): void
    {
        $this->translations = $translations;
    }

    public function getCustomerAddresses(): ?CustomerAddressCollection
    {
        return $this->customerAddresses;
    }

    public function setCustomerAddresses(?CustomerAddressCollection $customerAddresses): void
    {
        $this->customerAddresses = $customerAddresses;
    }

    public function getOrderAddresses(): ?OrderAddressCollection
    {
        return $this->orderAddresses;
    }

    public function setOrderAddresses(?OrderAddressCollection $orderAddresses): void
    {
        $this->orderAddresses = $orderAddresses;
    }

    public function getSalesChannelDefaultAssignments(): ?SalesChannelCollection
    {
        return $this->salesChannelDefaultAssignments;
    }

    public function setSalesChannelDefaultAssignments(?SalesChannelCollection $salesChannelDefaultAssignments): void
    {
        $this->salesChannelDefaultAssignments = $salesChannelDefaultAssignments;
    }

    public function getSalesChannels(): ?SalesChannelCollection
    {
        return $this->salesChannels;
    }

    public function setSalesChannels(?SalesChannelCollection $salesChannels): void
    {
        $this->salesChannels = $salesChannels;
    }

    public function getTaxRules(): ?TaxRuleCollection
    {
        return $this->taxRules;
    }

    public function setTaxRules(?TaxRuleCollection $taxRules): void
    {
        $this->taxRules = $taxRules;
    }

    public function getCurrencyCountryRoundings(): ?CurrencyCountryRoundingCollection
    {
        return $this->currencyCountryRoundings;
    }

    public function setCurrencyCountryRoundings(?CurrencyCountryRoundingCollection $currencyCountryRoundings): void
    {
        $this->currencyCountryRoundings = $currencyCountryRoundings;
    }
}
