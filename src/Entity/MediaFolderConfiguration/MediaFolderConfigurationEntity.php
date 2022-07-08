<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\MediaFolderConfiguration;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\MediaFolder\MediaFolderCollection;
use Swaggest\ShopwareSdk\Entity\MediaThumbnailSize\MediaThumbnailSizeCollection;

final class MediaFolderConfigurationEntity extends Entity
{
    use EntityIdTrait;

    protected bool $createThumbnails;

    protected bool $keepAspectRatio;

    protected ?int $thumbnailQuality;

    protected bool $private;

    protected bool $noAssociation;

    protected ?MediaFolderCollection $mediaFolders;

    protected ?MediaThumbnailSizeCollection $mediaThumbnailSizes;

    protected ?string $mediaThumbnailSizesRo;

    protected array $customFields;

    public function getCreateThumbnails(): bool
    {
        return $this->createThumbnails;
    }

    public function setCreateThumbnails(bool $createThumbnails): void
    {
        $this->createThumbnails = $createThumbnails;
    }

    public function getKeepAspectRatio(): bool
    {
        return $this->keepAspectRatio;
    }

    public function setKeepAspectRatio(bool $keepAspectRatio): void
    {
        $this->keepAspectRatio = $keepAspectRatio;
    }

    public function getThumbnailQuality(): ?int
    {
        return $this->thumbnailQuality;
    }

    public function setThumbnailQuality(?int $thumbnailQuality): void
    {
        $this->thumbnailQuality = $thumbnailQuality;
    }

    public function getPrivate(): bool
    {
        return $this->private;
    }

    public function setPrivate(bool $private): void
    {
        $this->private = $private;
    }

    public function getNoAssociation(): bool
    {
        return $this->noAssociation;
    }

    public function setNoAssociation(bool $noAssociation): void
    {
        $this->noAssociation = $noAssociation;
    }

    public function getMediaFolders(): ?MediaFolderCollection
    {
        return $this->mediaFolders;
    }

    public function setMediaFolders(?MediaFolderCollection $mediaFolders): void
    {
        $this->mediaFolders = $mediaFolders;
    }

    public function getMediaThumbnailSizes(): ?MediaThumbnailSizeCollection
    {
        return $this->mediaThumbnailSizes;
    }

    public function setMediaThumbnailSizes(?MediaThumbnailSizeCollection $mediaThumbnailSizes): void
    {
        $this->mediaThumbnailSizes = $mediaThumbnailSizes;
    }

    public function getMediaThumbnailSizesRo(): ?string
    {
        return $this->mediaThumbnailSizesRo;
    }

    public function setMediaThumbnailSizesRo(?string $mediaThumbnailSizesRo): void
    {
        $this->mediaThumbnailSizesRo = $mediaThumbnailSizesRo;
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
