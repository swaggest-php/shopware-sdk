<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ProductExport;

use Swaggest\ShopwareSdk\Entity\Currency\CurrencyEntity;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\ProductStream\ProductStreamEntity;
use Swaggest\ShopwareSdk\Entity\SalesChannel\SalesChannelEntity;
use Swaggest\ShopwareSdk\Entity\SalesChannelDomain\SalesChannelDomainEntity;

final class ProductExportEntity extends Entity
{
    protected string $productStreamId;

    protected string $storefrontSalesChannelId;

    protected string $salesChannelId;

    protected string $salesChannelDomainId;

    protected string $currencyId;

    protected string $fileName;

    protected string $accessKey;

    protected string $encoding;

    protected string $fileFormat;

    protected ?bool $includeVariants;

    protected bool $generateByCronjob;

    protected ?\DateTimeInterface $generatedAt;

    protected int $interval;

    protected ?string $headerTemplate;

    protected ?string $bodyTemplate;

    protected ?string $footerTemplate;

    protected ?bool $pausedSchedule;

    protected ?ProductStreamEntity $productStream;

    protected ?SalesChannelEntity $storefrontSalesChannel;

    protected ?SalesChannelEntity $salesChannel;

    protected ?SalesChannelDomainEntity $salesChannelDomain;

    protected ?CurrencyEntity $currency;

    public function getProductStreamId(): string
    {
        return $this->productStreamId;
    }

    public function setProductStreamId(string $productStreamId): void
    {
        $this->productStreamId = $productStreamId;
    }

    public function getStorefrontSalesChannelId(): string
    {
        return $this->storefrontSalesChannelId;
    }

    public function setStorefrontSalesChannelId(string $storefrontSalesChannelId): void
    {
        $this->storefrontSalesChannelId = $storefrontSalesChannelId;
    }

    public function getSalesChannelId(): string
    {
        return $this->salesChannelId;
    }

    public function setSalesChannelId(string $salesChannelId): void
    {
        $this->salesChannelId = $salesChannelId;
    }

    public function getSalesChannelDomainId(): string
    {
        return $this->salesChannelDomainId;
    }

    public function setSalesChannelDomainId(string $salesChannelDomainId): void
    {
        $this->salesChannelDomainId = $salesChannelDomainId;
    }

    public function getCurrencyId(): string
    {
        return $this->currencyId;
    }

    public function setCurrencyId(string $currencyId): void
    {
        $this->currencyId = $currencyId;
    }

    public function getFileName(): string
    {
        return $this->fileName;
    }

    public function setFileName(string $fileName): void
    {
        $this->fileName = $fileName;
    }

    public function getAccessKey(): string
    {
        return $this->accessKey;
    }

    public function setAccessKey(string $accessKey): void
    {
        $this->accessKey = $accessKey;
    }

    public function getEncoding(): string
    {
        return $this->encoding;
    }

    public function setEncoding(string $encoding): void
    {
        $this->encoding = $encoding;
    }

    public function getFileFormat(): string
    {
        return $this->fileFormat;
    }

    public function setFileFormat(string $fileFormat): void
    {
        $this->fileFormat = $fileFormat;
    }

    public function getIncludeVariants(): ?bool
    {
        return $this->includeVariants;
    }

    public function setIncludeVariants(?bool $includeVariants): void
    {
        $this->includeVariants = $includeVariants;
    }

    public function getGenerateByCronjob(): bool
    {
        return $this->generateByCronjob;
    }

    public function setGenerateByCronjob(bool $generateByCronjob): void
    {
        $this->generateByCronjob = $generateByCronjob;
    }

    public function getGeneratedAt(): ?\DateTimeInterface
    {
        return $this->generatedAt;
    }

    public function setGeneratedAt(?\DateTimeInterface $generatedAt): void
    {
        $this->generatedAt = $generatedAt;
    }

    public function getInterval(): int
    {
        return $this->interval;
    }

    public function setInterval(int $interval): void
    {
        $this->interval = $interval;
    }

    public function getHeaderTemplate(): ?string
    {
        return $this->headerTemplate;
    }

    public function setHeaderTemplate(?string $headerTemplate): void
    {
        $this->headerTemplate = $headerTemplate;
    }

    public function getBodyTemplate(): ?string
    {
        return $this->bodyTemplate;
    }

    public function setBodyTemplate(?string $bodyTemplate): void
    {
        $this->bodyTemplate = $bodyTemplate;
    }

    public function getFooterTemplate(): ?string
    {
        return $this->footerTemplate;
    }

    public function setFooterTemplate(?string $footerTemplate): void
    {
        $this->footerTemplate = $footerTemplate;
    }

    public function getPausedSchedule(): ?bool
    {
        return $this->pausedSchedule;
    }

    public function setPausedSchedule(?bool $pausedSchedule): void
    {
        $this->pausedSchedule = $pausedSchedule;
    }

    public function getProductStream(): ?ProductStreamEntity
    {
        return $this->productStream;
    }

    public function setProductStream(?ProductStreamEntity $productStream): void
    {
        $this->productStream = $productStream;
    }

    public function getStorefrontSalesChannel(): ?SalesChannelEntity
    {
        return $this->storefrontSalesChannel;
    }

    public function setStorefrontSalesChannel(?SalesChannelEntity $storefrontSalesChannel): void
    {
        $this->storefrontSalesChannel = $storefrontSalesChannel;
    }

    public function getSalesChannel(): ?SalesChannelEntity
    {
        return $this->salesChannel;
    }

    public function setSalesChannel(?SalesChannelEntity $salesChannel): void
    {
        $this->salesChannel = $salesChannel;
    }

    public function getSalesChannelDomain(): ?SalesChannelDomainEntity
    {
        return $this->salesChannelDomain;
    }

    public function setSalesChannelDomain(?SalesChannelDomainEntity $salesChannelDomain): void
    {
        $this->salesChannelDomain = $salesChannelDomain;
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
