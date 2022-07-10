<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\SalesChannelCurrency;

use Swaggest\ShopwareSdk\Entity\Currency\CurrencyEntity;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\SalesChannel\SalesChannelEntity;

final class SalesChannelCurrencyEntity extends Entity
{
    protected string $salesChannelId;

    protected string $currencyId;

    protected ?SalesChannelEntity $salesChannel;

    protected ?CurrencyEntity $currency;

    public function getSalesChannelId(): string
    {
        return $this->salesChannelId;
    }

    public function setSalesChannelId(string $salesChannelId): void
    {
        $this->salesChannelId = $salesChannelId;
    }

    public function getCurrencyId(): string
    {
        return $this->currencyId;
    }

    public function setCurrencyId(string $currencyId): void
    {
        $this->currencyId = $currencyId;
    }

    public function getSalesChannel(): ?SalesChannelEntity
    {
        return $this->salesChannel;
    }

    public function setSalesChannel(?SalesChannelEntity $salesChannel): void
    {
        $this->salesChannel = $salesChannel;
    }

    public function getCurrency(): ?CurrencyEntity
    {
        return $this->currency;
    }

    public function setCurrency(?CurrencyEntity $currency): void
    {
        $this->currency = $currency;
    }
}
