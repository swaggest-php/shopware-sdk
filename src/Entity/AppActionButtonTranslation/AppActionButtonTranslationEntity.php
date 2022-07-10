<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\AppActionButtonTranslation;

use Swaggest\ShopwareSdk\Entity\AppActionButton\AppActionButtonEntity;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\Language\LanguageEntity;

final class AppActionButtonTranslationEntity extends Entity
{
    protected string $label;

    protected string $appActionButtonId;

    protected string $languageId;

    protected ?AppActionButtonEntity $appActionButton;

    protected ?LanguageEntity $language;

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    public function getAppActionButtonId(): string
    {
        return $this->appActionButtonId;
    }

    public function setAppActionButtonId(string $appActionButtonId): void
    {
        $this->appActionButtonId = $appActionButtonId;
    }

    public function getLanguageId(): string
    {
        return $this->languageId;
    }

    public function setLanguageId(string $languageId): void
    {
        $this->languageId = $languageId;
    }

    public function getAppActionButton(): ?AppActionButtonEntity
    {
        return $this->appActionButton;
    }

    public function setAppActionButton(?AppActionButtonEntity $appActionButton): void
    {
        $this->appActionButton = $appActionButton;
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
