<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\CurrencyCountryRounding;

use Swaggest\ShopwareSdk\Entity\Country\CountryEntity;
use Swaggest\ShopwareSdk\Entity\Currency\CurrencyEntity;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;

final class CurrencyCountryRoundingEntity extends Entity
{
    use EntityIdTrait;

    protected string $currencyId;

    protected string $countryId;

    protected array $itemRounding;

    protected array $totalRounding;

    protected ?CurrencyEntity $currency;

    protected ?CountryEntity $country;

    public function getCurrencyId(): string
    {
        return $this->currencyId;
    }

    public function setCurrencyId(string $currencyId): void
    {
        $this->currencyId = $currencyId;
    }

    public function getCountryId(): string
    {
        return $this->countryId;
    }

    public function setCountryId(string $countryId): void
    {
        $this->countryId = $countryId;
    }

    public function getItemRounding(): array
    {
        return $this->itemRounding;
    }

    public function setItemRounding(array $itemRounding): void
    {
        $this->itemRounding = $itemRounding;
    }

    public function getTotalRounding(): array
    {
        return $this->totalRounding;
    }

    public function setTotalRounding(array $totalRounding): void
    {
        $this->totalRounding = $totalRounding;
    }

    public function getCurrency(): ?CurrencyEntity
    {
        return $this->currency;
    }

    public function setCurrency(?CurrencyEntity $currency): void
    {
        $this->currency = $currency;
    }

    public function getCountry(): ?CountryEntity
    {
        return $this->country;
    }

    public function setCountry(?CountryEntity $country): void
    {
        $this->country = $country;
    }
}
