<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\AppCmsBlockTranslation;

use Swaggest\ShopwareSdk\Entity\AppCmsBlock\AppCmsBlockEntity;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\Language\LanguageEntity;

final class AppCmsBlockTranslationEntity extends Entity
{
    use EntityIdTrait;

    protected string $label;

    protected string $appCmsBlockId;

    protected string $languageId;

    protected ?AppCmsBlockEntity $appCmsBlock;

    protected ?LanguageEntity $language;

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    public function getAppCmsBlockId(): string
    {
        return $this->appCmsBlockId;
    }

    public function setAppCmsBlockId(string $appCmsBlockId): void
    {
        $this->appCmsBlockId = $appCmsBlockId;
    }

    public function getLanguageId(): string
    {
        return $this->languageId;
    }

    public function setLanguageId(string $languageId): void
    {
        $this->languageId = $languageId;
    }

    public function getAppCmsBlock(): ?AppCmsBlockEntity
    {
        return $this->appCmsBlock;
    }

    public function setAppCmsBlock(?AppCmsBlockEntity $appCmsBlock): void
    {
        $this->appCmsBlock = $appCmsBlock;
    }

    public function getLanguage(): ?LanguageEntity
    {
        return $this->language;
    }

    public function setLanguage(?LanguageEntity $language): void
    {
        $this->language = $language;
    }
}
