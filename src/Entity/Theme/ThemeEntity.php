<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Theme;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\Media\MediaCollection;
use Swaggest\ShopwareSdk\Entity\Media\MediaEntity;
use Swaggest\ShopwareSdk\Entity\SalesChannel\SalesChannelCollection;
use Swaggest\ShopwareSdk\Entity\ThemeTranslation\ThemeTranslationCollection;

final class ThemeEntity extends Entity
{
    use EntityIdTrait;

    protected ?string $technicalName;

    protected string $name;

    protected string $author;

    protected ?string $description;

    protected ?array $labels;

    protected ?array $helpTexts;

    protected ?array $customFields;

    protected ?string $previewMediaId;

    protected ?string $parentThemeId;

    protected ?array $baseConfig;

    protected ?array $configValues;

    protected bool $active;

    protected ThemeTranslationCollection $translations;

    protected ?SalesChannelCollection $salesChannels;

    protected ?MediaCollection $media;

    protected ?MediaEntity $previewMedia;

    protected ?ThemeCollection $childThemes;

    public function getTechnicalName(): ?string
    {
        return $this->technicalName;
    }

    public function setTechnicalName(?string $technicalName): void
    {
        $this->technicalName = $technicalName;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getLabels(): ?array
    {
        return $this->labels;
    }

    public function setLabels(?array $labels): void
    {
        $this->labels = $labels;
    }

    public function getHelpTexts(): ?array
    {
        return $this->helpTexts;
    }

    public function setHelpTexts(?array $helpTexts): void
    {
        $this->helpTexts = $helpTexts;
    }

    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    public function setCustomFields(?array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getPreviewMediaId(): ?string
    {
        return $this->previewMediaId;
    }

    public function setPreviewMediaId(?string $previewMediaId): void
    {
        $this->previewMediaId = $previewMediaId;
    }

    public function getParentThemeId(): ?string
    {
        return $this->parentThemeId;
    }

    public function setParentThemeId(?string $parentThemeId): void
    {
        $this->parentThemeId = $parentThemeId;
    }

    public function getBaseConfig(): ?array
    {
        return $this->baseConfig;
    }

    public function setBaseConfig(?array $baseConfig): void
    {
        $this->baseConfig = $baseConfig;
    }

    public function getConfigValues(): ?array
    {
        return $this->configValues;
    }

    public function setConfigValues(?array $configValues): void
    {
        $this->configValues = $configValues;
    }

    public function getActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): void
    {
        $this->active = $active;
    }

    public function getTranslations(): ThemeTranslationCollection
    {
        return $this->translations;
    }

    public function setTranslations(ThemeTranslationCollection $translations): void
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

    public function getMedia(): ?MediaCollection
    {
        return $this->media;
    }

    public function setMedia(?MediaCollection $media): void
    {
        $this->media = $media;
    }

    public function getPreviewMedia(): ?MediaEntity
    {
        return $this->previewMedia;
    }

    public function setPreviewMedia(?MediaEntity $previewMedia): void
    {
        $this->previewMedia = $previewMedia;
    }

    public function getChildThemes(): ?ThemeCollection
    {
        return $this->childThemes;
    }

    public function setChildThemes(?ThemeCollection $childThemes): void
    {
        $this->childThemes = $childThemes;
    }
}
