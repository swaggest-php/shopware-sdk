<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\CmsSlotTranslation;

use Swaggest\ShopwareSdk\Entity\CmsSlot\CmsSlotEntity;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\Language\LanguageEntity;

final class CmsSlotTranslationEntity extends Entity
{
    use EntityIdTrait;

    protected ?array $config;

    protected ?array $customFields;

    protected string $cmsSlotId;

    protected string $languageId;

    protected ?CmsSlotEntity $cmsSlot;

    protected ?LanguageEntity $language;

    protected ?string $cmsSlotVersionId;

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

    public function getCmsSlotId(): string
    {
        return $this->cmsSlotId;
    }

    public function setCmsSlotId(string $cmsSlotId): void
    {
        $this->cmsSlotId = $cmsSlotId;
    }

    public function getLanguageId(): string
    {
        return $this->languageId;
    }

    public function setLanguageId(string $languageId): void
    {
        $this->languageId = $languageId;
    }

    public function getCmsSlot(): ?CmsSlotEntity
    {
        return $this->cmsSlot;
    }

    public function setCmsSlot(?CmsSlotEntity $cmsSlot): void
    {
        $this->cmsSlot = $cmsSlot;
    }

    public function getLanguage(): ?LanguageEntity
    {
        return $this->language;
    }

    public function setLanguage(?LanguageEntity $language): void
    {
        $this->language = $language;
    }

    public function getCmsSlotVersionId(): ?string
    {
        return $this->cmsSlotVersionId;
    }

    public function setCmsSlotVersionId(?string $cmsSlotVersionId): void
    {
        $this->cmsSlotVersionId = $cmsSlotVersionId;
    }
}
