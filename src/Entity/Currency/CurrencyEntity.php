<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Currency;

use Swaggest\ShopwareSdk\Entity\CurrencyCountryRounding\CurrencyCountryRoundingCollection;
use Swaggest\ShopwareSdk\Entity\CurrencyTranslation\CurrencyTranslationCollection;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\Order\OrderCollection;
use Swaggest\ShopwareSdk\Entity\ProductExport\ProductExportCollection;
use Swaggest\ShopwareSdk\Entity\PromotionDiscountPrices\PromotionDiscountPricesCollection;
use Swaggest\ShopwareSdk\Entity\SalesChannel\SalesChannelCollection;
use Swaggest\ShopwareSdk\Entity\SalesChannelDomain\SalesChannelDomainCollection;

final class CurrencyEntity extends Entity
{
    protected float $factor;

    protected string $symbol;

    protected string $isoCode;

    protected string $shortName;

    protected string $name;

    protected ?int $position;

    protected ?bool $isSystemDefault;

    protected ?array $customFields;

    protected ?CurrencyTranslationCollection $translations;

    protected ?SalesChannelCollection $salesChannelDefaultAssignments;

    protected ?OrderCollection $orders;

    protected ?SalesChannelCollection $salesChannels;

    protected ?SalesChannelDomainCollection $salesChannelDomains;

    protected ?PromotionDiscountPricesCollection $promotionDiscountPrices;

    protected ?ProductExportCollection $productExports;

    protected array $itemRounding;

    protected array $totalRounding;

    protected ?CurrencyCountryRoundingCollection $countryRoundings;

    protected ?float $taxFreeFrom;

    public function getFactor(): float
    {
        return $this->factor;
    }

    public function setFactor(float $factor): void
    {
        $this->factor = $factor;
    }

    public function getSymbol(): string
    {
        return $this->symbol;
    }

    public function setSymbol(string $symbol): void
    {
        $this->symbol = $symbol;
    }

    public function getIsoCode(): string
    {
        return $this->isoCode;
    }

    public function setIsoCode(string $isoCode): void
    {
        $this->isoCode = $isoCode;
    }

    public function getShortName(): string
    {
        return $this->shortName;
    }

    public function setShortName(string $shortName): void
    {
        $this->shortName = $shortName;
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

    public function getIsSystemDefault(): ?bool
    {
        return $this->isSystemDefault;
    }

    public function setIsSystemDefault(?bool $isSystemDefault): void
    {
        $this->isSystemDefault = $isSystemDefault;
    }

    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    public function setCustomFields(?array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getTranslations(): ?CurrencyTranslationCollection
    {
        return $this->translations;
    }

    public function setTranslations(?CurrencyTranslationCollection $translations): void
    {
        $this->translations = $translations;
    }

    public function getSalesChannelDefaultAssignments(): ?SalesChannelCollection
    {
        return $this->salesChannelDefaultAssignments;
    }

    public function setSalesChannelDefaultAssignments(?SalesChannelCollection $salesChannelDefaultAssignments): void
    {
        $this->salesChannelDefaultAssignments = $salesChannelDefaultAssignments;
    }

    public function getOrders(): ?OrderCollection
    {
        return $this->orders;
    }

    public function setOrders(?OrderCollection $orders): void
    {
        $this->orders = $orders;
    }

    public function getSalesChannels(): ?SalesChannelCollection
    {
        return $this->salesChannels;
    }

    public function setSalesChannels(?SalesChannelCollection $salesChannels): void
    {
        $this->salesChannels = $salesChannels;
    }

    public function getSalesChannelDomains(): ?SalesChannelDomainCollection
    {
        return $this->salesChannelDomains;
    }

    public function setSalesChannelDomains(?SalesChannelDomainCollection $salesChannelDomains): void
    {
        $this->salesChannelDomains = $salesChannelDomains;
    }

    public function getPromotionDiscountPrices(): ?PromotionDiscountPricesCollection
    {
        return $this->promotionDiscountPrices;
    }

    public function setPromotionDiscountPrices(?PromotionDiscountPricesCollection $promotionDiscountPrices): void
    {
        $this->promotionDiscountPrices = $promotionDiscountPrices;
    }

    public function getProductExports(): ?ProductExportCollection
    {
        return $this->productExports;
    }

    public function setProductExports(?ProductExportCollection $productExports): void
    {
        $this->productExports = $productExports;
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

    public function getCountryRoundings(): ?CurrencyCountryRoundingCollection
    {
        return $this->countryRoundings;
    }

    public function setCountryRoundings(?CurrencyCountryRoundingCollection $countryRoundings): void
    {
        $this->countryRoundings = $countryRoundings;
    }

    public function getTaxFreeFrom(): ?float
    {
        return $this->taxFreeFrom;
    }

    public function setTaxFreeFrom(?float $taxFreeFrom): void
    {
        $this->taxFreeFrom = $taxFreeFrom;
    }
}
