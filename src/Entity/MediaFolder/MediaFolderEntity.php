<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\MediaFolder;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\Media\MediaCollection;
use Swaggest\ShopwareSdk\Entity\MediaDefaultFolder\MediaDefaultFolderEntity;
use Swaggest\ShopwareSdk\Entity\MediaFolderConfiguration\MediaFolderConfigurationEntity;

final class MediaFolderEntity extends Entity
{
    use EntityIdTrait;

    protected ?bool $useParentConfiguration;

    protected string $configurationId;

    protected ?string $defaultFolderId;

    protected ?string $parentId;

    protected ?MediaFolderEntity $parent;

    protected ?MediaFolderCollection $children;

    protected ?int $childCount;

    protected ?MediaCollection $media;

    protected ?MediaDefaultFolderEntity $defaultFolder;

    protected ?MediaFolderConfigurationEntity $configuration;

    protected string $name;

    protected ?array $customFields;

    public function getUseParentConfiguration(): ?bool
    {
        return $this->useParentConfiguration;
    }

    public function setUseParentConfiguration(?bool $useParentConfiguration): void
    {
        $this->useParentConfiguration = $useParentConfiguration;
    }

    public function getConfigurationId(): string
    {
        return $this->configurationId;
    }

    public function setConfigurationId(string $configurationId): void
    {
        $this->configurationId = $configurationId;
    }

    public function getDefaultFolderId(): ?string
    {
        return $this->defaultFolderId;
    }

    public function setDefaultFolderId(?string $defaultFolderId): void
    {
        $this->defaultFolderId = $defaultFolderId;
    }

    public function getParentId(): ?string
    {
        return $this->parentId;
    }

    public function setParentId(?string $parentId): void
    {
        $this->parentId = $parentId;
    }

    public function getParent(): ?self
    {
        return $this->parent;
    }

    public function setParent(?self $parent): void
    {
        $this->parent = $parent;
    }

    public function getChildren(): ?MediaFolderCollection
    {
        return $this->children;
    }

    public function setChildren(?MediaFolderCollection $children): void
    {
        $this->children = $children;
    }

    public function getChildCount(): ?int
    {
        return $this->childCount;
    }

    public function setChildCount(?int $childCount): void
    {
        $this->childCount = $childCount;
    }

    public function getMedia(): ?MediaCollection
    {
        return $this->media;
    }

    public function setMedia(?MediaCollection $media): void
    {
        $this->media = $media;
    }

    public function getDefaultFolder(): ?MediaDefaultFolderEntity
    {
        return $this->defaultFolder;
    }

    public function setDefaultFolder(?MediaDefaultFolderEntity $defaultFolder): void
    {
        $this->defaultFolder = $defaultFolder;
    }

    public function getConfiguration(): ?MediaFolderConfigurationEntity
    {
        return $this->configuration;
    }

    public function setConfiguration(?MediaFolderConfigurationEntity $configuration): void
    {
        $this->configuration = $configuration;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    public function setCustomFields(?array $customFields): void
    {
        $this->customFields = $customFields;
    }
}
