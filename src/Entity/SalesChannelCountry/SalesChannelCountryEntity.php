<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\SalesChannelCountry;

use Swaggest\ShopwareSdk\Entity\Country\CountryEntity;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\SalesChannel\SalesChannelEntity;

final class SalesChannelCountryEntity extends Entity
{
    protected string $salesChannelId;

    protected string $countryId;

    protected ?SalesChannelEntity $salesChannel;

    protected ?CountryEntity $country;

    public function getSalesChannelId(): string
    {
        return $this->salesChannelId;
    }

    public function setSalesChannelId(string $salesChannelId): void
    {
        $this->salesChannelId = $salesChannelId;
    }

    public function getCountryId(): string
    {
        return $this->countryId;
    }

    public function setCountryId(string $countryId): void
    {
        $this->countryId = $countryId;
    }

    public function getSalesChannel(): ?SalesChannelEntity
    {
        return $this->salesChannel;
    }

    public function setSalesChannel(?SalesChannelEntity $salesChannel): void
    {
        $this->salesChannel = $salesChannel;
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
