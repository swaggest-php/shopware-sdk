<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\CountryState;

use Swaggest\ShopwareSdk\Entity\Country\CountryEntity;
use Swaggest\ShopwareSdk\Entity\CountryStateTranslation\CountryStateTranslationCollection;
use Swaggest\ShopwareSdk\Entity\CustomerAddress\CustomerAddressCollection;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\OrderAddress\OrderAddressCollection;

final class CountryStateEntity extends Entity
{
    use EntityIdTrait;

    protected string $countryId;

    protected string $shortCode;

    protected string $name;

    protected ?int $position;

    protected bool $active;

    protected array $customFields;

    protected ?CountryEntity $country;

    protected CountryStateTranslationCollection $translations;

    protected ?CustomerAddressCollection $customerAddresses;

    protected ?OrderAddressCollection $orderAddresses;

    public function getCountryId(): string
    {
        return $this->countryId;
    }

    public function setCountryId(string $countryId): void
    {
        $this->countryId = $countryId;
    }

    public function getShortCode(): string
    {
        return $this->shortCode;
    }

    public function setShortCode(string $shortCode): void
    {
        $this->shortCode = $shortCode;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(?int $position): void
    {
        $this->position = $position;
    }

    public function getActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): void
    {
        $this->active = $active;
    }

    public function getCustomFields(): array
    {
        return $this->customFields;
    }

    public function setCustomFields(array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getCountry(): ?CountryEntity
    {
        return $this->country;
    }

    public function setCountry(?CountryEntity $country): void
    {
        $this->country = $country;
    }

    public function getTranslations(): CountryStateTranslationCollection
    {
        return $this->translations;
    }

    public function setTranslations(CountryStateTranslationCollection $translations): void
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
}
