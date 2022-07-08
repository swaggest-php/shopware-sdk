<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\MediaFolderConfigurationMediaThumbnailSize;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\MediaFolderConfiguration\MediaFolderConfigurationEntity;
use Swaggest\ShopwareSdk\Entity\MediaThumbnailSize\MediaThumbnailSizeEntity;

final class MediaFolderConfigurationMediaThumbnailSizeEntity extends Entity
{
    use EntityIdTrait;

    protected string $mediaFolderConfigurationId;

    protected string $mediaThumbnailSizeId;

    protected ?MediaFolderConfigurationEntity $mediaFolderConfiguration;

    protected ?MediaThumbnailSizeEntity $mediaThumbnailSize;

    public function getMediaFolderConfigurationId(): string
    {
        return $this->mediaFolderConfigurationId;
    }

    public function setMediaFolderConfigurationId(string $mediaFolderConfigurationId): void
    {
        $this->mediaFolderConfigurationId = $mediaFolderConfigurationId;
    }

    public function getMediaThumbnailSizeId(): string
    {
        return $this->mediaThumbnailSizeId;
    }

    public function setMediaThumbnailSizeId(string $mediaThumbnailSizeId): void
    {
        $this->mediaThumbnailSizeId = $mediaThumbnailSizeId;
    }

    public function getMediaFolderConfiguration(): ?MediaFolderConfigurationEntity
    {
        return $this->mediaFolderConfiguration;
    }

    public function setMediaFolderConfiguration(?MediaFolderConfigurationEntity $mediaFolderConfiguration): void
    {
        $this->mediaFolderConfiguration = $mediaFolderConfiguration;
    }

    public function getMediaThumbnailSize(): ?MediaThumbnailSizeEntity
    {
        return $this->mediaThumbnailSize;
    }

    public function setMediaThumbnailSize(?MediaThumbnailSizeEntity $mediaThumbnailSize): void
    {
        $this->mediaThumbnailSize = $mediaThumbnailSize;
    }
}
