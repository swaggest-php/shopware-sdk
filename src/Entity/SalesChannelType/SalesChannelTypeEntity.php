<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\SalesChannelType;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\SalesChannel\SalesChannelCollection;
use Swaggest\ShopwareSdk\Entity\SalesChannelTypeTranslation\SalesChannelTypeTranslationCollection;

final class SalesChannelTypeEntity extends Entity
{
    protected ?string $coverUrl;

    protected ?string $iconName;

    protected ?array $screenshotUrls;

    protected string $name;

    protected ?string $manufacturer;

    protected ?string $description;

    protected ?string $descriptionLong;

    protected ?array $customFields;

    protected ?SalesChannelTypeTranslationCollection $translations;

    protected ?SalesChannelCollection $salesChannels;

    public function getCoverUrl(): ?string
    {
        return $this->coverUrl;
    }

    public function setCoverUrl(?string $coverUrl): void
    {
        $this->coverUrl = $coverUrl;
    }

    public function getIconName(): ?string
    {
        return $this->iconName;
    }

    public function setIconName(?string $iconName): void
    {
        $this->iconName = $iconName;
    }

    public function getScreenshotUrls(): ?array
    {
        return $this->screenshotUrls;
    }

    public function setScreenshotUrls(?array $screenshotUrls): void
    {
        $this->screenshotUrls = $screenshotUrls;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getManufacturer(): ?string
    {
        return $this->manufacturer;
    }

    public function setManufacturer(?string $manufacturer): void
    {
        $this->manufacturer = $manufacturer;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getDescriptionLong(): ?string
    {
        return $this->descriptionLong;
    }

    public function setDescriptionLong(?string $descriptionLong): void
    {
        $this->descriptionLong = $descriptionLong;
    }

    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    public function setCustomFields(?array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getTranslations(): ?SalesChannelTypeTranslationCollection
    {
        return $this->translations;
    }

    public function setTranslations(?SalesChannelTypeTranslationCollection $translations): void
    {
        $this->translations = $translations;
    }

    public function getSalesChannels(): ?SalesChannelCollection
    {
        return $this->salesChannels;
    }

    public function setSalesChannels(?SalesChannelCollection $salesChannels): void
    {
        $this->salesChannels = $salesChannels;
    }
}
