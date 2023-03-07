<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\PropertyGroupOption;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\Media\MediaEntity;
use Swaggest\ShopwareSdk\Entity\Product\ProductCollection;
use Swaggest\ShopwareSdk\Entity\ProductConfiguratorSetting\ProductConfiguratorSettingCollection;
use Swaggest\ShopwareSdk\Entity\PropertyGroup\PropertyGroupEntity;
use Swaggest\ShopwareSdk\Entity\PropertyGroupOptionTranslation\PropertyGroupOptionTranslationCollection;

final class PropertyGroupOptionEntity extends Entity
{
    protected string $groupId;

    protected string $name;

    protected ?int $position;

    protected ?string $colorHexCode;

    protected ?string $mediaId;

    protected ?array $customFields;

    protected ?MediaEntity $media;

    protected ?PropertyGroupEntity $group;

    protected ?PropertyGroupOptionTranslationCollection $translations;

    protected ?ProductConfiguratorSettingCollection $productConfiguratorSettings;

    protected ?ProductCollection $productProperties;

    protected ?ProductCollection $productOptions;

    public function getGroupId(): string
    {
        return $this->groupId;
    }

    public function setGroupId(string $groupId): void
    {
        $this->groupId = $groupId;
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

    public function getColorHexCode(): ?string
    {
        return $this->colorHexCode;
    }

    public function setColorHexCode(?string $colorHexCode): void
    {
        $this->colorHexCode = $colorHexCode;
    }

    public function getMediaId(): ?string
    {
        return $this->mediaId;
    }

    public function setMediaId(?string $mediaId): void
    {
        $this->mediaId = $mediaId;
    }

    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    public function setCustomFields(?array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getMedia(): ?MediaEntity
    {
        return $this->media;
    }

    public function setMedia(?MediaEntity $media): void
    {
        $this->media = $media;
    }

    public function getGroup(): ?PropertyGroupEntity
    {
        return $this->group;
    }

    public function setGroup(?PropertyGroupEntity $group): void
    {
        $this->group = $group;
    }

    public function getTranslations(): ?PropertyGroupOptionTranslationCollection
    {
        return $this->translations;
    }

    public function setTranslations(?PropertyGroupOptionTranslationCollection $translations): void
    {
        $this->translations = $translations;
    }

    public function getProductConfiguratorSettings(): ?ProductConfiguratorSettingCollection
    {
        return $this->productConfiguratorSettings;
    }

    public function setProductConfiguratorSettings(?ProductConfiguratorSettingCollection $productConfiguratorSettings): void
    {
        $this->productConfiguratorSettings = $productConfiguratorSettings;
    }

    public function getProductProperties(): ?ProductCollection
    {
        return $this->productProperties;
    }

    public function setProductProperties(?ProductCollection $productProperties): void
    {
        $this->productProperties = $productProperties;
    }

    public function getProductOptions(): ?ProductCollection
    {
        return $this->productOptions;
    }

    public function setProductOptions(?ProductCollection $productOptions): void
    {
        $this->productOptions = $productOptions;
    }
}
