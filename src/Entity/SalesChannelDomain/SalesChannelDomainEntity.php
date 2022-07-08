<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\SalesChannelDomain;

use Swaggest\ShopwareSdk\Entity\Currency\CurrencyEntity;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\Language\LanguageEntity;
use Swaggest\ShopwareSdk\Entity\ProductExport\ProductExportCollection;
use Swaggest\ShopwareSdk\Entity\SalesChannel\SalesChannelEntity;
use Swaggest\ShopwareSdk\Entity\SnippetSet\SnippetSetEntity;

final class SalesChannelDomainEntity extends Entity
{
    use EntityIdTrait;

    protected string $url;

    protected string $salesChannelId;

    protected string $languageId;

    protected string $currencyId;

    protected string $snippetSetId;

    protected ?SalesChannelEntity $salesChannel;

    protected ?LanguageEntity $language;

    protected ?CurrencyEntity $currency;

    protected ?SnippetSetEntity $snippetSet;

    protected ?SalesChannelEntity $salesChannelDefaultHreflang;

    protected ?ProductExportCollection $productExports;

    protected bool $hreflangUseOnlyLocale;

    protected array $customFields;

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    public function getSalesChannelId(): string
    {
        return $this->salesChannelId;
    }

    public function setSalesChannelId(string $salesChannelId): void
    {
        $this->salesChannelId = $salesChannelId;
    }

    public function getLanguageId(): string
    {
        return $this->languageId;
    }

    public function setLanguageId(string $languageId): void
    {
        $this->languageId = $languageId;
    }

    public function getCurrencyId(): string
    {
        return $this->currencyId;
    }

    public function setCurrencyId(string $currencyId): void
    {
        $this->currencyId = $currencyId;
    }

    public function getSnippetSetId(): string
    {
        return $this->snippetSetId;
    }

    public function setSnippetSetId(string $snippetSetId): void
    {
        $this->snippetSetId = $snippetSetId;
    }

    public function getSalesChannel(): ?SalesChannelEntity
    {
        return $this->salesChannel;
    }

    public function setSalesChannel(?SalesChannelEntity $salesChannel): void
    {
        $this->salesChannel = $salesChannel;
    }

    public function getLanguage(): ?LanguageEntity
    {
        return $this->language;
    }

    public function setLanguage(?LanguageEntity $language): void
    {
        $this->language = $language;
    }

    public function getCurrency(): ?CurrencyEntity
    {
        return $this->currency;
    }

    public function setCurrency(?CurrencyEntity $currency): void
    {
        $this->currency = $currency;
    }

    public function getSnippetSet(): ?SnippetSetEntity
    {
        return $this->snippetSet;
    }

    public function setSnippetSet(?SnippetSetEntity $snippetSet): void
    {
        $this->snippetSet = $snippetSet;
    }

    public function getSalesChannelDefaultHreflang(): ?SalesChannelEntity
    {
        return $this->salesChannelDefaultHreflang;
    }

    public function setSalesChannelDefaultHreflang(?SalesChannelEntity $salesChannelDefaultHreflang): void
    {
        $this->salesChannelDefaultHreflang = $salesChannelDefaultHreflang;
    }

    public function getProductExports(): ?ProductExportCollection
    {
        return $this->productExports;
    }

    public function setProductExports(?ProductExportCollection $productExports): void
    {
        $this->productExports = $productExports;
    }

    public function getHreflangUseOnlyLocale(): bool
    {
        return $this->hreflangUseOnlyLocale;
    }

    public function setHreflangUseOnlyLocale(bool $hreflangUseOnlyLocale): void
    {
        $this->hreflangUseOnlyLocale = $hreflangUseOnlyLocale;
    }

    public function getCustomFields(): array
    {
        return $this->customFields;
    }

    public function setCustomFields(array $customFields): void
    {
        $this->customFields = $customFields;
    }
}
