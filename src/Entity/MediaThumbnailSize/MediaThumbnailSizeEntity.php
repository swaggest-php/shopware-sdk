<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\MediaThumbnailSize;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\MediaFolderConfiguration\MediaFolderConfigurationCollection;

final class MediaThumbnailSizeEntity extends Entity
{
    use EntityIdTrait;

    protected int $width;

    protected int $height;

    protected ?MediaFolderConfigurationCollection $mediaFolderConfigurations;

    protected array $customFields;

    public function getWidth(): int
    {
        return $this->width;
    }

    public function setWidth(int $width): void
    {
        $this->width = $width;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function setHeight(int $height): void
    {
        $this->height = $height;
    }

    public function getMediaFolderConfigurations(): ?MediaFolderConfigurationCollection
    {
        return $this->mediaFolderConfigurations;
    }

    public function setMediaFolderConfigurations(?MediaFolderConfigurationCollection $mediaFolderConfigurations): void
    {
        $this->mediaFolderConfigurations = $mediaFolderConfigurations;
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
