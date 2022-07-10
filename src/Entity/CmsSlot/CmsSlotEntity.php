<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\CmsSlot;

use Swaggest\ShopwareSdk\Entity\CmsBlock\CmsBlockEntity;
use Swaggest\ShopwareSdk\Entity\CmsSlotTranslation\CmsSlotTranslationCollection;
use Swaggest\ShopwareSdk\Entity\Entity;

final class CmsSlotEntity extends Entity
{
    protected string $type;

    protected string $slot;

    protected ?bool $locked;

    protected ?array $config;

    protected ?array $customFields;

    protected ?array $data;

    protected string $blockId;

    protected ?CmsBlockEntity $block;

    protected ?CmsSlotTranslationCollection $translations;

    protected ?string $cmsBlockVersionId;

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getSlot(): string
    {
        return $this->slot;
    }

    public function setSlot(string $slot): void
    {
        $this->slot = $slot;
    }

    public function getLocked(): ?bool
    {
        return $this->locked;
    }

    public function setLocked(?bool $locked): void
    {
        $this->locked = $locked;
    }

    public function getConfig(): ?array
    {
        return $this->config;
    }

    public function setConfig(?array $config): void
    {
        $this->config = $config;
    }

    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    public function setCustomFields(?array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getData(): ?array
    {
        return $this->data;
    }

    public function setData(?array $data): void
    {
        $this->data = $data;
    }

    public function getBlockId(): string
    {
        return $this->blockId;
    }

    public function setBlockId(string $blockId): void
    {
        $this->blockId = $blockId;
    }

    public function getBlock(): ?CmsBlockEntity
    {
        return $this->block;
    }

    public function setBlock(?CmsBlockEntity $block): void
    {
        $this->block = $block;
    }

    public function getTranslations(): ?CmsSlotTranslationCollection
    {
        return $this->translations;
    }

    public function setTranslations(?CmsSlotTranslationCollection $translations): void
    {
        $this->translations = $translations;
    }

    public function getCmsBlockVersionId(): ?string
    {
        return $this->cmsBlockVersionId;
    }

    public function setCmsBlockVersionId(?string $cmsBlockVersionId): void
    {
        $this->cmsBlockVersionId = $cmsBlockVersionId;
    }
}
